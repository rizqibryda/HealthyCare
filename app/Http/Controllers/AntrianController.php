<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard; // Gunakan model Dashboard yang sudah ada

class AntrianController extends Controller
{
    public function index()
    {
        // Ambil data antrian pertama yang belum dipanggil
        $antrian = Dashboard::orderBy('no_antrian', 'asc')->first();

        return view('dokter.antrian', compact('antrian'));
    }

    public function process(Request $request)
    {
        if ($request->method() !== 'POST') {
            return redirect()->route('dokter.antrian')->withErrors('Metode tidak valid.');
        }
    
        // Logika untuk memproses antrian
        $antrian = Dashboard::orderBy('no_antrian', 'asc')->first();
    
        if ($antrian) {
            $antrian->delete();
        }
    
        return redirect()->route('dokter.hasilPeriksa')->with('success', 'Antrian berhasil dipanggil.');
    }
    
}
