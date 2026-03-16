<?php

namespace App\Http\Controllers;

use App\Models\Depo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        $user = User::create([
            'name'     => $request->ad_soyad,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'depo',
            'telefon'  => $request->telefon,
            'sehir'    => $request->sehir,
        ]);

        Depo::create([
            'user_id'  => $user->id,
            'depo_adi' => $request->depo_adi,
            'ad_soyad' => $request->ad_soyad,
            'telefon'  => $request->telefon,
            'sehir'    => $request->sehir,
            'vergi_no' => $request->vergi_no,
        ]);

        Auth::login($user);

        return redirect('/depo/panel')->with('success', 'Kayıt başarılı! Hoş geldiniz.');
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

        $user = User::where('email', $request->email)->where('role', 'depo')->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'E-posta veya şifre hatalı!');
        }

        Auth::login($user);

        return redirect('/depo/panel');
    }

    public function panel()
    {
        if (!Auth::check() || !Auth::user()->isDepo()) {
            return redirect('/depo/giris')->with('error', 'Lütfen giriş yapın.');
        }

        return view('depo.panel');
    }
}