<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Pack;
use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        $product = Product::with('sizes')
            ->where('name', 'Miel de Thym')
            ->first();

        $packs = Pack::with('items.product')->latest()->get();

        return view('Home', [
            'products' => Product::latest()->get(),
            'packs' => $packs,
            'reviews' => Review::latest()->get(),
            'product' => $product, // مهم
        ]);
    }
    public function show($id)
    {
        $product = Product::with('sizes')->findOrFail($id);

        return view('product.show', compact('product'));
    }
}