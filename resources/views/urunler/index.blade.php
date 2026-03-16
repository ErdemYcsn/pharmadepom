@extends('layouts.app')

@section('content')
<style>
@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

.urun-page { font-family: 'Plus Jakarta Sans', sans-serif; background: #f0f4ff; min-height: 100vh; }

.search-hero {
    background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #2563eb 100%);
    padding: 40px 0 60px;
    position: relative;
    overflow: hidden;
}
.search-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: rgba(255,255,255,0.05);
    border-radius: 50%;
}
.search-hero::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -5%;
    width: 300px;
    height: 300px;
    background: rgba(255,255,255,0.03);
    border-radius: 50%;
}
.search-title { color: #fff; font-size: 28px; font-weight: 800; margin-bottom: 6px; }
.search-subtitle { color: rgba(255,255,255,0.7); font-size: 14px; margin-bottom: 24px; }

.search-box {
    display: flex;
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.2);
}
.search-box input {
    flex: 1;
    border: none;
    outline: none;
    padding: 16px 20px;
    font-size: 15px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    color: #1e293b;
}
.search-box input::placeholder { color: #94a3b8; }
.search-box button {
    background: #2563eb;
    color: #fff;
    border: none;
    padding: 16px 28px;
    font-size: 15px;
    font-weight: 700;
    font-family: 'Plus Jakarta Sans', sans-serif;
    cursor: pointer;
    transition: background 0.2s;
    display: flex;
    align-items: center;
    gap: 8px;
}
.search-box button:hover { background: #1d4ed8; }

.main-layout { display: flex; gap: 28px; max-width: 1280px; margin: -24px auto 0; padding: 0 24px 60px; position: relative; z-index: 10; }

/* Sidebar */
.sidebar { width: 260px; flex-shrink: 0; }
.filter-card {
    background: #fff;
    border-radius: 20px;
    padding: 24px;
    margin-bottom: 16px;
    box-shadow: 0 4px 24px rgba(30,58,138,0.07);
}
.filter-title { font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #64748b; margin-bottom: 16px; }
.filter-option { display: flex; align-items: center; gap: 10px; padding: 8px 0; cursor: pointer; }
.filter-option input[type=radio] { accent-color: #2563eb; width: 16px; height: 16px; cursor: pointer; }
.filter-option span { font-size: 14px; color: #334155; font-weight: 500; }
.filter-option:hover span { color: #2563eb; }

.price-input-wrap label { font-size: 12px; color: #94a3b8; font-weight: 600; display: block; margin-bottom: 6px; }
.price-input-wrap input {
    width: 100%;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 12px;
    font-size: 14px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    color: #334155;
    outline: none;
    transition: border 0.2s;
    box-sizing: border-box;
}
.price-input-wrap input:focus { border-color: #2563eb; }

.btn-filter {
    width: 100%;
    background: #2563eb;
    color: #fff;
    border: none;
    border-radius: 12px;
    padding: 12px;
    font-size: 14px;
    font-weight: 700;
    font-family: 'Plus Jakarta Sans', sans-serif;
    cursor: pointer;
    transition: background 0.2s, transform 0.1s;
}
.btn-filter:hover { background: #1d4ed8; transform: translateY(-1px); }
.btn-clear { display: block; text-align: center; font-size: 13px; color: #94a3b8; margin-top: 10px; text-decoration: none; font-weight: 500; }
.btn-clear:hover { color: #64748b; }

/* Products */
.products-area { flex: 1; }
.products-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; }
.products-count { font-size: 14px; color: #64748b; }
.products-count strong { color: #1e293b; font-weight: 700; }

.products-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 20px; }

.product-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(30,58,138,0.07);
    transition: transform 0.2s, box-shadow 0.2s;
    display: flex;
    flex-direction: column;
}
.product-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(30,58,138,0.14); }

.product-img {
    height: 150px;
    background: linear-gradient(135deg, #eff6ff, #dbeafe);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 52px;
    position: relative;
}
.product-img img { width: 100%; height: 100%; object-fit: cover; }

.product-body { padding: 16px; flex: 1; display: flex; flex-direction: column; }
.product-badge {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    color: #2563eb;
    background: #eff6ff;
    border-radius: 20px;
    padding: 3px 10px;
    margin-bottom: 8px;
}
.product-name { font-size: 14px; font-weight: 700; color: #1e293b; line-height: 1.4; margin-bottom: 4px; }
.product-depo { font-size: 12px; color: #94a3b8; margin-bottom: 12px; }
.product-footer { display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px; }
.product-price { font-size: 18px; font-weight: 800; color: #1d4ed8; }
.product-stock-ok { font-size: 11px; color: #16a34a; background: #f0fdf4; padding: 3px 8px; border-radius: 20px; font-weight: 600; }
.product-stock-no { font-size: 11px; color: #dc2626; background: #fef2f2; padding: 3px 8px; border-radius: 20px; font-weight: 600; }

.btn-sepet {
    width: 100%;
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: #fff;
    border: none;
    border-radius: 12px;
    padding: 10px;
    font-size: 13px;
    font-weight: 700;
    font-family: 'Plus Jakarta Sans', sans-serif;
    cursor: pointer;
    transition: opacity 0.2s, transform 0.1s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
}
.btn-sepet:hover { opacity: 0.9; transform: translateY(-1px); }

/* Empty state */
.empty-state { text-align: center; padding: 80px 20px; background: #fff; border-radius: 24px; box-shadow: 0 4px 24px rgba(30,58,138,0.07); }
.empty-icon { font-size: 64px; margin-bottom: 16px; }
.empty-title { font-size: 18px; font-weight: 700; color: #1e293b; margin-bottom: 8px; }
.empty-desc { font-size: 14px; color: #64748b; margin-bottom: 24px; }
.btn-empty { display: inline-block; background: #2563eb; color: #fff; padding: 12px 28px; border-radius: 12px; font-weight: 700; font-size: 14px; text-decoration: none; transition: background 0.2s; }
.btn-empty:hover { background: #1d4ed8; }

/* Pagination */
.pagination-wrap { margin-top: 32px; }
</style>

<div class="urun-page">

    {{-- Arama Hero --}}
    <div class="search-hero">
        <div style="max-width:1280px; margin:0 auto; padding:0 24px; position:relative; z-index:2;">
            <h1 class="search-title">Ürün Ara</h1>
            <p class="search-subtitle">Binlerce ilaç ve medikal ürün arasından kolayca sipariş verin</p>
            <form method="GET" action="{{ route('urunler.index') }}">
                <div class="search-box">
                    <input type="text" name="arama" value="{{ request('arama') }}" placeholder="İlaç adı, etken madde veya barkod ara...">
                    <button type="submit">
                        <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        Ara
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Ana Layout --}}
    <div class="main-layout">

        {{-- Sidebar --}}
        <aside class="sidebar">
            <form method="GET" action="{{ route('urunler.index') }}">
                @if(request('arama'))
                    <input type="hidden" name="arama" value="{{ request('arama') }}">
                @endif

                <div class="filter-card">
                    <div class="filter-title">Kategoriler</div>
                    <div>
                        <label class="filter-option">
                            <input type="radio" name="kategori" value="" {{ !request('kategori') ? 'checked' : '' }}>
                            <span>Tümü</span>
                        </label>
                        @foreach($kategoriler as $kategori)
                        <label class="filter-option">
                            <input type="radio" name="kategori" value="{{ $kategori->id }}" {{ request('kategori') == $kategori->id ? 'checked' : '' }}>
                            <span>{{ $kategori->ad }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="filter-card">
                    <div class="filter-title">Fiyat Aralığı</div>
                    <div style="display:flex; flex-direction:column; gap:12px;">
                        <div class="price-input-wrap">
                            <label>Min Fiyat (₺)</label>
                            <input type="number" name="min_fiyat" value="{{ request('min_fiyat') }}" placeholder="0">
                        </div>
                        <div class="price-input-wrap">
                            <label>Max Fiyat (₺)</label>
                            <input type="number" name="max_fiyat" value="{{ request('max_fiyat') }}" placeholder="9999">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-filter">Filtrele</button>
                <a href="{{ route('urunler.index') }}" class="btn-clear">Filtreleri Temizle</a>
            </form>
        </aside>

        {{-- Ürünler --}}
        <div class="products-area">
            <div class="products-header">
                <p class="products-count"><strong>{{ $urunler->total() }}</strong> ürün bulundu</p>
            </div>

            @if($urunler->count() > 0)
            <div class="products-grid">
                @foreach($urunler as $urun)
                <div class="product-card">
                    <div class="product-img">
                        @if($urun->resim)
                            <img src="{{ asset('storage/' . $urun->resim) }}" alt="{{ $urun->ad }}">
                        @else
                            💊
                        @endif
                    </div>
                    <div class="product-body">
                        <span class="product-badge">{{ $urun->kategori->ad ?? '-' }}</span>
                        <div class="product-name">{{ $urun->ad }}</div>
                        <div class="product-depo">{{ $urun->depo->name ?? 'Depo' }}</div>
                        <div class="product-footer">
                            <span class="product-price">₺{{ number_format($urun->fiyat, 2) }}</span>
                            @if($urun->stok > 0)
                                <span class="product-stock-ok">✓ Stokta</span>
                            @else
                                <span class="product-stock-no">✗ Tükendi</span>
                            @endif
                        </div>
                        <button class="btn-sepet">
                            <svg width="15" height="15" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            Sepete Ekle
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="pagination-wrap">
                {{ $urunler->withQueryString()->links() }}
            </div>

            @else
            <div class="empty-state">
                <div class="empty-icon">🔍</div>
                <div class="empty-title">Ürün bulunamadı</div>
                <p class="empty-desc">Farklı bir arama terimi deneyin veya filtreleri temizleyin.</p>
                <a href="{{ route('urunler.index') }}" class="btn-empty">Tüm Ürünleri Gör</a>
            </div>
            @endif
        </div>

    </div>
</div>
@endsection