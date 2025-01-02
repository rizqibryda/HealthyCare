<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function jadwalDokter()
    {
    return view('jadwalDokter'); // Pastikan file 'jadwalDokter.blade.php' sudah ada
    }

    public function masuk()
    {
    return view('masuk'); // Pastikan file 'jadwalDokter.blade.php' sudah ada
    }
}
