<?php

namespace App\Http\Controllers;

use App\Models\Eczane;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EczaneController extends Controller
{
    public function kayitForm()
    {
        return view('eczane.kayit');
    }

    public function kayitEt(Request $request)
    {
        $request->validate([
            'eczane_adi' => 'required|string|max:255',
            'ad_soyad'   => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'telefon'    => 'required|string|max:20',
            'password'   => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name'     => $request->ad_soyad,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'eczane',
            'telefon'  => $request->telefon,
            'sehir'    => $request->sehir,
        ]);

        Eczane::create([
            'user_id'    => $user->id,
            'eczane_adi' => $request->eczane_adi,
            'ad_soyad'   => $request->ad_soyad,
            'telefon'    => $request->telefon,
            'sehir'      => $request->sehir,
        ]);

        Auth::login($user);

        return redirect('/eczane/panel')->with('success', 'Kayıt başarılı! Hoş geldiniz.');
    }

    public function girisForm()
    {
        return view('eczane.giris');
    }

    public function girisYap(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->where('role', 'eczane')->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'E-posta veya şifre hatalı!');
        }

        Auth::login($user);

        return redirect('/eczane/panel');
    }

    public function panel()
    {
        if (!Auth::check() || !Auth::user()->isEczane()) {
            return redirect('/eczane/giris')->with('error', 'Lütfen giriş yapın.');
        }

        return view('eczane.panel');
    }
}