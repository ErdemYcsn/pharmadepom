<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use App\Models\Kategori;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index(Request $request)
    {
        $kategoriler = Kategori::all();

        $query = Urun::with(['kategori', 'depo'])->where('aktif', true);

        if ($request->filled('arama')) {
            $query->where('ad', 'like', '%' . $request->arama . '%');
        }

        if ($request->filled('kategori')) {
            $query->where('kategori_id', $request->kategori);
        }

        if ($request->filled('min_fiyat')) {
            $query->where('fiyat', '>=', $request->min_fiyat);
        }

        if ($request->filled('max_fiyat')) {
            $query->where('fiyat', '<=', $request->max_fiyat);
        }

        $urunler = $query->orderBy('ad')->paginate(12);

        return view('urunler.index', compact('urunler', 'kategoriler'));
    }
}