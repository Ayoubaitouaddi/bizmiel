<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bizmiel — La confiance en chaque goutte | Miel Naturel du Maroc</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>
  :root {
    --honey: #C8841A;
    --honey-light: #F5C842;
    --honey-dark: #7A4E10;
    --cream: #FDF6E8;
    --cream-deep: #F5E6C4;
    --brown: #3B2408;
    --brown-mid: #6B3F1A;
    --text: #2C1A06;
    --text-muted: #7A5C3A;
    --white: #FFFDF7;
    --wa: #25D366;
    --serif: 'Cormorant Garamond', Georgia, serif;
    --sans: 'DM Sans', system-ui, sans-serif;
    --radius: 12px;
    --radius-lg: 20px;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    font-family: var(--sans);
    background: var(--cream);
    color: var(--text);
    line-height: 1.65;
    overflow-x: hidden;
  }

  /* ── NAV ── */
  nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 100;
    background: rgba(253, 246, 232, 0.95);
    backdrop-filter: blur(8px);
    border-bottom: 1px solid rgba(200,132,26,0.15);
    padding: 0 5%;
    display: flex; align-items: center; justify-content: space-between;
    height: 64px;
  }
  .nav-logo {
    font-family: var(--serif);
    font-size: 1.6rem;
    font-weight: 600;
    color: var(--honey-dark);
    letter-spacing: 0.04em;
    text-decoration: none;
  }
  .nav-logo span { color: var(--honey); }
  .nav-logo-img { display:flex; align-items:center; text-decoration:none; flex-shrink:0; }
  .nav-logo-img img { height:48px; width:auto; }
  .nav-links { display: flex; gap: 2rem; list-style: none; }
  .nav-links a {
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--text-muted);
    text-decoration: none;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    transition: color 0.2s;
  }
  .nav-links a:hover { color: var(--honey); }
  .nav-cta {
    background: var(--honey);
    color: white;
    border: none;
    padding: 0.55rem 1.25rem;
    border-radius: 50px;
    font-family: var(--sans);
    font-size: 0.82rem;
    font-weight: 500;
    cursor: pointer;
    text-decoration: none;
    transition: background 0.2s, transform 0.15s;
    white-space: nowrap;
  }
  .nav-cta:hover { background: var(--honey-dark); transform: scale(1.03); }

  /* ── HERO ── */
  .hero {
    min-height: 100vh;
    display: flex; align-items: center;
    padding: 100px 5% 60px;
    position: relative;
    overflow: hidden;
  }
  .hero-bg {
    position: absolute; inset: 0;
    background: radial-gradient(ellipse 80% 80% at 70% 50%, rgba(245,200,66,0.18) 0%, transparent 70%),
                radial-gradient(ellipse 50% 60% at 20% 80%, rgba(200,132,26,0.12) 0%, transparent 60%);
  }
  .hero-honeycomb {
    position: absolute;
    right: -60px; top: 50%;
    transform: translateY(-50%);
    width: 520px; height: 520px;
    opacity: 0.07;
    font-size: 8rem;
    display: flex; flex-wrap: wrap; align-content: center;
    justify-content: center; gap: 0.5rem;
    letter-spacing: -0.2em;
    pointer-events: none;
  }
  .hero-content { position: relative; max-width: 620px; }
  .hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(200,132,26,0.12);
    color: var(--honey-dark);
    border: 1px solid rgba(200,132,26,0.3);
    padding: 0.35rem 1rem;
    border-radius: 50px;
    font-size: 0.78rem;
    font-weight: 500;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 1.5rem;
  }
  .hero-badge::before { content: "✦"; font-size: 0.6rem; }
  .hero h1 {
    font-family: var(--serif);
    font-size: clamp(2.8rem, 7vw, 5rem);
    font-weight: 500;
    line-height: 1.1;
    color: var(--brown);
    margin-bottom: 1.5rem;
  }
  .hero h1 em { font-style: italic; color: var(--honey); }
  .hero p {
    font-size: 1.05rem;
    color: var(--text-muted);
    max-width: 480px;
    margin-bottom: 2.5rem;
    line-height: 1.75;
  }
  .hero-actions { display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; }
  .btn-primary {
    display: inline-flex; align-items: center; gap: 10px;
    background: var(--honey);
    color: white;
    padding: 0.9rem 2rem;
    border-radius: 50px;
    font-size: 0.95rem;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s;
    border: none; cursor: pointer;
  }
  .btn-primary:hover { background: var(--honey-dark); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(200,132,26,0.35); }
  .btn-secondary {
    display: inline-flex; align-items: center; gap: 8px;
    color: var(--honey-dark);
    font-size: 0.9rem;
    font-weight: 500;
    text-decoration: none;
    border-bottom: 1.5px solid var(--honey);
    padding-bottom: 2px;
  }
  .hero-stats {
    display: flex; gap: 2.5rem;
    margin-top: 3.5rem;
    padding-top: 2.5rem;
    border-top: 1px solid rgba(200,132,26,0.2);
  }
  .hero-stat span {
    display: block;
    font-family: var(--serif);
    font-size: 2rem;
    font-weight: 600;
    color: var(--honey);
    line-height: 1;
  }
  .hero-stat p { font-size: 0.78rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.06em; margin-top: 4px; }

  /* ── TRUST BAR ── */
  .trust-bar {
    background: var(--brown);
    color: rgba(255,255,255,0.85);
    padding: 1rem 5%;
    display: flex; justify-content: center; gap: 3rem; flex-wrap: wrap;
  }
  .trust-item { display: flex; align-items: center; gap: 8px; font-size: 0.82rem; letter-spacing: 0.04em; }
  .trust-icon { font-size: 1rem; }

  /* ── SECTION COMMONS ── */
  section { padding: 90px 5%; }
  .section-label {
    font-size: 0.75rem;
    font-weight: 500;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--honey);
    margin-bottom: 0.75rem;
  }
  .section-title {
    font-family: var(--serif);
    font-size: clamp(2rem, 4.5vw, 3rem);
    font-weight: 500;
    color: var(--brown);
    line-height: 1.2;
    margin-bottom: 1rem;
  }
  .section-sub { color: var(--text-muted); max-width: 540px; font-size: 1rem; line-height: 1.75; }
  .text-center { text-align: center; }
  .text-center .section-sub { margin: 0 auto; }

  /* ── STORY ── */
  .story { background: var(--white); }
  .story-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5rem;
    align-items: center;
    margin-top: 3rem;
  }
  .story-visual {
    position: relative;
  }
  .story-frame {
    background: linear-gradient(135deg, var(--honey-light), var(--honey));
    border-radius: var(--radius-lg);
    aspect-ratio: 4/5;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    gap: 1rem;
    font-size: 5rem;
    position: relative;
    overflow: hidden;
  }
  .story-frame::after {
    content: '';
    position: absolute; inset: 0;
    background: repeating-linear-gradient(30deg, transparent, transparent 18px, rgba(255,255,255,0.04) 18px, rgba(255,255,255,0.04) 36px);
  }
  .story-frame-text {
    font-family: var(--serif);
    font-size: 1.2rem;
    color: var(--brown);
    font-weight: 600;
    text-align: center;
    padding: 0 1.5rem;
    position: relative; z-index: 1;
  }
  .story-badge-float {
    position: absolute;
    bottom: -20px; right: -20px;
    background: var(--brown);
    color: var(--honey-light);
    padding: 1.2rem 1.5rem;
    border-radius: var(--radius);
    font-family: var(--serif);
    font-size: 1.4rem;
    font-weight: 600;
    line-height: 1.2;
    text-align: center;
  }
  .story-badge-float small { display: block; font-family: var(--sans); font-size: 0.65rem; font-weight: 400; opacity: 0.7; text-transform: uppercase; letter-spacing: 0.08em; margin-top: 2px; }
  .story-text h2 { font-family: var(--serif); font-size: 2.4rem; font-weight: 500; color: var(--brown); line-height: 1.25; margin-bottom: 1.5rem; }
  .story-text h2 em { font-style: italic; color: var(--honey); }
  .story-text p { color: var(--text-muted); line-height: 1.85; margin-bottom: 1.2rem; font-size: 0.97rem; }
  .story-values { display: flex; gap: 1.5rem; margin-top: 2rem; flex-wrap: wrap; }
  .story-val {
    display: flex; align-items: flex-start; gap: 10px;
    flex: 1; min-width: 160px;
  }
  .story-val-icon { font-size: 1.3rem; margin-top: 2px; }
  .story-val strong { display: block; font-size: 0.88rem; font-weight: 500; color: var(--brown); margin-bottom: 2px; }
  .story-val span { font-size: 0.8rem; color: var(--text-muted); }

  /* ── PRODUCTS ── */
  .products { background: var(--cream); }
  .products-header { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 3rem; flex-wrap: wrap; gap: 1rem; }
  .products-header .section-sub { margin-bottom: 0; }
  .product-filters {
    display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 2.5rem;
  }
  .filter-btn {
    padding: 0.4rem 1.1rem;
    border-radius: 50px;
    border: 1.5px solid rgba(200,132,26,0.3);
    background: transparent;
    color: var(--text-muted);
    font-family: var(--sans);
    font-size: 0.8rem;
    cursor: pointer;
    transition: all 0.2s;
    font-weight: 500;
  }
  .filter-btn.active, .filter-btn:hover { background: var(--honey); border-color: var(--honey); color: white; }
  .products-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
  }
  .product-card {
    background: var(--white);
    border-radius: var(--radius-lg);
    overflow: hidden;
    transition: transform 0.25s, box-shadow 0.25s;
    border: 1px solid rgba(200,132,26,0.1);
  }
  .product-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(122,78,16,0.15); }
  .product-img {
    height: 180px;
    display: flex; align-items: center; justify-content: center;
    font-size: 4rem;
    position: relative;
  }
  .product-badge {
    position: absolute; top: 12px; left: 12px;
    background: var(--honey);
    color: white;
    font-size: 0.68rem;
    font-weight: 500;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    padding: 0.25rem 0.7rem;
    border-radius: 50px;
  }
  .product-info { padding: 1.25rem; }
  .product-name { font-family: var(--serif); font-size: 1.25rem; font-weight: 500; color: var(--brown); margin-bottom: 0.4rem; }
  .product-origin { font-size: 0.75rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.07em; margin-bottom: 0.7rem; }
  .product-desc { font-size: 0.83rem; color: var(--text-muted); line-height: 1.65; margin-bottom: 1.2rem; }
  .product-sizes { display: flex; gap: 0.5rem; margin-bottom: 1.2rem; flex-wrap: wrap; }
  .size-btn {
    padding: 0.3rem 0.75rem;
    border-radius: 6px;
    border: 1.5px solid rgba(200,132,26,0.3);
    background: transparent;
    color: var(--text-muted);
    font-size: 0.78rem;
    cursor: pointer;
    transition: all 0.2s;
    font-family: var(--sans);
    font-weight: 500;
  }
  .size-btn.active, .size-btn:hover { background: var(--cream-deep); border-color: var(--honey); color: var(--honey-dark); }
  .product-footer { display: flex; align-items: center; justify-content: space-between; }
  .product-price { font-family: var(--serif); font-size: 1.4rem; font-weight: 600; color: var(--honey-dark); }
  .product-price small { font-size: 0.75rem; font-weight: 400; color: var(--text-muted); font-family: var(--sans); }
  .wa-btn {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--wa);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 500;
    text-decoration: none;
    border: none; cursor: pointer;
    transition: all 0.2s;
    font-family: var(--sans);
  }
  .wa-btn:hover { background: #1aae56; transform: scale(1.04); }

  /* ── PACKS ── */
  .packs { background: var(--brown); color: var(--cream); }
  .packs .section-title { color: var(--cream); }
  .packs .section-label { color: var(--honey-light); }
  .packs .section-sub { color: rgba(253,246,232,0.7); }
  .packs-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 3rem; }
  .pack-card {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(245,200,66,0.2);
    border-radius: var(--radius-lg);
    padding: 2rem;
    position: relative;
    overflow: hidden;
    transition: transform 0.25s, background 0.25s;
  }
  .pack-card:hover { transform: translateY(-5px); background: rgba(255,255,255,0.1); }
  .pack-card.featured { border-color: var(--honey-light); background: rgba(245,200,66,0.1); }
  .pack-featured-tag {
    position: absolute; top: 1.25rem; right: 1.25rem;
    background: var(--honey);
    color: white;
    font-size: 0.68rem;
    padding: 0.25rem 0.7rem;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 0.06em;
  }
  .pack-emoji { font-size: 2.5rem; margin-bottom: 1.25rem; display: block; }
  .pack-name { font-family: var(--serif); font-size: 1.5rem; font-weight: 500; color: var(--honey-light); margin-bottom: 0.6rem; }
  .pack-desc { font-size: 0.85rem; color: rgba(253,246,232,0.7); line-height: 1.75; margin-bottom: 1.5rem; }
  .pack-includes { list-style: none; margin-bottom: 1.5rem; }
  .pack-includes li { font-size: 0.82rem; color: rgba(253,246,232,0.8); padding: 0.3rem 0; display: flex; align-items: center; gap: 8px; }
  .pack-includes li::before { content: "✦"; color: var(--honey-light); font-size: 0.5rem; }
  .pack-price-row { display: flex; align-items: center; justify-content: space-between; margin-top: auto; }
  .pack-price { font-family: var(--serif); font-size: 1.6rem; font-weight: 600; color: var(--honey-light); }

  /* ── HOW IT WORKS ── */
  .how { background: var(--cream-deep); }
  .steps { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3.5rem; }
  .step { text-align: center; position: relative; }
  .step::after {
    content: '→';
    position: absolute; top: 28px; right: -1rem;
    font-size: 1.5rem; color: rgba(200,132,26,0.3);
  }
  .step:last-child::after { display: none; }
  .step-num {
    width: 56px; height: 56px;
    background: var(--honey);
    color: white;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-family: var(--serif); font-size: 1.3rem; font-weight: 600;
    margin: 0 auto 1.25rem;
  }
  .step h3 { font-family: var(--serif); font-size: 1.1rem; font-weight: 500; color: var(--brown); margin-bottom: 0.5rem; }
  .step p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.7; }

  /* ── PRODUCT DETAIL ── */
  .product-detail { background: var(--white); }
  .detail-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: start; margin-top: 3rem; }
  .detail-visual {
    background: linear-gradient(145deg, var(--cream-deep), var(--cream));
    border-radius: var(--radius-lg);
    aspect-ratio: 1;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    font-size: 7rem;
    position: relative;
    border: 1px solid rgba(200,132,26,0.15);
  }
  .detail-visual-label {
    font-family: var(--serif);
    font-size: 1rem;
    color: var(--honey-dark);
    margin-top: 0.5rem;
    font-style: italic;
  }
  .detail-badges { display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 1rem; }
  .detail-badge {
    background: rgba(200,132,26,0.1);
    color: var(--honey-dark);
    border: 1px solid rgba(200,132,26,0.25);
    font-size: 0.72rem;
    padding: 0.3rem 0.75rem;
    border-radius: 50px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }
  .detail-info .section-label { margin-top: 0; }
  .detail-info h2 { font-family: var(--serif); font-size: 2.2rem; font-weight: 500; color: var(--brown); line-height: 1.2; margin-bottom: 0.4rem; }
  .detail-subtitle { color: var(--text-muted); font-style: italic; font-size: 0.9rem; margin-bottom: 1.5rem; }
  .detail-story { color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-bottom: 2rem; border-left: 3px solid var(--honey); padding-left: 1.2rem; }
  .detail-benefits { margin-bottom: 2rem; }
  .detail-benefits h4 { font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--honey-dark); margin-bottom: 1rem; font-weight: 500; }
  .benefit-item { display: flex; align-items: flex-start; gap: 10px; margin-bottom: 0.85rem; }
  .benefit-icon { font-size: 1rem; margin-top: 1px; }
  .benefit-item div strong { font-size: 0.88rem; font-weight: 500; color: var(--brown); }
  .benefit-item div p { font-size: 0.8rem; color: var(--text-muted); margin-top: 1px; }
  .size-selector h4 { font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--honey-dark); margin-bottom: 0.75rem; font-weight: 500; }
  .size-options { display: flex; gap: 0.75rem; margin-bottom: 1.75rem; }
  .size-option {
    flex: 1; padding: 0.85rem;
    border: 1.5px solid rgba(200,132,26,0.25);
    border-radius: var(--radius);
    background: transparent;
    cursor: pointer; text-align: center;
    transition: all 0.2s; font-family: var(--sans);
  }
  .size-option.active { border-color: var(--honey); background: rgba(200,132,26,0.08); }
  .size-option strong { display: block; font-size: 0.9rem; color: var(--brown); font-weight: 500; }
  .size-option span { font-size: 0.82rem; color: var(--honey-dark); font-weight: 500; }
  .detail-wa-btn {
    display: flex; align-items: center; justify-content: center; gap: 10px;
    background: var(--wa);
    color: white;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 500;
    text-decoration: none;
    margin-bottom: 1rem;
    transition: all 0.2s;
  }
  .detail-wa-btn:hover { background: #1aae56; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(37,211,102,0.35); }
  .detail-delivery { text-align: center; font-size: 0.8rem; color: var(--text-muted); }

  /* ── TESTIMONIALS ── */
  .testimonials { background: var(--cream); }
  .testimonials-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 3rem; }
  .testi-card {
    background: var(--white);
    border-radius: var(--radius-lg);
    padding: 1.75rem;
    border: 1px solid rgba(200,132,26,0.1);
    position: relative;
  }
  .testi-stars { color: var(--honey); font-size: 0.9rem; margin-bottom: 1rem; letter-spacing: 2px; }
  .testi-text { font-family: var(--serif); font-size: 1.05rem; font-style: italic; color: var(--brown-mid); line-height: 1.75; margin-bottom: 1.25rem; }
  .testi-author { display: flex; align-items: center; gap: 10px; }
  .testi-avatar {
    width: 40px; height: 40px;
    background: var(--honey);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: white; font-size: 0.85rem; font-weight: 600;
  }
  .testi-name { font-size: 0.88rem; font-weight: 500; color: var(--brown); }
  .testi-loc { font-size: 0.75rem; color: var(--text-muted); }
  .testi-quote-icon { position: absolute; top: 1.25rem; right: 1.5rem; font-family: var(--serif); font-size: 4rem; color: rgba(200,132,26,0.1); line-height: 1; }

  /* ── FOOTER ── */
  footer {
    background: var(--brown);
    color: rgba(253,246,232,0.8);
    padding: 60px 5% 30px;
  }
  .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 3rem; margin-bottom: 3rem; }
  .footer-brand { max-width: 280px; }
  .footer-logo { font-family: var(--serif); font-size: 1.8rem; font-weight: 600; color: var(--honey-light); margin-bottom: 0.75rem; }
  .footer-tagline { font-size: 0.85rem; line-height: 1.7; color: rgba(253,246,232,0.6); margin-bottom: 1.5rem; }
  .footer-social { display: flex; gap: 0.75rem; }
  .social-btn {
    width: 36px; height: 36px;
    background: rgba(255,255,255,0.08);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 0.8rem; color: rgba(253,246,232,0.7);
    text-decoration: none; transition: background 0.2s;
  }
  .social-btn:hover { background: var(--honey); color: white; }
  .footer-col h4 { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--honey-light); margin-bottom: 1.25rem; font-weight: 500; }
  .footer-col ul { list-style: none; }
  .footer-col ul li { margin-bottom: 0.6rem; }
  .footer-col ul a { font-size: 0.85rem; color: rgba(253,246,232,0.65); text-decoration: none; transition: color 0.2s; }
  .footer-col ul a:hover { color: var(--honey-light); }
  .footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1.5rem; display: flex; justify-content: space-between; flex-wrap: wrap; gap: 0.5rem; }
  .footer-bottom p { font-size: 0.78rem; color: rgba(253,246,232,0.4); }

  /* ── FLOATING WA ── */
  .float-wa {
    position: fixed; bottom: 2rem; right: 2rem; z-index: 200;
    width: 60px; height: 60px;
    background: var(--wa);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 4px 20px rgba(37,211,102,0.5);
    text-decoration: none; font-size: 1.7rem;
    transition: transform 0.2s, box-shadow 0.2s;
    animation: pulse-wa 2.5s ease-in-out infinite;
  }
  .float-wa:hover { transform: scale(1.12); box-shadow: 0 6px 28px rgba(37,211,102,0.65); animation: none; }
  @keyframes pulse-wa {
    0%, 100% { box-shadow: 0 4px 20px rgba(37,211,102,0.5); }
    50% { box-shadow: 0 4px 28px rgba(37,211,102,0.75), 0 0 0 8px rgba(37,211,102,0.12); }
  }

  /* ── ANIMATIONS ── */
  @keyframes fadeUp { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }
  .hero-content > * { animation: fadeUp 0.65s ease both; }
  .hero-content > *:nth-child(1) { animation-delay: 0.1s; }
  .hero-content > *:nth-child(2) { animation-delay: 0.2s; }
  .hero-content > *:nth-child(3) { animation-delay: 0.3s; }
  .hero-content > *:nth-child(4) { animation-delay: 0.4s; }
  .hero-content > *:nth-child(5) { animation-delay: 0.55s; }

  /* ── DESIGN GUIDE PANEL ── */
  .design-guide {
    background: var(--brown);
    color: var(--cream);
    padding: 90px 5%;
  }
  .design-guide .section-label { color: var(--honey-light); }
  .design-guide .section-title { color: var(--cream); }
  .guide-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem; margin-top: 3rem; }
  .guide-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(245,200,66,0.15);
    border-radius: var(--radius-lg);
    padding: 1.75rem;
  }
  .guide-card h4 { font-family: var(--serif); font-size: 1.1rem; color: var(--honey-light); margin-bottom: 1rem; font-weight: 500; }
  .guide-card p, .guide-card li { font-size: 0.83rem; color: rgba(253,246,232,0.65); line-height: 1.75; }
  .guide-card ul { list-style: none; }
  .guide-card ul li { padding: 0.25rem 0; display: flex; align-items: flex-start; gap: 8px; }
  .guide-card ul li::before { content: "→"; color: var(--honey); font-size: 0.7rem; margin-top: 4px; flex-shrink: 0; }
  .color-swatches { display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 0.5rem; }
  .swatch { width: 36px; height: 36px; border-radius: 8px; position: relative; cursor: default; }
  .swatch::after { content: attr(data-name); position: absolute; bottom: -18px; left: 50%; transform: translateX(-50%); white-space: nowrap; font-size: 0.6rem; color: rgba(253,246,232,0.5); }
  .swatch-row { margin-bottom: 1.5rem; }

  /* ── RESPONSIVE ── */
  /* ── REVIEW FORM ── */
  .review-form-wrap {
    background: var(--brown);
    border-radius: var(--radius-lg);
    padding: 2.5rem;
    margin-top: 3.5rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
  }
  .review-form-wrap h3 {
    font-family: var(--serif);
    font-size: 1.7rem;
    font-weight: 500;
    color: var(--honey-light);
    margin-bottom: 0.4rem;
    text-align: center;
  }
  .review-form-wrap p.sub {
    text-align: center;
    font-size: 0.83rem;
    color: rgba(253,246,232,0.6);
    margin-bottom: 2rem;
  }
  .star-rating { display: flex; gap: 6px; justify-content: center; margin-bottom: 1.5rem; flex-direction: row-reverse; }
  .star-rating input { display: none; }
  .star-rating label {
    font-size: 2rem;
    color: rgba(255,255,255,0.2);
    cursor: pointer;
    transition: color 0.15s;
  }
  .star-rating label:hover,
  .star-rating label:hover ~ label,
  .star-rating input:checked ~ label { color: var(--honey-light); }
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem; }
  .form-group { display: flex; flex-direction: column; gap: 6px; margin-bottom: 1rem; }
  .form-group label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.08em; color: rgba(253,246,232,0.6); font-weight: 500; }
  .form-group input,
  .form-group textarea,
  .form-group select {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(245,200,66,0.2);
    border-radius: 8px;
    padding: 0.75rem 1rem;
    color: var(--cream);
    font-family: var(--sans);
    font-size: 0.88rem;
    outline: none;
    transition: border-color 0.2s;
    width: 100%;
  }
  .form-group input::placeholder,
  .form-group textarea::placeholder { color: rgba(253,246,232,0.3); }
  .form-group input:focus,
  .form-group textarea:focus,
  .form-group select:focus { border-color: var(--honey-light); }
  .form-group select option { background: var(--brown); color: var(--cream); }
  .form-group textarea { resize: vertical; min-height: 110px; }
  .form-submit {
    display: flex; align-items: center; justify-content: center; gap: 8px;
    width: 100%;
    background: var(--honey);
    color: white;
    border: none;
    padding: 0.95rem;
    border-radius: 50px;
    font-family: var(--sans);
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    margin-top: 0.5rem;
    transition: background 0.2s, transform 0.15s;
  }
  .form-submit:hover { background: var(--honey-dark); transform: translateY(-2px); }
  .form-success {
    display: none;
    text-align: center;
    padding: 2rem;
    color: var(--honey-light);
    font-family: var(--serif);
    font-size: 1.3rem;
  }
  .form-success span { font-size: 2.5rem; display: block; margin-bottom: 0.75rem; }

  @media (max-width: 1024px) and (min-width: 769px) {
    .products-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 768px) {
    nav { padding: 0 4%; }
    .nav-links { display: none; }
    .hero { padding: 90px 4% 50px; }
    .hero-honeycomb { display: none; }
    .products-grid { grid-template-columns: 1fr; }
    .story-grid, .detail-grid { grid-template-columns: 1fr; gap: 2.5rem; }
    .story-badge-float { right: 0; bottom: -15px; }
    .footer-grid { grid-template-columns: 1fr; }
    .hero-stats { gap: 1.5rem; }
    .step::after { display: none; }
    .form-row { grid-template-columns: 1fr; }
    section { padding: 60px 4%; }
    .trust-bar { gap: 1.5rem; }
  }
