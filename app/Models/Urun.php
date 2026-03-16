<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kategori;

class Urun extends Model
{
    protected $table = 'urunler';
    protected $fillable = ['kategori_id', 'depo_id', 'ad', 'aciklama', 'fiyat', 'stok', 'resim', 'aktif'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function depo()
    {
        return $this->belongsTo(User::class, 'depo_id');
    }
}