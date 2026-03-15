<!DOCTYPE html>
<html lang="tr">
{{-- pharmadepom.com - Laravel Blade Template --}}
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>pharmadepom.com</title>
<style>
  *{margin:0;padding:0;box-sizing:border-box}
  body{font-family:'Segoe UI',sans-serif;background:#f4f7fb;color:#1a2236}
  a{text-decoration:none;color:inherit}

  /* NAVBAR */
  nav{background:#fff;border-bottom:1px solid #e0e8f0;padding:0 2rem;display:flex;align-items:center;justify-content:space-between;height:64px;position:sticky;top:0;z-index:100}
  .logo{font-size:22px;font-weight:700;color:#0057b8}
  .logo span{color:#00a86b}
  .nav-links{display:flex;gap:2rem;font-size:14px;color:#4a5568}
  .nav-links a:hover{color:#0057b8}
  .nav-right{display:flex;gap:10px;align-items:center}
  .btn-outline{padding:8px 18px;border:1.5px solid #0057b8;border-radius:8px;color:#0057b8;font-size:14px;font-weight:600;background:transparent;cursor:pointer;transition:.2s}
  .btn-outline:hover{background:#e8f0fb}
  .btn-primary{padding:8px 20px;border-radius:8px;background:#0057b8;color:#fff;font-size:14px;font-weight:600;border:none;cursor:pointer;transition:.2s}
  .btn-primary:hover{background:#004299}

  /* HERO */
  .hero{background:linear-gradient(135deg,#003f8a 0%,#0057b8 60%,#0080d4 100%);color:#fff;padding:72px 2rem 56px;text-align:center}
  .hero-badge{display:inline-block;background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.3);border-radius:20px;padding:5px 16px;font-size:13px;margin-bottom:20px;letter-spacing:.4px}
  .hero h1{font-size:clamp(28px,4vw,52px);font-weight:800;line-height:1.15;margin-bottom:16px}
  .hero h1 span{color:#7dd4fc}
  .hero p{font-size:17px;opacity:.88;max-width:580px;margin:0 auto 32px;line-height:1.6}
  .hero-actions{display:flex;gap:14px;justify-content:center;flex-wrap:wrap}
  .btn-hero{padding:14px 30px;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer;transition:.2s}
  .btn-hero-white{background:#fff;color:#0057b8;border:none}
  .btn-hero-white:hover{background:#e8f0fb}
  .btn-hero-ghost{background:transparent;color:#fff;border:2px solid rgba(255,255,255,.6)}
  .btn-hero-ghost:hover{background:rgba(255,255,255,.1)}
  .hero-stats{display:flex;justify-content:center;gap:48px;margin-top:52px;flex-wrap:wrap}
  .stat{text-align:center}
  .stat-num{font-size:30px;font-weight:800}
  .stat-lbl{font-size:13px;opacity:.7;margin-top:2px}

  /* SEARCH BAR */
  .search-section{background:#fff;padding:28px 2rem;border-bottom:1px solid #e0e8f0}
  .search-inner{max-width:900px;margin:0 auto;display:flex;gap:10px}
  .search-box{flex:1;display:flex;align-items:center;border:1.5px solid #c9d8eb;border-radius:10px;overflow:hidden;background:#f9fbfe}
  .search-box select{border:none;background:transparent;padding:12px 14px;font-size:14px;color:#4a5568;border-right:1px solid #dde;outline:none}
  .search-box input{flex:1;border:none;background:transparent;padding:12px 14px;font-size:15px;outline:none;color:#1a2236}
  .search-box input::placeholder{color:#a0aec0}
  .btn-search{padding:12px 28px;background:#0057b8;color:#fff;border:none;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer}
  .btn-search:hover{background:#004299}
  .quick-tags{max-width:900px;margin:12px auto 0;display:flex;gap:8px;flex-wrap:wrap}
  .tag{background:#e8f0fb;color:#0057b8;font-size:12px;padding:5px 12px;border-radius:20px;cursor:pointer;transition:.15s}
  .tag:hover{background:#d0e2f7}

  /* SECTIONS */
  .section{padding:56px 2rem;max-width:1200px;margin:0 auto}
  .section-title{font-size:22px;font-weight:700;margin-bottom:6px;color:#1a2236}
  .section-sub{font-size:14px;color:#718096;margin-bottom:28px}

  /* HOW IT WORKS */
  .steps{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:24px}
  .step{background:#fff;border:1px solid #e0e8f0;border-radius:14px;padding:28px 22px;text-align:center}
  .step-icon{width:52px;height:52px;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;font-size:22px}
  .step-icon.blue{background:#dbeafe;color:#1d4ed8}
  .step-icon.green{background:#dcfce7;color:#16a34a}
  .step-icon.orange{background:#fff3cd;color:#b45309}
  .step-icon.purple{background:#f3e8ff;color:#7c3aed}
  .step h3{font-size:15px;font-weight:700;margin-bottom:8px}
  .step p{font-size:13px;color:#718096;line-height:1.6}
  .step-num{font-size:11px;color:#a0aec0;font-weight:700;letter-spacing:.5px;margin-bottom:10px}

  /* DEPOLAR */
  .depolar-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:16px}
  .depo-card{background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:20px;display:flex;align-items:center;gap:14px;transition:.2s;cursor:pointer}
  .depo-card:hover{border-color:#0057b8;box-shadow:0 4px 16px rgba(0,87,184,.1)}
  .depo-logo{width:48px;height:48px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:15px;color:#fff;flex-shrink:0}
  .depo-info h4{font-size:14px;font-weight:700;margin-bottom:3px}
  .depo-info p{font-size:12px;color:#718096}
  .depo-badge{font-size:11px;background:#dcfce7;color:#15803d;padding:2px 8px;border-radius:10px;display:inline-block;margin-top:4px;font-weight:600}

  /* ÜRÜNLER */
  .products-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:16px}
  .prod-card{background:#fff;border:1px solid #e0e8f0;border-radius:12px;overflow:hidden;transition:.2s;cursor:pointer}
  .prod-card:hover{border-color:#0057b8;box-shadow:0 4px 16px rgba(0,87,184,.1)}
  .prod-img{height:120px;display:flex;align-items:center;justify-content:center;font-size:36px}
  .prod-body{padding:14px}
  .prod-category{font-size:11px;color:#0057b8;font-weight:700;text-transform:uppercase;letter-spacing:.4px;margin-bottom:4px}
  .prod-name{font-size:14px;font-weight:700;margin-bottom:4px;line-height:1.3}
  .prod-brand{font-size:12px;color:#a0aec0;margin-bottom:10px}
  .prod-bottom{display:flex;align-items:center;justify-content:space-between}
  .prod-price{font-size:17px;font-weight:800;color:#0057b8}
  .prod-unit{font-size:11px;color:#a0aec0}
  .btn-add{background:#0057b8;color:#fff;border:none;padding:7px 14px;border-radius:8px;font-size:12px;font-weight:700;cursor:pointer;transition:.2s}
  .btn-add:hover{background:#004299}
  .prod-stock{font-size:11px;margin-top:8px}
  .in-stock{color:#16a34a}
  .low-stock{color:#d97706}

  /* KATEGORILER */
  .cats-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:12px}
  .cat-card{background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:20px 14px;text-align:center;cursor:pointer;transition:.2s}
  .cat-card:hover{border-color:#0057b8;background:#f0f7ff}
  .cat-icon{font-size:28px;margin-bottom:10px}
  .cat-name{font-size:13px;font-weight:600;color:#1a2236}
  .cat-count{font-size:11px;color:#a0aec0;margin-top:3px}

  /* FEATURES */
  .features{background:#fff;border-top:1px solid #e0e8f0;border-bottom:1px solid #e0e8f0}
  .features-inner{max-width:1200px;margin:0 auto;padding:56px 2rem}
  .features-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:32px}
  .feature{display:flex;gap:16px;align-items:flex-start}
  .feat-icon{width:44px;height:44px;border-radius:10px;background:#e8f0fb;display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0}
  .feat-text h4{font-size:15px;font-weight:700;margin-bottom:6px}
  .feat-text p{font-size:13px;color:#718096;line-height:1.6}

  /* TESTIMONIALS */
  .testi-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px}
  .testi{background:#fff;border:1px solid #e0e8f0;border-radius:14px;padding:24px}
  .testi-stars{color:#f59e0b;font-size:14px;margin-bottom:12px}
  .testi-text{font-size:14px;color:#4a5568;line-height:1.7;margin-bottom:16px;font-style:italic}
  .testi-author{display:flex;align-items:center;gap:10px}
  .avatar{width:36px;height:36px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff}
  .testi-name{font-size:14px;font-weight:700}
  .testi-role{font-size:12px;color:#a0aec0}

  /* CTA */
  .cta{background:linear-gradient(135deg,#003f8a,#0080d4);padding:72px 2rem;text-align:center;color:#fff}
  .cta h2{font-size:clamp(22px,3vw,36px);font-weight:800;margin-bottom:14px}
  .cta p{font-size:16px;opacity:.85;max-width:500px;margin:0 auto 32px}
  .cta-actions{display:flex;gap:14px;justify-content:center;flex-wrap:wrap}

  /* FOOTER */
  footer{background:#0f1b30;color:#94a3b8;padding:48px 2rem 28px}
  .footer-inner{max-width:1200px;margin:0 auto}
  .footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:40px;margin-bottom:40px}
  .footer-brand .logo{color:#7dd4fc;font-size:20px}
  .footer-brand p{font-size:13px;margin-top:12px;line-height:1.7;color:#64748b}
  .footer-col h5{font-size:13px;font-weight:700;color:#e2e8f0;margin-bottom:14px}
  .footer-col a{display:block;font-size:13px;color:#64748b;margin-bottom:8px;transition:.15s}
  .footer-col a:hover{color:#7dd4fc}
  .footer-bottom{border-top:1px solid #1e2d45;padding-top:24px;display:flex;justify-content:space-between;align-items:center;font-size:12px;flex-wrap:gap}
  .badge-row{display:flex;gap:10px;flex-wrap:wrap}
  .badge{background:#1e2d45;border:1px solid #2d3f55;color:#94a3b8;padding:4px 12px;border-radius:6px;font-size:11px}

  @media(max-width:768px){
    .nav-links{display:none}
    .footer-grid{grid-template-columns:1fr 1fr}
    .footer-brand{grid-column:1/-1}
    .hero-stats{gap:24px}
  }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="logo">pharma<span>depom</span>.com</div>
  <div class="nav-links">
    <a href="#">Ürünler</a>
    <a href="#">Depolar</a>
    <a href="#">Kategoriler</a>
    <a href="#">Outlet</a>
    <a href="#">Destek</a>
  </div>
  <div class="nav-right">
    <button class="btn-outline">Eczane Girişi</button>
    <button class="btn-primary">Depo Girişi</button>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-badge">🇹🇷 Türkiye'nin İlaç Pazaryeri</div>
  <h1>İlaç Depolarından<br><span>Doğrudan Eczanenize</span></h1>
  <p>Yüzlerce depodan binlerce ürünü karşılaştırın, en uygun fiyatla sipariş verin. Güvenli, hızlı ve tamamen dijital.</p>
  <div class="hero-actions">
    <button class="btn-hero btn-hero-white">Hemen Alışveriş Yap</button>
    <button class="btn-hero btn-hero-ghost">Depo Olarak Katıl</button>
  </div>
  <div class="hero-stats">
    <div class="stat"><div class="stat-num">1.200+</div><div class="stat-lbl">Kayıtlı Eczane</div></div>
    <div class="stat"><div class="stat-num">340+</div><div class="stat-lbl">İlaç Deposu</div></div>
    <div class="stat"><div class="stat-num">48.000+</div><div class="stat-lbl">Ürün Çeşidi</div></div>
    <div class="stat"><div class="stat-num">%99.2</div><div class="stat-lbl">Zamanında Teslimat</div></div>
  </div>
</section>

<!-- ARAMA -->
<section class="search-section">
  <div class="search-inner">
    <div class="search-box">
      <select>
        <option>Tüm Kategoriler</option>
        <option>Reçeteli İlaçlar</option>
        <option>OTC Ürünler</option>
        <option>Medikal Malzeme</option>
        <option>Kozmetik</option>
        <option>Vitamin & Takviye</option>
      </select>
      <input type="text" placeholder="İlaç adı, etken madde veya barkod...">
    </div>
    <button class="btn-search">🔍 Ara</button>
  </div>
  <div class="quick-tags">
    <span class="tag">Augmentin</span>
    <span class="tag">Parol</span>
    <span class="tag">Aspirin</span>
    <span class="tag">Coraspin</span>
    <span class="tag">Nurofen</span>
    <span class="tag">Majezik</span>
    <span class="tag">Ventolin</span>
    <span class="tag">Xarelto</span>
  </div>
</section>

<!-- NASIL ÇALIŞIR -->
<div class="section">
  <div class="section-title">Nasıl çalışır?</div>
  <div class="section-sub">Dört adımda ilaç siparişi</div>
  <div class="steps">
    <div class="step">
      <div class="step-num">ADIM 01</div>
      <div class="step-icon blue">🔍</div>
      <h3>Ürünü Ara</h3>
      <p>İlaç adı, etken madde veya barkod ile arama yapın. Tüm depolardan fiyatları anında karşılaştırın.</p>
    </div>
    <div class="step">
      <div class="step-num">ADIM 02</div>
      <div class="step-icon green">🏪</div>
      <h3>Depo Seç</h3>
      <p>Fiyat, stok durumu, teslimat süresi ve depoya olan mesafeye göre en iyi seçeneği belirleyin.</p>
    </div>
    <div class="step">
      <div class="step-num">ADIM 03</div>
      <div class="step-icon orange">🛒</div>
      <h3>Sipariş Ver</h3>
      <p>Birden fazla depodan tek sepette sipariş verin. Ödemenizi güvenle tamamlayın.</p>
    </div>
    <div class="step">
      <div class="step-num">ADIM 04</div>
      <div class="step-icon purple">🚚</div>
      <h3>Teslim Al</h3>
      <p>Ürünleriniz soğuk zincir korunarak eczanenize teslim edilir. Her adımı takip edin.</p>
    </div>
  </div>
</div>

<!-- ÖNERILEN DEPOLAR -->
<div class="section" style="padding-top:0">
  <div class="section-title">Öne çıkan depolar</div>
  <div class="section-sub">Türkiye'nin önde gelen ilaç depoları tek platformda</div>
  <div class="depolar-grid">
    <div class="depo-card">
      <div class="depo-logo" style="background:#0057b8">AT</div>
      <div class="depo-info">
        <h4>ATA İlaç Deposu</h4>
        <p>İstanbul • 12.400 ürün</p>
        <span class="depo-badge">✓ Onaylı Depo</span>
      </div>
    </div>
    <div class="depo-card">
      <div class="depo-logo" style="background:#16a34a">MED</div>
      <div class="depo-info">
        <h4>Medipol Dağıtım</h4>
        <p>Ankara • 9.800 ürün</p>
        <span class="depo-badge">✓ Onaylı Depo</span>
      </div>
    </div>
    <div class="depo-card">
      <div class="depo-logo" style="background:#7c3aed">EFS</div>
      <div class="depo-info">
        <h4>Efes Pharma</h4>
        <p>İzmir • 7.200 ürün</p>
        <span class="depo-badge">✓ Onaylı Depo</span>
      </div>
    </div>
    <div class="depo-card">
      <div class="depo-logo" style="background:#b45309">SAG</div>
      <div class="depo-info">
        <h4>Sağlık Deposu A.Ş.</h4>
        <p>Bursa • 6.500 ürün</p>
        <span class="depo-badge">✓ Onaylı Depo</span>
      </div>
    </div>
    <div class="depo-card">
      <div class="depo-logo" style="background:#dc2626">OPT</div>
      <div class="depo-info">
        <h4>Optimum İlaç</h4>
        <p>Antalya • 5.900 ürün</p>
        <span class="depo-badge">✓ Onaylı Depo</span>
      </div>
    </div>
    <div class="depo-card">
      <div class="depo-logo" style="background:#0891b2">KAR</div>
      <div class="depo-info">
        <h4>Kartal Dağıtım</h4>
        <p>İzmir • 4.300 ürün</p>
        <span class="depo-badge">✓ Onaylı Depo</span>
      </div>
    </div>
  </div>
</div>

<!-- KATEGORİLER -->
<div class="section" style="padding-top:0">
  <div class="section-title">Kategoriler</div>
  <div class="section-sub">Geniş ürün yelpazesinden kolayca seçin</div>
  <div class="cats-grid">
    <div class="cat-card"><div class="cat-icon">💊</div><div class="cat-name">Reçeteli İlaçlar</div><div class="cat-count">22.400 ürün</div></div>
    <div class="cat-card"><div class="cat-icon">🌿</div><div class="cat-name">OTC / Serbest</div><div class="cat-count">8.200 ürün</div></div>
    <div class="cat-card"><div class="cat-icon">🩺</div><div class="cat-name">Medikal Malzeme</div><div class="cat-count">5.600 ürün</div></div>
    <div class="cat-card"><div class="cat-icon">💉</div><div class="cat-name">Aşı & Serum</div><div class="cat-count">1.100 ürün</div></div>
    <div class="cat-card"><div class="cat-icon">🧴</div><div class="cat-name">Kozmetik & Bakım</div><div class="cat-count">3.800 ürün</div></div>
    <div class="cat-card"><div class="cat-icon">🌾</div><div class="cat-name">Vitamin & Takviye</div><div class="cat-count">2.900 ürün</div></div>
    <div class="cat-card"><div class="cat-icon">👶</div><div class="cat-name">Bebek & Anne</div><div class="cat-count">1.400 ürün</div></div>
    <div class="cat-card"><div class="cat-icon">🔬</div><div class="cat-name">Diagnostik</div><div class="cat-count">870 ürün</div></div>
  </div>
</div>

<!-- ÜRÜNLER -->
<div class="section" style="padding-top:0">
  <div class="section-title">Öne çıkan ürünler</div>
  <div class="section-sub">Bugün en çok sipariş edilen ürünler</div>
  <div class="products-grid">
    <div class="prod-card">
      <div class="prod-img" style="background:#eff6ff">💊</div>
      <div class="prod-body">
        <div class="prod-category">Reçeteli</div>
        <div class="prod-name">Augmentin 1000mg 14 Film Tablet</div>
        <div class="prod-brand">GlaxoSmithKline</div>
        <div class="prod-bottom">
          <div><div class="prod-price">₺148,50</div><div class="prod-unit">kutu</div></div>
          <button class="btn-add">Sepete Ekle</button>
        </div>
        <div class="prod-stock in-stock">✓ Stokta (8 depo)</div>
      </div>
    </div>
    <div class="prod-card">
      <div class="prod-img" style="background:#f0fdf4">🌿</div>
      <div class="prod-body">
        <div class="prod-category">OTC</div>
        <div class="prod-name">Parol 500mg 20 Tablet</div>
        <div class="prod-brand">Atabay</div>
        <div class="prod-bottom">
          <div><div class="prod-price">₺42,75</div><div class="prod-unit">kutu</div></div>
          <button class="btn-add">Sepete Ekle</button>
        </div>
        <div class="prod-stock in-stock">✓ Stokta (14 depo)</div>
      </div>
    </div>
    <div class="prod-card">
      <div class="prod-img" style="background:#fefce8">💉</div>
      <div class="prod-body">
        <div class="prod-category">Aşı</div>
        <div class="prod-name">Influvac Tetra 2024-25 Grip Aşısı</div>
        <div class="prod-brand">Abbott</div>
        <div class="prod-bottom">
          <div><div class="prod-price">₺380,00</div><div class="prod-unit">doz</div></div>
          <button class="btn-add">Sepete Ekle</button>
        </div>
        <div class="prod-stock low-stock">⚠ Az Stok (3 depo)</div>
      </div>
    </div>
    <div class="prod-card">
      <div class="prod-img" style="background:#fdf4ff">🧴</div>
      <div class="prod-body">
        <div class="prod-category">Kozmetik</div>
        <div class="prod-name">Bepanthen Plus Krem 30g</div>
        <div class="prod-brand">Bayer</div>
        <div class="prod-bottom">
          <div><div class="prod-price">₺94,20</div><div class="prod-unit">adet</div></div>
          <button class="btn-add">Sepete Ekle</button>
        </div>
        <div class="prod-stock in-stock">✓ Stokta (11 depo)</div>
      </div>
    </div>
    <div class="prod-card">
      <div class="prod-img" style="background:#fff7ed">🌾</div>
      <div class="prod-body">
        <div class="prod-category">Vitamin</div>
        <div class="prod-name">D-Vit 1000 IU 30 Kapsül</div>
        <div class="prod-brand">Deva</div>
        <div class="prod-bottom">
          <div><div class="prod-price">₺67,00</div><div class="prod-unit">kutu</div></div>
          <button class="btn-add">Sepete Ekle</button>
        </div>
        <div class="prod-stock in-stock">✓ Stokta (9 depo)</div>
      </div>
    </div>
    <div class="prod-card">
      <div class="prod-img" style="background:#eff6ff">🩺</div>
      <div class="prod-body">
        <div class="prod-category">Medikal</div>
        <div class="prod-name">Glukometri Şerit 50'li</div>
        <div class="prod-brand">Accu-Chek</div>
        <div class="prod-bottom">
          <div><div class="prod-price">₺210,00</div><div class="prod-unit">kutu</div></div>
          <button class="btn-add">Sepete Ekle</button>
        </div>
        <div class="prod-stock in-stock">✓ Stokta (6 depo)</div>
      </div>
    </div>
  </div>
</div>

<!-- ÖZELLIKLER -->
<section class="features">
  <div class="features-inner">
    <div class="section-title">Neden pharmadepom?</div>
    <div class="section-sub" style="margin-bottom:36px">Eczane ve depolar için tasarlandı</div>
    <div class="features-grid">
      <div class="feature">
        <div class="feat-icon">🔒</div>
        <div class="feat-text"><h4>SGK & Yasal Uyumluluk</h4><p>Tüm işlemler Türk Eczacılar Birliği ve Sağlık Bakanlığı yönetmelikleriyle uyumludur.</p></div>
      </div>
      <div class="feature">
        <div class="feat-icon">❄️</div>
        <div class="feat-text"><h4>Soğuk Zincir Güvencesi</h4><p>Sıcaklığa duyarlı ürünler için soğuk zincir takibi ve sertifikalı teslimat.</p></div>
      </div>
      <div class="feature">
        <div class="feat-icon">📊</div>
        <div class="feat-text"><h4>Fiyat Karşılaştırma</h4><p>Aynı ürün için tüm depolardan anlık fiyat karşılaştırması yapın, en iyisini seçin.</p></div>
      </div>
      <div class="feature">
        <div class="feat-icon">🧾</div>
        <div class="feat-text"><h4>Otomatik Fatura</h4><p>Her siparişte e-fatura otomatik oluşturulur ve sistemlerinize entegre edilir.</p></div>
      </div>
      <div class="feature">
        <div class="feat-icon">📱</div>
        <div class="feat-text"><h4>Mobil Uygulama</h4><p>iOS ve Android uygulamasıyla her yerden sipariş verin, takip edin.</p></div>
      </div>
      <div class="feature">
        <div class="feat-icon">🤝</div>
        <div class="feat-text"><h4>7/24 Destek</h4><p>Uzman ilaç danışmanlarından her an destek alın. Acil stok ihtiyaçlarında öncelikli hizmet.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- YORUMLar -->
<div class="section">
  <div class="section-title">Eczaneler ne diyor?</div>
  <div class="section-sub">Binlerce eczane pharmadepom'a güveniyor</div>
  <div class="testi-grid">
    <div class="testi">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-text">"Birden fazla depodan fiyat karşılaştırması yapmak artık çok kolay. Aylık maliyetimiz %12 düştü."</div>
      <div class="testi-author">
        <div class="avatar" style="background:#0057b8">AK</div>
        <div><div class="testi-name">Doç. Dr. Canan Bulut</div><div class="testi-role">Bulut Eczanesi, İstanbul</div></div>
      </div>
    </div>
    <div class="testi">
      <div class="testi-stars">★★★★★</div>
      <div class="testi-text">"Acil stok ihtiyaçlarımda aynı gün teslimat seçeneği hayat kurtarıcı. Artık stok sıkıntısı yaşamıyorum."</div>
      <div class="testi-author">
        <div class="avatar" style="background:#16a34a">MO</div>
        <div><div class="testi-name">Ecz. Mehmet Öztürk</div><div class="testi-role">Şifa Eczanesi, Ankara</div></div>
      </div>
    </div>
    <div class="testi">
      <div class="testi-stars">★★★★☆</div>
      <div class="testi-text">"Otomatik fatura entegrasyonu muhasebe yükümü ciddi azalttı. Kullanımı çok sezgisel, tavsiye ediyorum."</div>
      <div class="testi-author">
        <div class="avatar" style="background:#7c3aed">ZY</div>
        <div><div class="testi-name">Ecz. Zeynep Yıldız</div><div class="testi-role">Yıldız Eczanesi, İzmir</div></div>
      </div>
    </div>
  </div>
</div>

<!-- CTA -->
<section class="cta">
  <h2>Eczanenizi dijital dönüşüme taşıyın</h2>
  <p>Ücretsiz kayıt olun, 30 gün boyunca tüm avantajlardan yararlanın.</p>
  <div class="cta-actions">
    <button class="btn-hero btn-hero-white">Eczane Olarak Kayıt Ol</button>
    <button class="btn-hero btn-hero-ghost">Depo Olarak Katıl</button>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo">pharma<span>depom</span>.com</div>
        <p>Türkiye'nin ilaç depolarını eczanelerle buluşturan güvenilir pazaryeri. Sağlık Bakanlığı onaylı, SGK uyumlu.</p>
      </div>
      <div class="footer-col">
        <h5>Platform</h5>
        <a href="#">Ürünler</a>
        <a href="#">Depolar</a>
        <a href="#">Kategoriler</a>
        <a href="#">Outlet</a>
        <a href="#">Mobil Uygulama</a>
      </div>
      <div class="footer-col">
        <h5>Çözümler</h5>
        <a href="#">Eczaneler için</a>
        <a href="#">Depolar için</a>
        <a href="#">Hastane Eczaneleri</a>
        <a href="#">API Entegrasyonu</a>
      </div>
      <div class="footer-col">
        <h5>Destek</h5>
        <a href="#">Yardım Merkezi</a>
        <a href="#">Bize Ulaşın</a>
        <a href="#">Gizlilik Politikası</a>
        <a href="#">Kullanım Koşulları</a>
        <a href="#">KVKK</a>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2025 pharmadepom.com — Tüm hakları saklıdır.</span>
      <div class="badge-row">
        <span class="badge">SGK Uyumlu</span>
        <span class="badge">SSL Güvenli</span>
        <span class="badge">TEB Onaylı</span>
      </div>
    </div>
  </div>
</footer>

</body>
</html>