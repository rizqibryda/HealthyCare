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
    Schema::table('dokter', function (Blueprint $table) {
        $table->dropColumn('id_dokter'); // Hapus kolom lama
    });

    Schema::table('dokter', function (Blueprint $table) {
        $table->id('id_dokter')->first(); // Tambahkan kolom auto increment
    });
}

public function down()
{
    Schema::table('dokter', function (Blueprint $table) {
        $table->dropColumn('id_dokter'); // Hapus auto increment jika rollback
        $table->string('id_dokter')->first(); // Tambahkan kolom lama tanpa auto increment
    });
}
};
