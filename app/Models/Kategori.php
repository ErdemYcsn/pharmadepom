<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoriler';
    protected $fillable = ['ad', 'ikon'];

    public function urunler()
    {
        return $this->hasMany(Urun::class, 'kategori_id');
    }
}