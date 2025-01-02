<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('polis', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pasien');
        $table->string('nomor_rekam_medis')->unique();
        $table->string('nama_klinik');
        $table->string('nama_dokter');
        $table->date('tanggal_kunjungan');
        $table->integer('nomor_antrian')->unique();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polis');
    }
};
