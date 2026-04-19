<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ProductSizeSeeder::class,
            PackSeeder::class,
            ReviewSeeder::class,
            PackItemSeeder::class,
        ]);
    }
}