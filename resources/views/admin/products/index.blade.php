@extends('admin.layout')

@section('title', 'Produits')

@section('content')

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1 style="color: var(--brown);">Produits</h1>
    <a href="{{ route('admin.createProduct') }}" class="btn">➕ Ajouter un produit</a>
</div>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Origine</th>
                <th>Catégorie</th>
                <th>Tailles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td><strong>{{ $product->name }}</strong></td>
                    <td>{{ $product->origin ?? '-' }}</td>
                    <td>{{ $product->category->name ?? '-' }}</td>
                    <td>{{ $product->sizes->count() }} taille(s)</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.editProduct', $product) }}" class="btn" style="background: var(--text-muted); padding: 0.5rem 1rem; font-size: 0.85rem;">✏️ Éditer</a>
                            <form action="{{ route('admin.deleteProduct', $product) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding: 0.5rem 1rem; font-size: 0.85rem;">🗑️ Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center" style="padding: 2rem;">Aucun produit trouvé</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if($products->hasPages())
        <div style="margin-top: 2rem;">
            {{ $products->links() }}
        </div>
    @endif
</div>

@endsection
