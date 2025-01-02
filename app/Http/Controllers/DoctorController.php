<?php

// app/Http/Controllers/DoctorController.php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Clinic; // Jangan lupa untuk mengimpor model Clinic

class DoctorController extends Controller
{
    // Method untuk menampilkan daftar dokter
    public function jadwalDokter()
    {
        $doctors = Doctor::with('schedules')->get();  // Ambil semua dokter
        $clinics = Clinic::all();  // Ambil semua klinik (pastikan model Clinic ada)

        return view('jadwalDokter', compact('doctors', 'clinics'));  // Pass variabel $doctors dan $clinics ke view
    }

   // Menampilkan detail dokter beserta jadwalnya
   public function show($id)
   {
       $doctor = Doctor::with('schedules')->findOrFail($id);  // Menampilkan dokter beserta jadwalnya
       return response()->json($doctor);  // Mengembalikan data dokter dalam format JSON
   }

}


