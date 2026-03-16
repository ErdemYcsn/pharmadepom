<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('depolar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('depo_adi');
            $table->string('ad_soyad');
            $table->string('telefon');
            $table->string('sehir')->nullable();
            $table->string('adres')->nullable();
            $table->string('vergi_no')->nullable();
            $table->enum('durum', ['aktif', 'beklemede', 'pasif'])->default('beklemede');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('depolar');
    }
};