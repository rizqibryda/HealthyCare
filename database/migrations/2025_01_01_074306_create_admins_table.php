<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id(); // Atau $table->increments('id'); untuk versi Laravel lebih lama
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role')->default('admin'); // Bisa diatur defaultnya
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};