</style>
</head>
<body>
{{-- {{ dd($packs) }} --}}
<!-- ══════ NAVIGATION ══════ -->
<nav>
  <a href="#" class="nav-logo">Biz<span>miel</span></a>
  <ul class="nav-links">
    <li><a href="#produits">Produits</a></li>
    <li><a href="#packs">Packs</a></li>
    <li><a href="#histoire">Notre Histoire</a></li>
    <li><a href="#avis">Avis</a></li>
  </ul>
  <a href="https://wa.me/212724577453?text=Bonjour%20Bizmiel%2C%20je%20souhaite%20commander%20🍯"
     class="nav-cta" target="_blank">
     Commander
  </a>
</nav>
<section class="hero" id="accueil">
  <div class="hero-bg"></div>
  <div class="hero-honeycomb">🍯🍯🍯🍯🍯🍯🍯🍯🍯🍯🍯🍯</div>
  <div class="hero-content">
    <div class="hero-badge">100% Naturel — Montagnes du Maroc</div>
    <h1>Le miel comme<br><em>la nature</em> l'a<br>voulu</h1>
    <p>Du rucher à votre table — miel artisanal récolté dans les montagnes marocaines, sans additifs, sans compromis. Purement authentique.</p>
    <div class="hero-actions">
      <a href="https://wa.me/212724577453?text=Bonjour%20Bizmiel%2C%20je%20voudrais%20commander%20🍯" class="btn-primary" target="_blank">
        🛒 Commander sur WhatsApp
      </a>
      <a href="#produits" class="btn-secondary">Découvrir nos miels →</a>
    </div>
    <div class="hero-stats">
      <div class="hero-stat"><span>9+</span><p>Variétés de miel</p></div>
      <div class="hero-stat"><span>100%</span><p>Naturel & pur</p></div>
      <div class="hero-stat"><span>🚚</span><p>Livraison Maroc</p></div>
    </div>
  </div>
