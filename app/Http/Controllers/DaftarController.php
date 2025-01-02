<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\PasienLama;
use App\Models\Poli;


use Carbon\Carbon;
class DaftarController extends Controller
{
    //
    function index()
    {
        return view('daftar.daftar');
     }
     function pasienBaru()
     {
        return view('daftar.daftarBaru');
     }

     public function storePasienBaru(Request $request) // Atau nama method yang sesuai
     {  
        $datas = $request->all();
        $datas = Pasien::create(attributes: $datas);
        return view('daftar.poli');
     }

     function pasienLama(){
        return view('daftar.pasienLama');   
     }

     function pasienLamaStore(Request $request)
     {
        $datas = $request->all();
        $datas = PasienLama::create(attributes: $datas);
        return view('daftar.poli');
      }

      public function poli()
    {
        return view('daftar.poli');
    }

    public function poliStore(Request $request)
    {
      $datas = $request->all();
      $datas = Poli::create($datas);
      return redirect()->route('daftar.poli')->with('success', 'Pendaftaran Berhasil');
    }

     function antrian()
     {
        return view('daftar.nomerAntrian');
     }
}