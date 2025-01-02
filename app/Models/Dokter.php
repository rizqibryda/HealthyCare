<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';

    protected $fillable = [
        'username',
        'password',
    ];

    // Tidak perlu lagi menyembunyikan password karena kita tidak meng-hashnya
    // protected $hidden = [
    //     'password',
    // ];
}
