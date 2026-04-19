<?php

namespace Database\Seeders;

use App\Models\Pack;
use Illuminate\Database\Seeder;

class PackItemSeeder extends Seeder
{
    public function run()
    {
        $packs = Pack::all();

        if ($packs->count() < 2) return;

        $packs[0]->items()->createMany([
            ['product_id' => 1, 'quantity' => 2, 'size' => 'M'],
            ['product_id' => 2, 'quantity' => 1, 'size' => 'S'],
        ]);

        $packs[1]->items()->createMany([
            ['product_id' => 1, 'quantity' => 3, 'size' => 'L'],
            ['product_id' => 3, 'quantity' => 2, 'size' => 'S'],
        ]);
    }
}