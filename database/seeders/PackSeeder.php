<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pack;

class PackSeeder extends Seeder
{
    public function run(): void
    {
        Pack::insert([
            [
                'name' => 'Pack Vitalité',
                'description' => 'Boost énergie naturelle',
                'price' => 250,
                'image' => 'packs/vitalite.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pack Fitness',
                'description' => 'Idéal pour sport et récupération',
                'price' => 300,
                'image' => 'packs/fitness.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pack Cadeau',
                'description' => 'Coffret premium miel',
                'price' => 400,
                'image' => 'packs/cadeau.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}