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
    Schema::create('pasien', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pasien');
        $table->integer('nomor_kartu_identitas')->unique();
        $table->integer('umur');
        $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
        $table->date('tanggal_lahir');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
