<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pasien_lama', function (Blueprint $table) {
            $table->id(); // Primary key (auto-increment)
            $table->string('nama_pasien');
            $table->string('kartu_identitas');
            $table->string('nomor_rekam_medis');
            $table->timestamps(); // Untuk created_at dan updated_at
            // Tambahkan kolom lain jika ada
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pasien_lama');
    }
};