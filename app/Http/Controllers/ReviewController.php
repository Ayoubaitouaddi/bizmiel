<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:100',
            'city'       => 'nullable|string|max:100',
            'product_id' => 'nullable|exists:products,id',
            'rating'     => 'required|integer|min:1|max:5',
            'comment'    => 'required|string|max:1000',
        ]);

        Review::create([
            'name'        => $request->name,
            'city'        => $request->city,
            'product_id'  => $request->product_id ?: null,
            'rating'      => $request->rating,
            'comment'     => $request->comment,
            'is_approved' => false,
        ]);

       return redirect()->to('/#avis')->with('success', 'Merci pour votre avis !');
    }
}