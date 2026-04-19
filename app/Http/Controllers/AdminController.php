<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Pack;
use App\Models\PackItem;
use App\Models\ProductSize;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // ===== DASHBOARD =====
    public function dashboard()
    {
        $products_count = Product::count();
        $packs_count = Pack::count();
        $reviews_count = \App\Models\Review::count();
        $total_sizes = ProductSize::count();

        $recent_reviews = \App\Models\Review::latest()->limit(5)->get();

        return view('admin.dashboard', compact(
            'products_count',
            'packs_count',
            'reviews_count',
            'total_sizes',
            'recent_reviews'
        ));
    }

    // ===== PRODUCTS =====
    public function products()
    {
        $products = Product::with('sizes', 'category')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function createProduct()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'origin' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'sizes' => 'array',
            'sizes.*.size' => 'string|max:50',
            'sizes.*.price' => 'numeric|min:0',
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product = Product::create($validated);

        // Créer les tailles
        if ($request->has('sizes')) {
            foreach ($request->input('sizes') as $size) {
                if ($size['size'] && $size['price']) {
                    $product->sizes()->create([
                        'size' => $size['size'],
                        'price' => $size['price'],
                    ]);
                }
            }
        }

        return redirect()->route('admin.products')->with('success', 'Produit créé avec succès !');
    }

    public function editProduct(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'origin' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('admin.products')->with('success', 'Produit mis à jour !');
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Produit supprimé !');
    }

    // ===== PRODUCT SIZES =====
    public function createSize(Product $product)
    {
        return view('admin.products.size', compact('product'));
    }

    public function storeSize(Request $request, Product $product)
    {
        $validated = $request->validate([
            'size' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
        ]);

        $product->sizes()->create($validated);

        return redirect()->route('admin.editProduct', $product)->with('success', 'Taille ajoutée !');
    }

    public function deleteSize(ProductSize $size)
    {
        $product = $size->product;
        $size->delete();
        return redirect()->route('admin.editProduct', $product)->with('success', 'Taille supprimée !');
    }

    // ===== PACKS =====
    public function packs()
    {
        $packs = Pack::with('items')->paginate(10);
        return view('admin.packs.index', compact('packs'));
    }

    public function createPack()
    {
        $products = Product::all();
        return view('admin.packs.create', compact('products'));
    }

    public function storePack(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('packs', 'public');
        }

        Pack::create($validated);

        return redirect()->route('admin.packs')->with('success', 'Pack créé avec succès !');
    }

    public function editPack(Pack $pack)
    {
        $products = Product::all();
        return view('admin.packs.edit', compact('pack', 'products'));
    }

    public function updatePack(Request $request, Pack $pack)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('packs', 'public');
        }

        $pack->update($validated);

        return redirect()->route('admin.packs')->with('success', 'Pack mis à jour !');
    }

    public function deletePack(Pack $pack)
    {
        $pack->delete();
        return redirect()->route('admin.packs')->with('success', 'Pack supprimé !');
    }

    // ===== PACK ITEMS =====
    public function addPackItem(Request $request, Pack $pack)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'size' => 'nullable|string|max:50',
        ]);

        $pack->items()->create($validated);

        return redirect()->route('admin.editPack', $pack)->with('success', 'Produit ajouté au pack !');
    }

    public function removePackItem(PackItem $item)
    {
        $pack = $item->pack;
        $item->delete();
        return redirect()->route('admin.editPack', $pack)->with('success', 'Produit retiré du pack !');
    }
}
