@extends('admin.layout')

@section('title', 'Ajouter un produit')

@section('content')

<h1 style="color: var(--brown); margin-bottom: 2rem;">Ajouter un produit</h1>

<div class="card" style="max-width: 700px;">
    <form action="{{ route('admin.storeProduct') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nom du produit *</label>
            <input type="text" name="name" placeholder="Ex: Miel de Thym" required value="{{ old('name') }}">
            @error('name') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Origine *</label>
                <input type="text" name="origin" placeholder="Ex: Montagnes du Maroc" required value="{{ old('origin') }}">
                @error('origin') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Catégorie *</label>
                <select name="category_id" required>
                    <option value="">Choisir une catégorie</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" @selected(old('category_id') == $cat->id)>{{ $cat->name }}</option>
                    @endforeach
                </select>
                @error('category_id') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" placeholder="Description du produit..." rows="3">{{ old('description') }}</textarea>
            @error('description') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" accept="image/*">
            @error('image') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <!-- TAILLES ET PRIX -->
        <div style="background: var(--cream); padding: 1.5rem; border-radius: 8px; margin: 2rem 0;">
            <h3 style="color: var(--brown); margin-bottom: 1rem; font-size: 1.1rem;">Tailles et Prix 📦</h3>

            <div id="sizes-container">
                <div class="size-row" style="display: grid; grid-template-columns: 1fr 1fr auto; gap: 0.5rem; margin-bottom: 1rem;">
                    <input type="text" name="sizes[0][size]" placeholder="Ex: 250g" class="size-input" style="padding: 0.8rem; border: 1px solid #ddd; border-radius: 6px;">
                    <input type="number" name="sizes[0][price]" placeholder="Ex: 100" step="0.01" class="price-input" style="padding: 0.8rem; border: 1px solid #ddd; border-radius: 6px;">
                    <button type="button" class="btn btn-danger" onclick="removeSizeRow(this)" style="padding: 0.8rem 1rem;">🗑️</button>
                </div>
            </div>

            <button type="button" class="btn" onclick="addSizeRow()" style="margin-top: 1rem;">➕ Ajouter une taille</button>
        </div>

        <div class="form-row" style="margin-top: 2rem;">
            <a href="{{ route('admin.products') }}" class="btn btn-secondary" style="width: 100%; justify-content: center;">Annuler</a>
            <button type="submit" class="btn" style="width: 100%; justify-content: center;">➕ Créer le produit</button>
        </div>
    </form>
</div>

<script>
function addSizeRow() {
    const container = document.getElementById('sizes-container');
    const rowCount = container.children.length;

    const newRow = document.createElement('div');
    newRow.className = 'size-row';
    newRow.style.display = 'grid';
    newRow.style.gridTemplateColumns = '1fr 1fr auto';
    newRow.style.gap = '0.5rem';
    newRow.style.marginBottom = '1rem';

    newRow.innerHTML = `
        <input type="text" name="sizes[${rowCount}][size]" placeholder="Ex: 500g" class="size-input" style="padding: 0.8rem; border: 1px solid #ddd; border-radius: 6px;">
        <input type="number" name="sizes[${rowCount}][price]" placeholder="Ex: 200" step="0.01" class="price-input" style="padding: 0.8rem; border: 1px solid #ddd; border-radius: 6px;">
        <button type="button" class="btn btn-danger" onclick="removeSizeRow(this)" style="padding: 0.8rem 1rem;">🗑️</button>
    `;

    container.appendChild(newRow);
}

function removeSizeRow(btn) {
    btn.parentElement.remove();
}
</script>

@endsection