</section>

<!-- ══════ TRUST BAR ══════ -->
<div class="trust-bar">
  <div class="trust-item"><span class="trust-icon">✓</span> Sans additifs ni conservateurs</div>
  <div class="trust-item"><span class="trust-icon">🏔️</span> Récolté en montagne</div>
  <div class="trust-item"><span class="trust-icon">💳</span> Paiement à la livraison</div>
  <div class="trust-item"><span class="trust-icon">🚚</span> Livraison partout au Maroc</div>
  <div class="trust-item"><span class="trust-icon">💬</span> Commande facile via WhatsApp</div>
</div>

<!-- ══════ NOTRE HISTOIRE ══════ -->
<section class="story" id="histoire">
  <div class="story-grid">
       <div class="story-visual">
      <img src="images/bizmiel-logo.jpeg" alt="Logo Bizmiel" onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=&quot;story-badge-float&quot;>Bizmiel<br><small>Depuis 2024</small></span>'" style="width:80%; height:80%; object-fit:contain; border-radius: 5%;">
    </div>
    <div class="story-text">
      <p class="section-label">Notre Histoire</p>
      <h2>Un miel qui raconte<br>l'âme des <em>montagnes</em></h2>
      <p>Bizmiel est né d'une passion simple et profonde : préserver les saveurs authentiques du miel marocain, tel qu'il a toujours existé dans les montagnes de notre pays.</p>
      <p>Nos abeilles butinent librement sur des fleurs sauvages — thym des montagnes, fleurs d'oranger, chardon, euphorbe et bien d'autres — pour produire un nectar pur, riche et vivant.</p>
      <p>Chaque pot de Bizmiel contient l'essence d'un terroir unique, récolté à la main par des apiculteurs passionnés qui perpétuent un savoir-faire ancestral.</p>
      <div class="story-values">
        <div class="story-val">
          <span class="story-val-icon">🌿</span>
          <div>
            <strong>100% Naturel</strong>
            <span>Aucun additif, aucun traitement thermique</span>
          </div>
        </div>
        <div class="story-val">
          <span class="story-val-icon">🏔️</span>
          <div>
            <strong>Origine contrôlée</strong>
            <span>Directement des apiculteurs marocains</span>
          </div>
        </div>
        <div class="story-val">
          <span class="story-val-icon">💎</span>
          <div>
            <strong>Qualité premium</strong>
            <span>Sélectionné avec soin, pot par pot</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ══════ PRODUITS ══════ -->
