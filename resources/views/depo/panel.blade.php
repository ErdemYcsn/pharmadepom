@extends('layouts.app')

@section('title', 'Depo Paneli')

@section('content')
<div style="max-width:1200px;margin:0 auto;padding:2rem">

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:32px">
        <div>
            <h1 style="font-size:24px;font-weight:700;color:#1a2236">Hoş geldiniz! 👋</h1>
            <p style="color:#718096;font-size:14px;margin-top:4px">Depo Paneli</p>
        </div>
        <a href="#" style="padding:10px 24px;background:#0057b8;color:#fff;border-radius:8px;text-decoration:none;font-weight:600;font-size:14px">
            + Ürün Ekle
        </a>
    </div>

    {{-- İstatistik Kartları --}}
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;margin-bottom:32px">
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:20px">
            <div style="font-size:13px;color:#718096;margin-bottom:8px">Toplam Ürün</div>
            <div style="font-size:28px;font-weight:800;color:#0057b8">0</div>
        </div>
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:20px">
            <div style="font-size:13px;color:#718096;margin-bottom:8px">Yeni Sipariş</div>
            <div style="font-size:28px;font-weight:800;color:#d97706">0</div>
        </div>
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:20px">
            <div style="font-size:13px;color:#718096;margin-bottom:8px">Teslim Edilen</div>
            <div style="font-size:28px;font-weight:800;color:#16a34a">0</div>
        </div>
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:20px">
            <div style="font-size:13px;color:#718096;margin-bottom:8px">Bu Ay Ciro</div>
            <div style="font-size:28px;font-weight:800;color:#1a2236">₺0</div>
        </div>
    </div>

    {{-- Hızlı Erişim --}}
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:16px;margin-bottom:32px">
        <a href="#" style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:12px;padding:24px;text-decoration:none;display:block">
            <div style="font-size:28px;margin-bottom:12px">💊</div>
            <div style="font-size:16px;font-weight:700;color:#1e40af;margin-bottom:4px">Ürünlerim</div>
            <div style="font-size:13px;color:#3b82f6">Ürünlerinizi yönetin</div>
        </a>
        <a href="#" style="background:#f0fdf4;border:1px solid #bbf7d0;border-radius:12px;padding:24px;text-decoration:none;display:block">
            <div style="font-size:28px;margin-bottom:12px">📦</div>
            <div style="font-size:16px;font-weight:700;color:#15803d;margin-bottom:4px">Siparişler</div>
            <div style="font-size:13px;color:#16a34a">Gelen siparişleri yönetin</div>
        </a>
        <a href="#" style="background:#fefce8;border:1px solid #fef08a;border-radius:12px;padding:24px;text-decoration:none;display:block">
            <div style="font-size:28px;margin-bottom:12px">📊</div>
            <div style="font-size:16px;font-weight:700;color:#a16207;margin-bottom:4px">Raporlar</div>
            <div style="font-size:13px;color:#ca8a04">Satış raporlarınızı görüntüleyin</div>
        </a>
    </div>

    {{-- Son Siparişler --}}
    <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:24px">
        <h2 style="font-size:16px;font-weight:700;margin-bottom:16px">Son Siparişler</h2>
        <div style="text-align:center;padding:40px;color:#a0aec0">
            <div style="font-size:48px;margin-bottom:12px">📋</div>
            <p>Henüz sipariş yok</p>
            <p style="font-size:13px;margin-top:8px">Ürün ekledikçe siparişler burada görünecek</p>
        </div>
    </div>

</div>
@endsection