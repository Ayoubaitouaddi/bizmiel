<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - Bizmiel</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --honey: #C8841A;
            --honey-dark: #7A4E10;
            --brown: #3B2408;
            --cream: #FDF6E8;
            --text: #2C1A06;
            --text-muted: #7A5C3A;
            --white: #FFFDF7;
            --serif: 'Cormorant Garamond', Georgia, serif;
            --sans: 'DM Sans', system-ui, sans-serif;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: var(--sans);
            background: var(--cream);
            color: var(--text);
            line-height: 1.65;
        }

        .container { max-width: 1200px; margin: 0 auto; padding: 40px 5%; }

        h1 { font-family: var(--serif); font-size: 2.5rem; color: var(--brown); margin-bottom: 1rem; }
        .subtitle { color: var(--text-muted); font-size: 1rem; margin-bottom: 3rem; }

        .contact-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--brown);
        }

        input, textarea {
            width: 100%;
            padding: 0.9rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: var(--sans);
            font-size: 0.95rem;
        }

        textarea { resize: vertical; min-height: 150px; }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--honey);
            box-shadow: 0 0 0 3px rgba(200, 132, 26, 0.1);
        }

        .btn {
            background: var(--honey);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
            transition: background 0.2s;
        }

        .btn:hover { background: var(--honey-dark); }

        .alert {
            padding: 1rem;
            border-radius: 8px;
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

        .info-card {
            background: white;
            padding: 1.5rem;
            border-radius: 12px;
            border-left: 4px solid var(--honey);
        }

        .info-card h3 { color: var(--honey); margin-bottom: 0.5rem; font-size: 1rem; }
        .info-card p { color: var(--text-muted); font-size: 0.9rem; }

        a {
            color: var(--honey);
            text-decoration: none;
        }

        a:hover { text-decoration: underline; }

        @media (max-width: 768px) {
            .contact-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>📧 Contactez-nous</h1>
    <p class="subtitle">Nous sommes à votre écoute ! Envoyez-nous vos questions, suggestions ou demandes spéciales.</p>

    @if(session('success'))
        <div class="alert alert-success">✅ {{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-error">
            <strong>Erreurs :</strong>
            <ul style="margin-top: 0.5rem;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="contact-grid">
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div class="form-group">
                    <label>Nom *</label>
                    <input type="text" name="name" required value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" required value="{{ old('email') }}">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div class="form-group">
                    <label>Téléphone</label>
                    <input type="tel" name="phone" value="{{ old('phone') }}">
                </div>

                <div class="form-group">
                    <label>Sujet *</label>
                    <input type="text" name="subject" required value="{{ old('subject') }}">
                </div>
            </div>

            <div class="form-group">
                <label>Message *</label>
                <textarea name="message" required>{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn">📧 Envoyer le message</button>
        </form>

        <div>
            <div class="info-card" style="margin-bottom: 1.5rem;">
                <h3>📞 Téléphone</h3>
                <p><a href="tel:+212724577453">+212 724 577 453</a></p>
            </div>

            <div class="info-card" style="margin-bottom: 1.5rem;">
                <h3>💬 WhatsApp</h3>
                <p><a href="https://wa.me/212724577453" target="_blank">Discutez avec nous</a></p>
            </div>

            <div class="info-card">
                <h3>⏰ Heures d'ouverture</h3>
                <p>Lun-Ven: 9h-18h<br>Sam: 10h-14h<br>Dim: Fermé</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
