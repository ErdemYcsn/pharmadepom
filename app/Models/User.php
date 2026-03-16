<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'telefon',
        'sehir',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function eczane()
    {
        return $this->hasOne(Eczane::class);
    }

    public function depo()
    {
        return $this->hasOne(Depo::class);
    }

    public function isEczane()
    {
        return $this->role === 'eczane';
    }

    public function isDepo()
    {
        return $this->role === 'depo';
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}