@extends('admin.layout')

@section('title', 'Ajouter une taille')

@section('content')

<h1 style="color: var(--brown); margin-bottom: 2rem;">Ajouter une taille pour : {{ $product->name }}</h1>

<div class="card" style="max-width: 500px;">
    <form action="{{ route('admin.storeSize', $product) }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Taille *</label>
            <input type="text" name="size" placeholder="Ex: 250g, 500g, 1 kg" required value="{{ old('size') }}">
            @error('size') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Prix (DH) *</label>
            <input type="number" name="price" placeholder="Ex: 100" step="0.01" required value="{{ old('price') }}">
            @error('price') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-row" style="margin-top: 2rem;">
            <a href="{{ route('admin.editProduct', $product) }}" class="btn btn-secondary" style="width: 100%; justify-content: center;">Annuler</a>
            <button type="submit" class="btn" style="width: 100%; justify-content: center;">➕ Ajouter la taille</button>
        </div>
    </form>
</div>

@endsection
