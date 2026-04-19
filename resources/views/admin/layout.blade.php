<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Bizmiel Admin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        :root {
            --honey: #C8841A;
            --honey-dark: #7A4E10;
            --brown: #3B2408;
            --cream: #FDF6E8;
            --text: #2C1A06;
            --text-muted: #7A5C3A;
            --white: #FFFDF7;
        }
        body {
            font-family: 'DM Sans', system-ui, sans-serif;
            background: var(--cream);
            color: var(--text);
            line-height: 1.65;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background: var(--brown);
            color: white;
            padding: 1rem 0;
            margin-bottom: 2rem;
        }
        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--honey);
        }
        .nav-admin {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        .nav-admin a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: color 0.2s;
        }
        .nav-admin a:hover,
        .nav-admin a.active { color: var(--honey); }
        .user-menu {
            display: flex;
            gap: 1rem;
            align-items: center;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--honey);
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background 0.2s;
        }
        .btn:hover { background: var(--honey-dark); }
        .btn-danger {
            background: #e74c3c;
        }
        .btn-danger:hover { background: #c0392b; }
        .btn-secondary {
            background: var(--text-muted);
        }
        .btn-secondary:hover { background: var(--brown); }
        .alert {
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1rem;
        }
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }
        th {
            background: var(--honey);
            color: white;
            font-weight: 500;
        }
        tr:hover { background: var(--cream); }
        .form-group {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--brown);
        }
        input, textarea, select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: inherit;
            font-size: 0.95rem;
        }
        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: var(--honey);
            box-shadow: 0 0 0 3px rgba(200, 132, 26, 0.1);
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }
        .card {
            background: var(--white);
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        .card h2 {
            margin-bottom: 1.5rem;
            color: var(--brown);
        }
        .actions {
            display: flex;
            gap: 0.5rem;
        }
        .actions a, .actions form {
            display: inline;
        }
        .text-center { text-align: center; }
        .mt-2 { margin-top: 2rem; }
        @media (max-width: 768px) {
            .nav-admin { gap: 1rem; font-size: 0.9rem; }
            .form-row { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <div class="logo">🍯 Bizmiel Admin</div>
        <ul class="nav-admin">
            <li><a href="{{ route('admin.dashboard') }}" class="@if(Route::currentRouteName() === 'admin.dashboard') active @endif">Tableau de bord</a></li>
            <li><a href="{{ route('admin.products') }}" class="@if(str_starts_with(Route::currentRouteName(), 'admin.product')) active @endif">Produits</a></li>
            <li><a href="{{ route('admin.packs') }}" class="@if(str_starts_with(Route::currentRouteName(), 'admin.pack')) active @endif">Packs</a></li>
        </ul>
        <div class="user-menu">
            <span>{{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" class="btn btn-secondary">Déconnexion</button>
            </form>
        </div>
    </div>
</header>

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            ✓ {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-error">
            <strong>Erreurs :</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>
