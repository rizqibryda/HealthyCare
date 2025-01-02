<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poli;

class PoliController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'nomor_rekam_medis' => 'required|string|max:255',
            'nama_klinik' => 'required|string',
            'nama_dokter' => 'required|string',
            'tanggal_kunjungan' => 'required|date',
        ]);

        // Generate nomor antrian
        $nomorAntrian = Poli::max('nomor_antrian') + 1;

        $poli = Poli::create(array_merge($validatedData, ['nomor_antrian' => $nomorAntrian]));

        return redirect()->route('daftar.nomorAntrian', ['id' => $poli->id]);
    }

    public function nomorAntrian($id)
    {
        $poli = Poli::findOrFail($id);
        return view('daftar.nomorAntrian', compact('poli'));
    }

}
