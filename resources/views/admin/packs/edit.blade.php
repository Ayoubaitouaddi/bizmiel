@extends('admin.layout')

@section('title', 'Éditer un pack')

@section('content')

<h1 style="color: var(--brown); margin-bottom: 2rem;">Éditer : {{ $pack->name }}</h1>

<div class="card" style="max-width: 600px;">
    <form action="{{ route('admin.updatePack', $pack) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nom du pack *</label>
            <input type="text" name="name" placeholder="Ex: Pack Découverte" required value="{{ $pack->name }}">
            @error('name') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" placeholder="Description du pack..." rows="4">{{ $pack->description }}</textarea>
            @error('description') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Prix (DH) *</label>
            <input type="number" name="price" placeholder="Ex: 500" step="0.01" required value="{{ $pack->price }}">
            @error('price') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Image</label>
            @if($pack->image)
                <div style="margin-bottom: 1rem;">
                    <img src="{{ asset('storage/' . $pack->image) }}" alt="{{ $pack->name }}" style="max-width: 150px; border-radius: 6px;">
                </div>
            @endif
            <input type="file" name="image" accept="image/*">
            @error('image') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-row" style="margin-top: 2rem;">
            <a href="{{ route('admin.packs') }}" class="btn btn-secondary" style="width: 100%; justify-content: center;">Annuler</a>
            <button type="submit" class="btn" style="width: 100%; justify-content: center;">💾 Mettre à jour</button>
        </div>
    </form>
</div>

<!-- PRODUITS DU PACK -->
<div class="card" style="margin-top: 3rem;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2>Produits du pack</h2>
        <button type="button" class="btn" onclick="document.getElementById('addItemForm').style.display = document.getElementById('addItemForm').style.display === 'none' ? 'block' : 'none'">➕ Ajouter un produit</button>
    </div>

    <!-- FORMULAIRE AJOUT PRODUIT -->
    <div id="addItemForm" style="display: none; background: var(--cream); padding: 1.5rem; border-radius: 8px; margin-bottom: 1.5rem;">
        <form action="{{ route('admin.addPackItem', $pack) }}" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label>Produit *</label>
                    <select name="product_id" required>
                        <option value="">Choisir un produit</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Quantité *</label>
                    <input type="number" name="quantity" placeholder="Ex: 2" min="1" required value="1">
                </div>
            </div>

            <div class="form-group">
                <label>Taille (optionnel)</label>
                <input type="text" name="size" placeholder="Ex: 250g">
            </div>

            <div class="form-row">
                <button type="button" class="btn btn-secondary" style="width: 100%; justify-content: center;" onclick="document.getElementById('addItemForm').style.display = 'none'">Annuler</button>
                <button type="submit" class="btn" style="width: 100%; justify-content: center;">➕ Ajouter</button>
            </div>
        </form>
    </div>

    <!-- LISTE PRODUITS -->
    @if($pack->items->count())
        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Taille</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pack->items as $item)
                    <tr>
                        <td>{{ $item->product->name ?? 'Produit supprimé' }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->size ?? '-' }}</td>
                        <td>
                            <form action="{{ route('admin.removePackItem', $item) }}" method="POST" onsubmit="return confirm('Retirer ce produit du pack ?');" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding: 0.5rem 1rem; font-size: 0.85rem;">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="text-align: center; color: var(--text-muted); padding: 2rem;">Aucun produit dans ce pack</p>
    @endif
</div>

@endsection
