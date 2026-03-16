<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EczaneController;
use App\Http\Controllers\DepoController;
use App\Http\Controllers\UrunController;
use App\Http\Controllers\DepolaController;

Route::get('/', function () {
    return view('welcome');
});

// Ürünler
Route::get('/urunler', [UrunController::class, 'index'])->name('urunler.index');

// Depolar
Route::get('/depolar', [DepolaController::class, 'index'])->name('depolar');

// Eczane
Route::get('/eczane/kayit', [EczaneController::class, 'kayitForm'])->name('eczane.kayit');
Route::post('/eczane/kayit', [EczaneController::class, 'kayitEt'])->name('eczane.kayit.post');
Route::get('/eczane/giris', [EczaneController::class, 'girisForm'])->name('eczane.giris');
Route::post('/eczane/giris', [EczaneController::class, 'girisYap'])->name('eczane.giris.post');
Route::get('/eczane/panel', [EczaneController::class, 'panel'])->name('eczane.panel');

// Depo
Route::get('/depo/kayit', [DepoController::class, 'kayitForm'])->name('depo.kayit');
Route::post('/depo/kayit', [DepoController::class, 'kayitEt'])->name('depo.kayit.post');
Route::get('/depo/giris', [DepoController::class, 'girisForm'])->name('depo.giris');
Route::post('/depo/giris', [DepoController::class, 'girisYap'])->name('depo.giris.post');
Route::get('/depo/panel', [DepoController::class, 'panel'])->name('depo.panel');