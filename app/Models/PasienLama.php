<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasienLama extends Model
{
    //
   public $fillable = ['nama_pasien','kartu_identitas','nomor_rekam_medis'];
    protected $table = 'pasien_lama';
}
