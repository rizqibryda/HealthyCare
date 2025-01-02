<?php

namespace App\Http\Controllers;

use App\Models\Clinic;

class ClinicController extends Controller
{
    public function index()
    {
        $clinics = Clinic::all();  // Mengambil semua data klinik
        return view('clinics.index', compact('clinics'));  // Mengirim data klinik ke view
    }
    public function show($id)
    {
        $clinic = Clinic::with('doctors.schedules')->find($id);  // Mengambil data klinik dan dokter yang terkait
        if (!$clinic) {
            return response()->json(['message' => 'Clinic not found'], 404);
        }
        return response()->json($clinic);
    }


}

