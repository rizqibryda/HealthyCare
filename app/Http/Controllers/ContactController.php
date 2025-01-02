<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        // Kirim email menggunakan Mail facade
        Mail::to($validatedData['email'])->send(
            new ContactMail(
                $validatedData['email'], 
                $validatedData['message']
            )
        );
    
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}