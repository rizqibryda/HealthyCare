<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';

    protected $fillable = [
        'nama_pasien',
        'nomor_kartu_identitas',
        'umur',
        'jenis_kelamin',
        'tanggal_lahir',
    ];

    public function polis()
    {
        return $this->hasMany(Poli::class);
    }
}