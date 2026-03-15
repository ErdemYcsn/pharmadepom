<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepoController extends Controller
{
    public function kayitForm()
    {
        return view('depo.kayit');
    }

    public function kayitEt(Request $request)
    {
        $request->validate([
            'depo_adi' => 'required|string|max:255',
            'ad_soyad' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'telefon'  => 'required|string|max:20',
            'password' => 'required|min:8|confirmed',
        ]);

        // Kullanıcı kaydı sonraki adımda eklenecek
        return redirect('/depo/giris')->with('success', 'Kayıt başarılı! Giriş yapabilirsiniz.');
    }

    public function girisForm()
    {
        return view('depo.giris');
    }

    public function girisYap(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Giriş mantığı sonraki adımda eklenecek
        return redirect('/depo/panel');
    }

    public function panel()
    {
        return view('depo.panel');
    }
}