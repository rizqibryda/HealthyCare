<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admin';
    protected $guarded = [];
    protected $fillable = [
        'username',
        'password',
        'role',
    ];
    
    protected $hidden = [
        'password',
    ];
    public $timestamps = false; // Menonaktifkan timestamps

}
