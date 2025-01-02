<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function index()
    {
        return view('masuk');  // Pastikan Anda memiliki file masuk.blade.php
    }
}
