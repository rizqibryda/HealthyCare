<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id('id_dokter'); // Equivalent to bigint(20) unsigned AUTO_INCREMENT PRIMARY KEY
            $table->string('nama_lengkap', 100);
            $table->string('username', 50);
            $table->string('password', 255); // Store hashed passwords
            $table->string('poliklinik', 255);
            $table->enum('jenis_klinik', ['Umum', 'Gigi', 'Ibu dan Anak']);
            $table->text('alamat');
            $table->string('email', 100);
            $table->string('foto', 255)->nullable(); // Allows null values
            $table->timestamps(); // Creates created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};