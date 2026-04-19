@extends('admin.layout')

@section('title', 'Tableau de bord')

@section('content')

<h1 style="margin-bottom: 2rem; color: var(--brown);">Tableau de bord</h1>

<!-- STATS PRINCIPALES -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">

    <div class="card" style="text-align: center;">
        <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">📦</div>
        <h3 style="color: var(--honey); font-size: 2rem;">{{ $products_count }}</h3>
        <p style="color: var(--text-muted);">Produits</p>
    </div>

    <div class="card" style="text-align: center;">
        <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🎁</div>
        <h3 style="color: var(--honey); font-size: 2rem;">{{ $packs_count }}</h3>
        <p style="color: var(--text-muted);">Packs</p>
    </div>

    <div class="card" style="text-align: center;">
        <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">⭐</div>
        <h3 style="color: var(--honey); font-size: 2rem;">{{ $reviews_count }}</h3>
        <p style="color: var(--text-muted);">Avis clients</p>
    </div>

    <div class="card" style="text-align: center;">
        <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">📏</div>
        <h3 style="color: var(--honey); font-size: 2rem;">{{ $total_sizes }}</h3>
        <p style="color: var(--text-muted);">Tailles</p>
    </div>

</div>

<!-- ACTIONS RAPIDES -->
<div class="card" style="margin-bottom: 2rem;">
    <h2 style="margin-bottom: 1rem;">Actions rapides</h2>
    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
        <a href="{{ route('admin.createProduct') }}" class="btn">➕ Ajouter un produit</a>
        <a href="{{ route('admin.createPack') }}" class="btn">➕ Ajouter un pack</a>
        <a href="{{ route('admin.products') }}" class="btn btn-secondary">📋 Voir tous les produits</a>
        <a href="{{ route('admin.packs') }}" class="btn btn-secondary">📋 Voir tous les packs</a>
    </div>
</div>

<!-- AVIS RÉCENTS -->
<div class="card">
    <h2 style="margin-bottom: 1rem;">Avis clients récents ⭐</h2>

    @if($recent_reviews->count())
        <table>
            <thead>
                <tr>
                    <th>Client</th>
                    <th>Produit</th>
                    <th>Note</th>
                    <th>Avis</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recent_reviews as $review)
                    <tr>
                        <td><strong>{{ $review->name }}</strong></td>
                        <td>{{ $review->product->name ?? '-' }}</td>
                        <td style="color: var(--honey);">{{ str_repeat('⭐', $review->rating) }}</td>
                        <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis;">{{ substr($review->comment, 0, 50) }}...</td>
                        <td style="font-size: 0.9rem; color: var(--text-muted);">{{ $review->created_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="text-align: center; padding: 2rem; color: var(--text-muted);">Aucun avis pour le moment</p>
    @endif
</div>

@endsection
