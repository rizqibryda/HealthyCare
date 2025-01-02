<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PasienLama; // Import model yang benar

class PasienLamaSeeder extends Seeder
{
    public function run(): void
    {
        PasienLama::create([
            'nama_pasien' => 'Rizqi',
            'kartu_identitas' => '123',
            'nomer_rekam_medis' => '132',
        ]);
    }
}