<section class="products" id="produits">
  <div class="products-header">
    <div>
      <p class="section-label">Nos Miels</p>
      <h2 class="section-title">9 variétés,<br>une seule promesse</h2>
    </div>
    <p class="section-sub">Chaque miel porte le caractère unique de la plante qu'il incarne. Choisissez selon vos goûts et vos besoins.</p>
  </div>
  <div class="products-header">
    <div>
      <h2 class="section-label">Nos produits</h2>
    </div>
  </div>
 <div class="products-grid">
@foreach($products as $product)
    @php
        $first = $product->sizes->first();
    @endphp
    <div class="product-card">
        {{-- IMAGE --}}
        <div class="product-img">
            <img src="{{ asset('images/products/'.$product->image) }}"
                 style="width:100%;height:100%;object-fit:cover;">
        </div>
        {{-- INFO --}}
        <div class="product-info">
            <p class="product-origin">{{ $product->origin }}</p>
            <h3 class="product-name">{{ $product->name }}</h3>
            <p class="product-desc">{{ $product->description }}</p>
            {{-- SIZES --}}
            <div class="product-sizes">
                @foreach($product->sizes as $size)
                    <button class="size-btn"
                            data-price="{{ $size->price }}"
                            data-size="{{ $size->size }}">
                        {{ $size->size }}
                    </button>
                @endforeach
            </div>
            {{-- PRICE + WHATSAPP --}}
            <div class="product-footer">

                <div class="product-price">
                    @if($first)
                        {{ $first->price }} DH <small>/ {{ $first->size }}</small>
                    @else
                        N/A
                    @endif
                </div>

                <a class="wa-btn"
                   target="_blank"
                   href="https://wa.me/212724577453?text={{ urlencode(
                        'Bonjour, je veux commander '.$product->name.
                        ($first ? ' '.$first->size : '')
                   ) }}">
                    📱 Commander
                </a>

            </div>

        </div>
    </div>

