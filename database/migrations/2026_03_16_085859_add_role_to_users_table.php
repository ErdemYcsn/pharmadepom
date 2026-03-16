<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['eczane', 'depo', 'admin'])->default('eczane')->after('email');
            $table->string('telefon')->nullable()->after('role');
            $table->string('sehir')->nullable()->after('telefon');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'telefon', 'sehir']);
        });
    }
};