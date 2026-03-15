@extends('layouts.app')

@section('title', 'Depo Kaydı')

@section('content')
<div style="min-height:80vh;display:flex;align-items:center;justify-content:center;padding:2rem">
<div style="background:#fff;border-radius:16px;border:1px solid #e0e8f0;padding:40px;width:100%;max-width:520px">

    <div style="text-align:center;margin-bottom:32px">
        <h1 style="font-size:24px;font-weight:700;color:#1a2236;margin-bottom:8px">Depo Kaydı</h1>
        <p style="color:#718096;font-size:14px">pharmadepom.com'a depo olarak katılın, binlerce eczaneye ulaşın</p>
    </div>

    @if(session('error'))
        <div style="background:#fee2e2;border:1px solid #fca5a5;border-radius:8px;padding:12px;margin-bottom:20px;color:#dc2626;font-size:14px">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/depo/kayit">
        @csrf

        <div style="margin-bottom:16px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">Depo Adı</label>
            <input type="text" name="depo_adi" value="{{ old('depo_adi') }}" placeholder="Örn: ATA İlaç Deposu"
                style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none"
                required>
            @error('depo_adi')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom:16px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">Yetkili Adı Soyadı</label>
            <input type="text" name="ad_soyad" value="{{ old('ad_soyad') }}" placeholder="Ad Soyad"
                style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none"
                required>
        </div>

        <div style="margin-bottom:16px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">E-posta</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="depo@email.com"
                style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none"
                required>
            @error('email')<span style="color:#dc2626;font-size:12px">{{ $message }}</span>@enderror
        </div>

        <div style="margin-bottom:16px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">Telefon</label>
            <input type="tel" name="telefon" value="{{ old('telefon') }}" placeholder="0212 000 00 00"
                style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none"
                required>
        </div>

        <div style="margin-bottom:16px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">Şehir</label>
            <select name="sehir" style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none">
                <option value="">Şehir Seçin</option>
                <option value="istanbul">İstanbul</option>
                <option value="ankara">Ankara</option>
                <option value="izmir">İzmir</option>
                <option value="bursa">Bursa</option>
                <option value="antalya">Antalya</option>
                <option value="diger">Diğer</option>
            </select>
        </div>

        <div style="margin-bottom:16px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">Vergi No</label>
            <input type="text" name="vergi_no" value="{{ old('vergi_no') }}" placeholder="Vergi numaranız"
                style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none">
        </div>

        <div style="margin-bottom:16px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">Şifre</label>
            <input type="password" name="password" placeholder="En az 8 karakter"
                style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none"
                required>
        </div>

        <div style="margin-bottom:24px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">Şifre Tekrar</label>
            <input type="password" name="password_confirmation" placeholder="Şifrenizi tekrar girin"
                style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none"
                required>
        </div>

        <button type="submit"
            style="width:100%;padding:12px;background:#0057b8;color:#fff;border:none;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer">
            Depo Olarak Kayıt Ol
        </button>
    </form>

    <p style="text-align:center;margin-top:20px;font-size:14px;color:#718096">
        Zaten hesabınız var mı? <a href="/depo/giris" style="color:#0057b8;font-weight:600">Giriş Yapın</a>
    </p>

</div>
</div>
@endsection