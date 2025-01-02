<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use Session;

class DokterController extends Controller
{
    public function showLogin()
    {
        return view('dokter.loginDokter');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cari dokter berdasarkan username
        $dokter = Dokter::where('username', $request->username)->first();

        // Cek apakah username dan password cocok
        if ($dokter && $dokter->password == $request->password) {
            Session::put('dokter', ['username' => $dokter->username]);
            return redirect()->route('dokter.dashboard');
        }

        return back()->withErrors(['loginError' => 'Username atau Password salah']);
    }

    public function logout()
    {
        Session::forget('dokter');
        return redirect()->route('dokter.login');
    }


}
