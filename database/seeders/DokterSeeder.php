<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DokterSeeder extends Seeder
{
    public function run()
    {
        Dokter::create([
            'nama_lengkap' => 'Dr. John Doe',
            'username' => 'drjohndoe',
            'password' => bcrypt('password123'),
            'poliklinik' => 'Umum', // Kolom poliklinik
            'alamat' => 'Jl. Sehat No. 1',
            'email' => 'johndoe@example.com',
            'foto' => 'default.png',
        ]);

        
        
    }
}