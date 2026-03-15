@extends('layouts.app')

@section('title', 'Depo Girişi')

@section('content')
<div style="min-height:80vh;display:flex;align-items:center;justify-content:center;padding:2rem">
<div style="background:#fff;border-radius:16px;border:1px solid #e0e8f0;padding:40px;width:100%;max-width:440px">

    <div style="text-align:center;margin-bottom:32px">
        <h1 style="font-size:24px;font-weight:700;color:#1a2236;margin-bottom:8px">Depo Girişi</h1>
        <p style="color:#718096;font-size:14px">pharmadepom.com depo panelinize giriş yapın</p>
    </div>

    @if(session('error'))
        <div style="background:#fee2e2;border:1px solid #fca5a5;border-radius:8px;padding:12px;margin-bottom:20px;color:#dc2626;font-size:14px">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div style="background:#dcfce7;border:1px solid #86efac;border-radius:8px;padding:12px;margin-bottom:20px;color:#16a34a;font-size:14px">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/depo/giris">
        @csrf

        <div style="margin-bottom:16px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">E-posta</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="depo@email.com"
                style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none"
                required>
        </div>

        <div style="margin-bottom:24px">
            <label style="display:block;font-size:13px;font-weight:600;color:#374151;margin-bottom:6px">Şifre</label>
            <input type="password" name="password" placeholder="Şifreniz"
                style="width:100%;padding:10px 14px;border:1.5px solid #e0e8f0;border-radius:8px;font-size:14px;outline:none"
                required>
        </div>

        <button type="submit"
            style="width:100%;padding:12px;background:#0057b8;color:#fff;border:none;border-radius:10px;font-size:15px;font-weight:700;cursor:pointer">
            Giriş Yap
        </button>
    </form>

    <p style="text-align:center;margin-top:20px;font-size:14px;color:#718096">
        Hesabınız yok mu? <a href="/depo/kayit" style="color:#0057b8;font-weight:600">Kayıt Olun</a>
    </p>

    <div style="border-top:1px solid #e0e8f0;margin-top:24px;padding-top:20px;text-align:center">
        <p style="font-size:13px;color:#718096;margin-bottom:12px">Eczane hesabınız var mı?</p>
        <a href="/eczane/giris" style="color:#0057b8;font-size:14px;font-weight:600">Eczane Girişi →</a>
    </div>

</div>
</div>
@endsection