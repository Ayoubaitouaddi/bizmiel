<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Miel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Packs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}