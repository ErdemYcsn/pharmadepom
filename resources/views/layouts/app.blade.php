<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title ?? 'pharmadepom.com' }}</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Segoe UI',sans-serif;background:#f4f7fb;color:#1a2236}
nav{background:#fff;border-bottom:1px solid #e0e8f0;padding:0 2rem;display:flex;align-items:center;justify-content:space-between;height:64px;position:sticky;top:0;z-index:100}
.logo{font-size:22px;font-weight:700;color:#0057b8;text-decoration:none}
.logo span{color:#00a86b}
.nav-links{display:flex;gap:2rem;font-size:14px}
.nav-links a{color:#4a5568;text-decoration:none}
.nav-links a:hover{color:#0057b8}
.nav-right{display:flex;gap:10px}
.btn-outline{padding:8px 18px;border:1.5px solid #0057b8;border-radius:8px;color:#0057b8;font-size:14px;font-weight:600;background:transparent;text-decoration:none}
.btn-outline:hover{background:#e8f0fb}
.btn-primary{padding:8px 20px;border-radius:8px;background:#0057b8;color:#fff;font-size:14px;font-weight:600;text-decoration:none}
.btn-primary:hover{background:#004299}
footer{background:#0f1b30;color:#94a3b8;padding:32px 2rem;text-align:center;font-size:13px;margin-top:4rem}
footer .logo{color:#7dd4fc;font-size:18px}
footer p{margin-top:8px;color:#64748b}
</style>
</head>
<body>

<nav>
    <a href="/" class="logo">pharma<span>depom</span>.com</a>
    <div class="nav-links">
        <a href="/urunler">Ürünler</a>
        <a href="/depolar">Depolar</a>
        <a href="/#kategoriler">Kategoriler</a>
        <a href="#">Fiyat Listesi</a>
        <a href="#">Destek</a>
    </div>
    <div class="nav-right">
        <a href="/eczane/giris" class="btn-outline">Eczane Girişi</a>
        <a href="/depo/giris" class="btn-primary">Depo Girişi</a>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <div class="logo">pharma<span style="color:#00a86b">depom</span>.com</div>
    <p>© 2025 pharmadepom.com — Tüm hakları saklıdır. SGK Uyumlu | SSL Güvenli | TEB Onaylı</p>
</footer>

</body>
</html>