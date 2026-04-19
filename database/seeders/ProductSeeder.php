<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => "Miel d'Oranger",
                'slug' => Str::slug("Miel d'Oranger"),
                'description' => "Miel doux et parfumé aux fleurs d'oranger.",
                'origin' => "Maroc",
                'image' => "miel-oranger.jpeg",
                'category_id' => 1,
            ],
            [
                'name' => "Miel de Thym",
                'slug' => Str::slug("Miel de Thym"),
                'description' => "Miel puissant aux propriétés naturelles.",
                'origin' => "Maroc",
                'image' => "miel-thym.jpeg",
                'category_id' => 1,
            ],
            [
                'name' => "Miel de Chardon",
                'slug' => Str::slug("Miel de Chardon"),
                'description' => "Miel riche et légèrement épicé.",
                'origin' => "Maroc",
                'image' => "miel-chardon.jpeg",
                'category_id' => 1,
            ],
            [
                'name' => "Miel d'Euphorbe",
                'slug' => Str::slug("Miel d'Euphorbe"),
                'description' => "Miel rare de montagne très intense.",
                'origin' => "Maroc",
                'image' => "miel-euphorbe.jpeg",
                'category_id' => 1,
            ],
            [
                'name' => "Miel de Caroubier",
                'slug' => Str::slug("Miel de Caroubier"),
                'description' => "Notes caramélisées et profondes.",
                'origin' => "Maroc",
                'image' => "miel-caroubier.jpeg",
                'category_id' => 1,
            ],
            [
                'name' => "Miel de Jujubier",
                'slug' => Str::slug("Miel de Jujubier"),
                'description' => "Miel clair doux et digestif.",
                'origin' => "Maroc",
                'image' => "miel-jujubier.jpeg",
                'category_id' => 1,
            ],
            [
                'name' => "Miel de Printemps",
                'slug' => Str::slug("Miel de Printemps"),
                'description' => "Miel floral multi-fleurs.",
                'origin' => "Maroc",
                'image' => "miel-printemps.jpeg",
                'category_id' => 1,
            ],
            [
                'name' => "Miel d'Eucalyptus",
                'slug' => Str::slug("Miel d'Eucalyptus"),
                'description' => "Miel frais et mentholé.",
                'origin' => "Maroc",
                'image' => "miel-eucalyptus.jpeg",
                'category_id' => 1,
            ],
            [
                'name' => "Miel d'Argan",
                'slug' => Str::slug("Miel d'Argan"),
                'description' => "Miel premium rare du Souss-Massa.",
                'origin' => "Maroc",
                'image' => "miel-argan.jpeg",
                'category_id' => 1,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}