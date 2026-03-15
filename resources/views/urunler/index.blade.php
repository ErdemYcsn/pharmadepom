@extends('layouts.app')

@section('title', 'Ürünler')

@section('content')
<div style="max-width:1200px;margin:0 auto;padding:2rem">

    {{-- Başlık --}}
    <div style="margin-bottom:28px">
        <h1 style="font-size:24px;font-weight:700;color:#1a2236">Ürünler</h1>
        <p style="color:#718096;font-size:14px;margin-top:4px">48.000+ ürün arasından arayın ve sipariş verin</p>
    </div>

    {{-- Arama --}}
    <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:20px;margin-bottom:24px">
        <form method="GET" action="/urunler" style="display:flex;gap:10px;flex-wrap:wrap">
            <select name="kategori" style="padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none">
                <option value="">Tüm Kategoriler</option>
                <option value="receteli">Reçeteli İlaçlar</option>
                <option value="otc">OTC / Serbest</option>
                <option value="medikal">Medikal Malzeme</option>
                <option value="asi">Aşı & Serum</option>
                <option value="kozmetik">Kozmetik</option>
                <option value="vitamin">Vitamin & Takviye</option>
            </select>
            <input type="text" name="ara" value="{{ request('ara') }}" placeholder="İlaç adı, etken madde veya barkod..."
                style="flex:1;min-width:200px;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none">
            <button type="submit"
                style="padding:10px 24px;background:#0057b8;color:#fff;border:none;border-radius:8px;font-size:14px;font-weight:700;cursor:pointer">
                🔍 Ara
            </button>
        </form>
    </div>

    {{-- Ürün Grid --}}
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:16px">

        {{-- Örnek Ürün Kartı 1 --}}
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;overflow:hidden">
            <div style="height:120px;background:#eff6ff;display:flex;align-items:center;justify-content:center;font-size:36px">💊</div>
            <div style="padding:14px">
                <div style="font-size:11px;color:#0057b8;font-weight:700;text-transform:uppercase;margin-bottom:4px">Reçeteli</div>
                <div style="font-size:14px;font-weight:700;margin-bottom:4px">Augmentin 1000mg 14 Tablet</div>
                <div style="font-size:12px;color:#a0aec0;margin-bottom:10px">GlaxoSmithKline</div>
                <div style="display:flex;align-items:center;justify-content:space-between">
                    <div>
                        <div style="font-size:17px;font-weight:800;color:#0057b8">₺148,50</div>
                        <div style="font-size:11px;color:#a0aec0">kutu</div>
                    </div>
                    <button style="background:#0057b8;color:#fff;border:none;padding:7px 14px;border-radius:8px;font-size:12px;font-weight:700;cursor:pointer">
                        Sepete Ekle
                    </button>
                </div>
                <div style="font-size:11px;color:#16a34a;margin-top:8px">✓ Stokta (8 depo)</div>
            </div>
        </div>

        {{-- Örnek Ürün Kartı 2 --}}
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;overflow:hidden">
            <div style="height:120px;background:#f0fdf4;display:flex;align-items:center;justify-content:center;font-size:36px">🌿</div>
            <div style="padding:14px">
                <div style="font-size:11px;color:#0057b8;font-weight:700;text-transform:uppercase;margin-bottom:4px">OTC</div>
                <div style="font-size:14px;font-weight:700;margin-bottom:4px">Parol 500mg 20 Tablet</div>
                <div style="font-size:12px;color:#a0aec0;margin-bottom:10px">Atabay</div>
                <div style="display:flex;align-items:center;justify-content:space-between">
                    <div>
                        <div style="font-size:17px;font-weight:800;color:#0057b8">₺42,75</div>
                        <div style="font-size:11px;color:#a0aec0">kutu</div>
                    </div>
                    <button style="background:#0057b8;color:#fff;border:none;padding:7px 14px;border-radius:8px;font-size:12px;font-weight:700;cursor:pointer">
                        Sepete Ekle
                    </button>
                </div>
                <div style="font-size:11px;color:#16a34a;margin-top:8px">✓ Stokta (14 depo)</div>
            </div>
        </div>

        {{-- Örnek Ürün Kartı 3 --}}
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;overflow:hidden">
            <div style="height:120px;background:#fefce8;display:flex;align-items:center;justify-content:center;font-size:36px">💉</div>
            <div style="padding:14px">
                <div style="font-size:11px;color:#0057b8;font-weight:700;text-transform:uppercase;margin-bottom:4px">Aşı</div>
                <div style="font-size:14px;font-weight:700;margin-bottom:4px">Influvac Tetra Grip Aşısı</div>
                <div style="font-size:12px;color:#a0aec0;margin-bottom:10px">Abbott</div>
                <div style="display:flex;align-items:center;justify-content:space-between">
                    <div>
                        <div style="font-size:17px;font-weight:800;color:#0057b8">₺380,00</div>
                        <div style="font-size:11px;color:#a0aec0">doz</div>
                    </div>
                    <button style="background:#0057b8;color:#fff;border:none;padding:7px 14px;border-radius:8px;font-size:12px;font-weight:700;cursor:pointer">
                        Sepete Ekle
                    </button>
                </div>
                <div style="font-size:11px;color:#d97706;margin-top:8px">⚠ Az Stok (3 depo)</div>
            </div>
        </div>

        {{-- Örnek Ürün Kartı 4 --}}
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;overflow:hidden">
            <div style="height:120px;background:#fdf4ff;display:flex;align-items:center;justify-content:center;font-size:36px">🧴</div>
            <div style="padding:14px">
                <div style="font-size:11px;color:#0057b8;font-weight:700;text-transform:uppercase;margin-bottom:4px">Kozmetik</div>
                <div style="font-size:14px;font-weight:700;margin-bottom:4px">Bepanthen Plus Krem 30g</div>
                <div style="font-size:12px;color:#a0aec0;margin-bottom:10px">Bayer</div>
                <div style="display:flex;align-items:center;justify-content:space-between">
                    <div>
                        <div style="font-size:17px;font-weight:800;color:#0057b8">₺94,20</div>
                        <div style="font-size:11px;color:#a0aec0">adet</div>
                    </div>
                    <button style="background:#0057b8;color:#fff;border:none;padding:7px 14px;border-radius:8px;font-size:12px;font-weight:700;cursor:pointer">
                        Sepete Ekle
                    </button>
                </div>
                <div style="font-size:11px;color:#16a34a;margin-top:8px">✓ Stokta (11 depo)</div>
            </div>
        </div>

        {{-- Örnek Ürün Kartı 5 --}}
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;overflow:hidden">
            <div style="height:120px;background:#fff7ed;display:flex;align-items:center;justify-content:center;font-size:36px">🌾</div>
            <div style="padding:14px">
                <div style="font-size:11px;color:#0057b8;font-weight:700;text-transform:uppercase;margin-bottom:4px">Vitamin</div>
                <div style="font-size:14px;font-weight:700;margin-bottom:4px">D-Vit 1000 IU 30 Kapsül</div>
                <div style="font-size:12px;color:#a0aec0;margin-bottom:10px">Deva</div>
                <div style="display:flex;align-items:center;justify-content:space-between">
                    <div>
                        <div style="font-size:17px;font-weight:800;color:#0057b8">₺67,00</div>
                        <div style="font-size:11px;color:#a0aec0">kutu</div>
                    </div>
                    <button style="background:#0057b8;color:#fff;border:none;padding:7px 14px;border-radius:8px;font-size:12px;font-weight:700;cursor:pointer">
                        Sepete Ekle
                    </button>
                </div>
                <div style="font-size:11px;color:#16a34a;margin-top:8px">✓ Stokta (9 depo)</div>
            </div>
        </div>

        {{-- Örnek Ürün Kartı 6 --}}
        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;overflow:hidden">
            <div style="height:120px;background:#eff6ff;display:flex;align-items:center;justify-content:center;font-size:36px">🩺</div>
            <div style="padding:14px">
                <div style="font-size:11px;color:#0057b8;font-weight:700;text-transform:uppercase;margin-bottom:4px">Medikal</div>
                <div style="font-size:14px;font-weight:700;margin-bottom:4px">Glukometri Şerit 50'li</div>
                <div style="font-size:12px;color:#a0aec0;margin-bottom:10px">Accu-Chek</div>
                <div style="display:flex;align-items:center;justify-content:space-between">
                    <div>
                        <div style="font-size:17px;font-weight:800;color:#0057b8">₺210,00</div>
                        <div style="font-size:11px;color:#a0aec0">kutu</div>
                    </div>
                    <button style="background:#0057b8;color:#fff;border:none;padding:7px 14px;border-radius:8px;font-size:12px;font-weight:700;cursor:pointer">
                        Sepete Ekle
                    </button>
                </div>
                <div style="font-size:11px;color:#16a34a;margin-top:8px">✓ Stokta (6 depo)</div>
            </div>
        </div>

    </div>
</div>
@endsection