@endforeach

</div>

</section>
<section class="packs" id="packs">
  <div class="text-center">
    <p class="section-label">Nos Coffrets</p>
    <h2 class="section-title">Des packs pensés pour chaque moment</h2>
    <p class="section-sub">
      Offrez ou commandez nos coffrets soigneusement composés.
    </p>
  </div>

  <div class="packs-grid">
    @foreach($packs as $pack)
      <div class="pack-card">

        <h3>{{ $pack->name }}</h3>
        <p>{{ $pack->description }}</p>

        <ul class="pack-includes">
          @foreach($pack->items as $item)
            <li>
              {{ $item->product->name ?? 'Produit' }}
              — Qty: {{ $item->quantity }}
              @if($item->size)
                ({{ $item->size }})
              @endif
            </li>
          @endforeach
        </ul>

        <div class="pack-price-row">
          <div class="pack-price">{{ $pack->price }} DH</div>

          @php
            $msg = urlencode("Bonjour, je veux commander le ".$pack->name);
          @endphp

          <a href="https://wa.me/212724577453?text={{ $msg }}"
             class="wa-btn"
             target="_blank">
            📱 Commander
          </a>
        </div>

      </div>
    @endforeach
  </div>
</section>

<!-- ══════ COMMENT COMMANDER ══════ -->
<section class="how" id="commander">
  <div class="text-center">
    <p class="section-label">Comment Commander</p>
    <h2 class="section-title">3 étapes, c'est tout</h2>
    <p class="section-sub">Commandez facilement en moins de 2 minutes via WhatsApp. Livraison à domicile partout au Maroc, paiement à la réception.</p>
  </div>
  <div class="steps">
    <div class="step">
      <div class="step-num">1</div>
      <h3>Choisissez</h3>
      <p>Parcourez nos miels et packs, choisissez votre variété et taille préférée.</p>
    </div>
    <div class="step">
      <div class="step-num">2</div>
      <h3>WhatsApp</h3>
      <p>Cliquez sur "Commander" — un message pré-rempli s'ouvre automatiquement.</p>
    </div>
    <div class="step">
      <div class="step-num">3</div>
      <h3>Confirmez</h3>
      <p>Notre équipe confirme votre commande et vous donne le délai de livraison.</p>
    </div>
    <div class="step">
      <div class="step-num">4</div>
      <h3>Recevez</h3>
      <p>Livraison à domicile. Vous payez en espèces à la réception. Simple et sûr.</p>
    </div>
  </div>
