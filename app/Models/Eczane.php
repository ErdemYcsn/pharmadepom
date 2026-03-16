<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eczane extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'eczane_adi',
        'ad_soyad',
        'telefon',
        'sehir',
        'adres',
        'vergi_no',
        'durum',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}