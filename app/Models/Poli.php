<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_pasien',
        'nomor_rekam_medis',
        'nama_klinik',
        'nama_dokter',
        'tanggal_kunjungan',
        'nomor_antrian',
    ];
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'poli_id'); // Sesuaikan dengan nama model Poliklinik Anda
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
