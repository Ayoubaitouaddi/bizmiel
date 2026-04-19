<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::insert([
            [
                'name' => 'Fatima Z',
                'city' => 'Agadir',
                'product_id' => 1,
                'rating' => 5,
                'comment' => 'Très bon miel 👍',
                'is_approved' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hassan E',
                'city' => 'Meknès',
                'product_id' => 2,
                'rating' => 5,
                'comment' => 'Qualité incroyable',
                'is_approved' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}