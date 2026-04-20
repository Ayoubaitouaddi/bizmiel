# Use a Node stage to build frontend assets
FROM node:20-alpine AS node_builder
WORKDIR /app
COPY package.json package-lock.json ./
COPY vite.config.js ./
COPY resources ./resources
RUN npm install
RUN npm run build

# Use a PHP Apache image for the Laravel app
FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        zip \
        libzip-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libonig-dev \
        libicu-dev \
        libxml2-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-install pdo pdo_mysql zip intl opcache \
    && a2dismod mpm_event mpm_worker \
    && a2enmod mpm_prefork \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# Copy the Laravel app source from the repository root
COPY ./ ./

# Copy the compiled frontend assets from the Node build stage
COPY --from=node_builder /app/public/build ./public/build

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction --no-progress

# Configure Apache DocumentRoot to Laravel's public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
ENV PORT 8080

# Configure Apache to use port 8080 and correct DocumentRoot
RUN sed -ri 's!DocumentRoot /var/www/html!DocumentRoot /var/www/html/public!' /etc/apache2/sites-available/*.conf \
    && sed -ri 's!<Directory /var/www/html>!<Directory /var/www/html/public>!' /etc/apache2/apache2.conf /etc/apache2/sites-available/*.conf \
    && sed -ri 's!Listen 80!Listen 8080!' /etc/apache2/ports.conf \
    && sed -ri 's!<VirtualHost \*:80>!<VirtualHost *:8080>!' /etc/apache2/sites-available/*.conf

# Create a custom VirtualHost configuration to ensure proper routing
RUN echo '<VirtualHost *:8080>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        Options Indexes FollowSymLinks\n\
        AllowOverride All\n\
        Require all granted\n\
        FallbackResource /index.php\n\
    </Directory>\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Enable mod_rewrite (already enabled above) and set up .htaccess support
RUN a2enmod rewrite

EXPOSE 8080

# Start Apache with clean environment
CMD ["apache2-foreground"]