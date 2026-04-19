@extends('admin.layout')

@section('title', 'Éditer un produit')

@section('content')

<h1 style="color: var(--brown); margin-bottom: 2rem;">Éditer : {{ $product->name }}</h1>

<div class="card" style="max-width: 600px;">
    <form action="{{ route('admin.updateProduct', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nom du produit *</label>
            <input type="text" name="name" placeholder="Ex: Miel de Thym" required value="{{ $product->name }}">
            @error('name') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Origine *</label>
                <input type="text" name="origin" placeholder="Ex: Montagnes du Maroc" required value="{{ $product->origin }}">
                @error('origin') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Catégorie *</label>
                <select name="category_id" required>
                    <option value="">Choisir une catégorie</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" @selected($product->category_id == $cat->id)>{{ $cat->name }}</option>
                    @endforeach
                </select>
                @error('category_id') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" placeholder="Description du produit..." rows="4">{{ $product->description }}</textarea>
            @error('description') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Image</label>
            @if($product->image)
                <div style="margin-bottom: 1rem;">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 150px; border-radius: 6px;">
                </div>
            @endif
            <input type="file" name="image" accept="image/*">
            @error('image') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-row" style="margin-top: 2rem;">
            <a href="{{ route('admin.products') }}" class="btn btn-secondary" style="width: 100%; justify-content: center;">Annuler</a>
            <button type="submit" class="btn" style="width: 100%; justify-content: center;">💾 Mettre à jour</button>
        </div>
    </form>
</div>
<div class="card" style="margin-top: 3rem;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
        <h2>Tailles et prix</h2>
        <a href="{{ route('admin.createSize', $product) }}" class="btn">➕ Ajouter une taille</a>
    </div>

    @if($product->sizes->count())
        <table>
            <thead>
                <tr>
                    <th>Taille</th>
                    <th>Prix (DH)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product->sizes as $size)
                    <tr>
                        <td>{{ $size->size }}</td>
                        <td>{{ $size->price }} DH</td>
                        <td>
                            <form action="{{ route('admin.deleteSize', $size) }}" method="POST" onsubmit="return confirm('Supprimer cette taille ?');">
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
        <p style="text-align: center; color: var(--text-muted); padding: 2rem;">Aucune taille ajoutée</p>
    @endif
</div>

@endsection