</section>

<!-- ══════ FICHE PRODUIT ══════ -->
<section class="product-detail" id="fiche">
  <div class="text-center" style="margin-bottom: 1rem;">
    <p class="section-label">Exemple de fiche produit</p>
    <h2 class="section-title">Miel de Thym — Notre best-seller</h2>
  </div>
  <div class="detail-grid">
    <div>
      <div class="detail-visual" style="padding:0; overflow:hidden; position:relative;">
        <img src="images/products/miel-thym.jpeg" alt="Miel de Thym" style="width:100%;height:100%;object-fit:cover;border-radius:var(--radius-lg);" onerror="this.style.display='none';this.parentElement.style.fontSize='7rem';this.parentElement.innerHTML+='🌾<span class=detail-visual-label>Thym de montagne</span>'">
        <span class="detail-visual-label" style="position:absolute;bottom:1rem;left:0;right:0;text-align:center;background:rgba(253,246,232,0.85);padding:0.4rem 0;">Thym de montagne</span>
      </div>
      <div class="detail-badges" style="justify-content: center;">
        <span class="detail-badge">🌿 100% Naturel</span>
        <span class="detail-badge">🏔️ Montagne</span>
        <span class="detail-badge">⭐ Best-seller</span>
        <span class="detail-badge">💊 Propriétés connues</span>
      </div>
    </div>
    <div class="detail-info">
      <p class="section-label">Miel de Thym Sauvage</p>
      <h2>Un miel qui soigne,<br>un miel qui nourrit</h2>
      <p class="detail-subtitle">Récolté sur les hauteurs des montagnes du Maroc, où le thym pousse à l'état sauvage</p>
      <div class="detail-story">
        "Chaque printemps, nos abeilles butinent les fleurs de thym sauvage sur les pentes arides et ensoleillées. Ce miel ambré, à l'arôme intense et herbacé, incarne à lui seul la force et la générosité de nos montagnes. Un miel que les Marocains utilisent depuis des générations pour ses bienfaits naturels et son goût incomparable."
      </div>
      <div class="detail-benefits">
        <h4>Pourquoi choisir le miel de thym ?</h4>
        <div class="benefit-item"><span class="benefit-icon">🛡️</span><div><strong>Soutien naturel de l'immunité</strong><p>Reconnu pour ses propriétés antiseptiques et antibactériennes naturelles</p></div></div>
        <div class="benefit-item"><span class="benefit-icon">🫁</span><div><strong>Confort respiratoire</strong><p>Idéal en hiver, mélangé à du citron chaud pour soulager la gorge</p></div></div>
        <div class="benefit-item"><span class="benefit-icon">⚡</span><div><strong>Source d'énergie naturelle</strong><p>Parfait le matin pour un petit-déjeuner énergisant et nourrissant</p></div></div>
        <div class="benefit-item"><span class="benefit-icon">🍽️</span><div><strong>Versatile en cuisine</strong><p>Accompagne fromages, salades, marinades — une touche montagnarde subtile</p></div></div>
      </div>
      <div class="size-selector">
        <h4>Choisissez votre taille</h4>
        <div class="size-options">
          <button class="size-option active"><strong>250g</strong><span>100 DH</span></button>
          <button class="size-option"><strong>500g</strong><span>200 DH</span></button>
          <button class="size-option"><strong>1 kg</strong><span>380 DH</span></button>
        </div>
      </div>
      <a href="https://wa.me/212724577453?text=Bonjour%20Bizmiel%20%F0%9F%8D%AF%20Je%20voudrais%20commander%20%3A%0A%E2%9C%85%20Miel%20de%20Thym%20500g%0A%F0%9F%93%8D%20Adresse%20de%20livraison%20%3A%20%5Bvotre%20adresse%5D%0AMerci%20!" class="detail-wa-btn" target="_blank">
        📱 Commander via WhatsApp — 100 DH
      </a>
      <p class="detail-delivery">🚚 Livraison à domicile · 💳 Paiement à la réception · 🇲🇦 Partout au Maroc</p>
    </div>
  </div>
