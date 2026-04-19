@extends('admin.layout')

@section('title', 'Ajouter un pack')

@section('content')

<h1 style="color: var(--brown); margin-bottom: 2rem;">Ajouter un pack</h1>

<div class="card" style="max-width: 600px;">
    <form action="{{ route('admin.storePack') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nom du pack *</label>
            <input type="text" name="name" placeholder="Ex: Pack Découverte" required value="{{ old('name') }}">
            @error('name') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" placeholder="Description du pack..." rows="3">{{ old('description') }}</textarea>
            @error('description') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Prix (DH) *</label>
            <input type="number" name="price" placeholder="Ex: 500" step="0.01" required value="{{ old('price') }}">
            @error('price') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Image du pack 🖼️</label>
            <input type="file" name="image" accept="image/*">
            <small style="color: var(--text-muted);">Format: JPG, PNG, GIF | Max: 10 MB</small>
            @error('image') <span style="color: #e74c3c; font-size: 0.85rem;">{{ $message }}</span> @enderror
        </div>

        <div class="form-row" style="margin-top: 2rem;">
            <a href="{{ route('admin.packs') }}" class="btn btn-secondary" style="width: 100%; justify-content: center;">Annuler</a>
            <button type="submit" class="btn" style="width: 100%; justify-content: center;">➕ Créer le pack</button>
        </div>
    </form>
</div>

@endsection
