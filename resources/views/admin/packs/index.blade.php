@extends('admin.layout')

@section('title', 'Packs')

@section('content')

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1 style="color: var(--brown);">Packs</h1>
    <a href="{{ route('admin.createPack') }}" class="btn">➕ Ajouter un pack</a>
</div>

<div class="card">
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix (DH)</th>
                <th>Produits</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($packs as $pack)
                <tr>
                    <td><strong>{{ $pack->name }}</strong></td>
                    <td>{{ $pack->price }} DH</td>
                    <td>{{ $pack->items->count() }} produit(s)</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.editPack', $pack) }}" class="btn" style="background: var(--text-muted); padding: 0.5rem 1rem; font-size: 0.85rem;">✏️ Éditer</a>
                            <form action="{{ route('admin.deletePack', $pack) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="padding: 0.5rem 1rem; font-size: 0.85rem;">🗑️ Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center" style="padding: 2rem;">Aucun pack trouvé</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @if($packs->hasPages())
        <div style="margin-top: 2rem;">
            {{ $packs->links() }}
        </div>
    @endif
</div>

@endsection