</section>  
<!-- ══════ AVIS CLIENTS ══════ -->
<section class="testimonials" id="avis">
  <div class="text-center">
    <p class="section-label">Avis Clients</p>
    <h2 class="section-title">Ils ont goûté, ils en parlent</h2>
    <p class="section-sub">Des centaines de familles marocaines font confiance à Bizmiel chaque mois.</p>
  </div>
    <div class="testimonials-grid">
    @foreach($reviews as $review)
    <div class="testi-card">
    <div class="testi-quote-icon">"</div>
    <div class="testi-stars">
        @for($i = 1; $i <= 5; $i++)
        <span style="color: {{ $i <= $review->rating ? '#c8922a' : '#ddd' }}">★</span>
        @endfor
    </div>
    <p class="testi-text">{{ $review->comment }}</p>
    <div class="testi-author">
        <div class="testi-avatar">
        {{ strtoupper(substr($review->name, 0, 1)) }}{{ strtoupper(substr(explode(' ', $review->name)[1] ?? '', 0, 1)) }}
        </div>
        <div>
        <p class="testi-name">{{ $review->name }}</p>
        <p class="testi-loc">{{ $review->city }}</p>
        </div>
    </div>
    </div>
    @endforeach
    </div>

 @if(session('success'))
  <div class="form-success">
    <span>🍯</span> {{ session('success') }}
  </div>
@endif

