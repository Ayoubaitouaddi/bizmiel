<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductSize;

class ProductSizeSeeder extends Seeder
{
    public function run(): void
    {
        ProductSize::insert([

            // =========================
            // Miel Orange (product_id = 1)
            // =========================
            [
                'product_id' => 1,
                'size' => '250g',
                'price' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'size' => '500g',
                'price' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 1,
                'size' => '1kg',
                'price' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // Miel Kherroub (product_id = 2)
            // =========================
            [
                'product_id' => 2,
                'size' => '250g',
                'price' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'size' => '500g',
                'price' => 115,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'size' => '1kg',
                'price' => 240,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // Miel Z3tr (product_id = 3)
            // =========================
            [
                'product_id' => 3,
                'size' => '250g',
                'price' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'size' => '500g',
                'price' => 180,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 3,
                'size' => '1kg',
                'price' => 380,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // Miel Sidr (product_id = 4)
            // =========================
            [
                'product_id' => 4,
                'size' => '250g',
                'price' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 4,
                'size' => '500g',
                'price' => 140,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 4,
                'size' => '1kg',
                'price' => 270,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // Miel Rbi3 (Printemps) (product_id = 5)
            // =========================
            [
                'product_id' => 5,
                'size' => '250g',
                'price' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 5,
                'size' => '500g',
                'price' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 5,
                'size' => '1kg',
                'price' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // Miel Caliptuss (product_id = 6)
            // =========================
            [
                'product_id' => 6,
                'size' => '250g',
                'price' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 6,
                'size' => '500g',
                'price' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 6,
                'size' => '1kg',
                'price' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // Miel Argan (product_id = 7)
            // =========================
            [
                'product_id' => 7,
                'size' => '250g',
                'price' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 7,
                'size' => '500g',
                'price' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 7,
                'size' => '1kg',
                'price' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // Miel Dghmous (product_id = 8)
            // =========================
            [
                'product_id' => 8,
                'size' => '250g',
                'price' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 8,
                'size' => '500g',
                'price' => 160,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 8,
                'size' => '1kg',
                'price' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // Miel Chouk (product_id = 9)
            // =========================
            [
                'product_id' => 9,
                'size' => '250g',
                'price' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 9,
                'size' => '500g',
                'price' => 160,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 9,
                'size' => '1kg',
                'price' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}