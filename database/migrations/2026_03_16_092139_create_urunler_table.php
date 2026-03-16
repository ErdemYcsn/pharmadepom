<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('urunler', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('kategoriler')->onDelete('cascade');
            $table->foreignId('depo_id')->constrained('users')->onDelete('cascade');
            $table->string('ad');
            $table->text('aciklama')->nullable();
            $table->decimal('fiyat', 10, 2);
            $table->integer('stok')->default(0);
            $table->string('resim')->nullable();
            $table->boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('urunler');
    }
};