<form method="POST" action="{{ route('reviews.store') }}">
  @csrf

  <div class="review-form-wrap">
    <h3>Laissez votre avis 🍯</h3>
    <p class="sub">Votre expérience aide d'autres clients à choisir. Merci pour votre confiance !</p>

    <div class="star-rating">
      <input type="radio" id="s5" name="rating" value="5">
      <label for="s5">★</label>
      <input type="radio" id="s4" name="rating" value="4">
      <label for="s4">★</label>
      <input type="radio" id="s3" name="rating" value="3">
      <label for="s3">★</label>
      <input type="radio" id="s2" name="rating" value="2">
      <label for="s2">★</label>
      <input type="radio" id="s1" name="rating" value="1">
      <label for="s1">★</label>
    </div>

    <div class="form-row">
      <div class="form-group">
        <label>Votre prénom *</label>
        <input type="text" name="name" placeholder="Ex: Fatima" required>
      </div>
      <div class="form-group">
        <label>Votre ville</label>
        <input type="text" name="city" placeholder="Ex: Agadir">
      </div>
    </div>

    <div class="form-group">
      <label>Produit commandé</label>
      <select name="product_id">
        <option value="">— Choisissez un produit —</option>
        @foreach($products as $product)
          <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label>Votre avis *</label>
      <textarea name="comment" placeholder="Partagez votre expérience..." required></textarea>
    </div>

    <button type="submit" class="form-submit">✨ Publier mon avis</button>
  </div>

</form>

</section>

<!-- ══════ FLOATING WHATSAPP ══════ -->
<a href="https://wa.me/212724577453?text=Bonjour%20Bizmiel%20%F0%9F%8D%AF%20Je%20souhaite%20commander%20du%20miel%20naturel.%20Pouvez-vous%20m'aider%20?" class="float-wa" target="_blank" title="Commander sur WhatsApp">📱</a>

<script>
document.addEventListener('DOMContentLoaded', function() {

  // ── Prix dynamiques + WhatsApp fix ──
  document.querySelectorAll('.product-sizes').forEach(group => {
    group.querySelectorAll('.size-btn').forEach(btn => {

      btn.addEventListener('click', () => {

        // Active button
        group.querySelectorAll('.size-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const card = group.closest('.product-card');
        const priceEl = card.querySelector('.product-price');
        const waBtn = card.querySelector('.wa-btn');

        const price = btn.dataset.price;
        const size = btn.dataset.size;

        // Update price
        if (price && priceEl) {
          priceEl.innerHTML = price + ' DH <small>/ ' + size + '</small>';
        }

        // Fix WhatsApp link (IMPORTANT)
        if (waBtn && size) {

          // Save original link one time
          if (!waBtn.dataset.base) {
            waBtn.dataset.base = waBtn.getAttribute('href');
          }

          const base = waBtn.dataset.base;

          const newHref = base.replace(/250g|500g|1%20kg|1 kg/g, encodeURIComponent(size));

          waBtn.setAttribute('href', newHref);
        }

      });

    });
  });

  // ── Product detail size ──
  document.querySelectorAll('.size-options').forEach(group => {
    const prices = { '250g': '100 DH', '500g': '200 DH', '1 kg': '380 DH' };

    group.querySelectorAll('.size-option').forEach(opt => {

      opt.addEventListener('click', () => {

        group.querySelectorAll('.size-option').forEach(o => o.classList.remove('active'));
        opt.classList.add('active');

        const size = opt.querySelector('strong').textContent;
        const waBtn = document.querySelector('.detail-wa-btn');

        if (waBtn && prices[size]) {
          waBtn.textContent = '📱 Commander via WhatsApp — ' + prices[size];
        }

      });

    });
  });

  // ── Filters (visual) ──
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    });
  });

  // ── Submit Review ──
  window.submitReview = function() {

    const name = document.getElementById('reviewName').value.trim();
    const city = document.getElementById('reviewCity').value.trim();
    const product = document.getElementById('reviewProduct').value;
    const text = document.getElementById('reviewText').value.trim();
    const stars = document.querySelector('input[name="stars"]:checked');

    if (!name || !text) {
      alert('Veuillez remplir votre prénom et votre avis.');
      return;
    }

    if (!stars) {
      alert('Veuillez choisir une note.');
      return;
    }

    const grid = document.querySelector('.testimonials-grid');

    if (!grid) {
      alert('Erreur: zone avis introuvable');
      return;
    }

    const starsVal = parseInt(stars.value);
    const starsDisplay = '★'.repeat(starsVal) + '☆'.repeat(5 - starsVal);
    const initials = name.split(' ').map(w => w[0]).join('').toUpperCase().slice(0,2);

    const card = document.createElement('div');
    card.className = 'testi-card';
    card.style.animation = 'fadeUp 0.5s ease both';

    card.innerHTML = `
      <div class="testi-quote-icon">"</div>
      <div class="testi-stars" style="color:var(--honey);">${starsDisplay}</div>
      ${product ? '<p style="font-size:0.72rem;color:var(--text-muted);text-transform:uppercase;margin-bottom:0.5rem;">' + product + '</p>' : ''}
      <p class="testi-text">${text}</p>
      <div class="testi-author">
        <div class="testi-avatar">${initials}</div>
        <div>
          <p class="testi-name">${name}</p>
          <p class="testi-loc">${city || 'Maroc'}</p>
        </div>
      </div>
    `;

    grid.insertBefore(card, grid.firstChild);

    // success UI
    document.getElementById('reviewForm').style.display = 'none';
    document.getElementById('successName').textContent = name;
    document.getElementById('formSuccess').style.display = 'block';

    setTimeout(() => {
      document.getElementById('reviewForm').style.display = 'block';
      document.getElementById('formSuccess').style.display = 'none';

      document.getElementById('reviewName').value = '';
      document.getElementById('reviewCity').value = '';
      document.getElementById('reviewProduct').value = '';
      document.getElementById('reviewText').value = '';

      document.querySelectorAll('input[name="stars"]').forEach(s => s.checked = false);

    }, 4000);
  };

  // ── Nav active ──
  const navLinks = document.querySelectorAll('.nav-links a');
  const sections = document.querySelectorAll('section[id]');

  window.addEventListener('scroll', () => {
    let current = '';

    sections.forEach(s => {
      if (window.scrollY >= s.offsetTop - 100) {
        current = s.id;
      }
    });

    navLinks.forEach(a => {
      a.style.color = a.getAttribute('href') === '#' + current ? 'var(--honey)' : '';
    });
  });

});
</script>

</body>
</html>
