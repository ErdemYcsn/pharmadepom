@extends('layouts.app')

@section('title', 'Depolar')

@section('content')
<div style="max-width:1200px;margin:0 auto;padding:2rem">

    <div style="margin-bottom:28px">
        <h1 style="font-size:24px;font-weight:700;color:#1a2236">İlaç Depoları</h1>
        <p style="color:#718096;font-size:14px;margin-top:4px">Türkiye'nin önde gelen ilaç depolarını keşfedin</p>
    </div>

    {{-- Arama --}}
    <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:20px;margin-bottom:24px">
        <form method="GET" action="/depolar" style="display:flex;gap:10px;flex-wrap:wrap">
            <select name="sehir" style="padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none">
                <option value="">Tüm Şehirler</option>
                <option value="istanbul">İstanbul</option>
                <option value="ankara">Ankara</option>
                <option value="izmir">İzmir</option>
                <option value="bursa">Bursa</option>
                <option value="antalya">Antalya</option>
            </select>
            <input type="text" name="ara" value="{{ request('ara') }}" placeholder="Depo adı ara..."
                style="flex:1;min-width:200px;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none">
            <button type="submit"
                style="padding:10px 24px;background:#0057b8;color:#fff;border:none;border-radius:8px;font-size:14px;font-weight:700;cursor:pointer">
                🔍 Ara
            </button>
        </form>
    </div>

    {{-- Depolar Grid --}}
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:16px">

        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:24px;cursor:pointer;transition:.2s">
            <div style="display:flex;align-items:center;gap:14px;margin-bottom:16px">
                <div style="width:52px;height:52px;border-radius:10px;background:#0057b8;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:15px;color:#fff;flex-shrink:0">AT</div>
                <div>
                    <div style="font-size:15px;font-weight:700">ATA İlaç Deposu</div>
                    <div style="font-size:13px;color:#718096">İstanbul</div>
                </div>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:13px;color:#718096;margin-bottom:14px">
                <span>12.400 ürün</span>
                <span style="background:#dcfce7;color:#15803d;padding:2px 10px;border-radius:10px;font-weight:600;font-size:11px">✓ Onaylı</span>
            </div>
            <a href="#" style="display:block;text-align:center;padding:8px;background:#eff6ff;color:#0057b8;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none">
                Ürünleri Gör →
            </a>
        </div>

        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:24px;cursor:pointer">
            <div style="display:flex;align-items:center;gap:14px;margin-bottom:16px">
                <div style="width:52px;height:52px;border-radius:10px;background:#16a34a;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:15px;color:#fff;flex-shrink:0">MED</div>
                <div>
                    <div style="font-size:15px;font-weight:700">Medipol Dağıtım</div>
                    <div style="font-size:13px;color:#718096">Ankara</div>
                </div>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:13px;color:#718096;margin-bottom:14px">
                <span>9.800 ürün</span>
                <span style="background:#dcfce7;color:#15803d;padding:2px 10px;border-radius:10px;font-weight:600;font-size:11px">✓ Onaylı</span>
            </div>
            <a href="#" style="display:block;text-align:center;padding:8px;background:#eff6ff;color:#0057b8;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none">
                Ürünleri Gör →
            </a>
        </div>

        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:24px;cursor:pointer">
            <div style="display:flex;align-items:center;gap:14px;margin-bottom:16px">
                <div style="width:52px;height:52px;border-radius:10px;background:#7c3aed;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:15px;color:#fff;flex-shrink:0">EFS</div>
                <div>
                    <div style="font-size:15px;font-weight:700">Efes Pharma</div>
                    <div style="font-size:13px;color:#718096">İzmir</div>
                </div>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:13px;color:#718096;margin-bottom:14px">
                <span>7.200 ürün</span>
                <span style="background:#dcfce7;color:#15803d;padding:2px 10px;border-radius:10px;font-weight:600;font-size:11px">✓ Onaylı</span>
            </div>
            <a href="#" style="display:block;text-align:center;padding:8px;background:#eff6ff;color:#0057b8;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none">
                Ürünleri Gör →
            </a>
        </div>

        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:24px;cursor:pointer">
            <div style="display:flex;align-items:center;gap:14px;margin-bottom:16px">
                <div style="width:52px;height:52px;border-radius:10px;background:#b45309;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:15px;color:#fff;flex-shrink:0">SAG</div>
                <div>
                    <div style="font-size:15px;font-weight:700">Sağlık Deposu A.Ş.</div>
                    <div style="font-size:13px;color:#718096">Bursa</div>
                </div>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:13px;color:#718096;margin-bottom:14px">
                <span>6.500 ürün</span>
                <span style="background:#dcfce7;color:#15803d;padding:2px 10px;border-radius:10px;font-weight:600;font-size:11px">✓ Onaylı</span>
            </div>
            <a href="#" style="display:block;text-align:center;padding:8px;background:#eff6ff;color:#0057b8;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none">
                Ürünleri Gör →
            </a>
        </div>

        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:24px;cursor:pointer">
            <div style="display:flex;align-items:center;gap:14px;margin-bottom:16px">
                <div style="width:52px;height:52px;border-radius:10px;background:#dc2626;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:15px;color:#fff;flex-shrink:0">OPT</div>
                <div>
                    <div style="font-size:15px;font-weight:700">Optimum İlaç</div>
                    <div style="font-size:13px;color:#718096">Antalya</div>
                </div>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:13px;color:#718096;margin-bottom:14px">
                <span>5.900 ürün</span>
                <span style="background:#dcfce7;color:#15803d;padding:2px 10px;border-radius:10px;font-weight:600;font-size:11px">✓ Onaylı</span>
            </div>
            <a href="#" style="display:block;text-align:center;padding:8px;background:#eff6ff;color:#0057b8;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none">
                Ürünleri Gör →
            </a>
        </div>

        <div style="background:#fff;border:1px solid #e0e8f0;border-radius:12px;padding:24px;cursor:pointer">
            <div style="display:flex;align-items:center;gap:14px;margin-bottom:16px">
                <div style="width:52px;height:52px;border-radius:10px;background:#0891b2;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:15px;color:#fff;flex-shrink:0">KAR</div>
                <div>
                    <div style="font-size:15px;font-weight:700">Kartal Dağıtım</div>
                    <div style="font-size:13px;color:#718096">İzmir</div>
                </div>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:13px;color:#718096;margin-bottom:14px">
                <span>4.300 ürün</span>
                <span style="background:#dcfce7;color:#15803d;padding:2px 10px;border-radius:10px;font-weight:600;font-size:11px">✓ Onaylı</span>
            </div>
            <a href="#" style="display:block;text-align:center;padding:8px;background:#eff6ff;color:#0057b8;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none">
                Ürünleri Gör →
            </a>
        </div>

    </div>
</div>
@endsection