<?php

namespace App\Http\Controllers;

use App\Models\HasilPeriksa;
use Illuminate\Http\Request;

class HasilPeriksaController extends Controller
{
    public function create()
    {
        return view('dokter.hasilPeriksa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien' => 'required|string|max:255',
            'jenis_rawat' => 'required|string',
            'tanggal_kunjungan' => 'required|date',
            'diagnosa' => 'required|string|max:255',
            'resep' => 'required|string',
        ]);

        HasilPeriksa::create($request->all());

        return redirect()->route('dokter.hasilPeriksa.store')->with('success', 'Hasil periksa berhasil disimpan.');
    }
}
