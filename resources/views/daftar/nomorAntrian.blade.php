@extends('layouts.app')
@section('title', 'Nomor Antrian')
@section('content')
<body>
      <main class="main=content vh-100" style="background-image: url('/daftar/Assets/img/daftar.png');"
        <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-5" style="background-color: #f8f9fa; border-radius: 15px;">
                <h1 class="title-underline text-center mb-4" style="font-size: 2.5rem; font-weight: 700; color: #9e1b32;">Nomor Antrean</h1>

                <!-- Nomor Antrean -->
                <div class="text-center mb-4">
                    <h4 style="font-weight: 500; font-size: 1.5rem;">Nomor Antrean Anda: 
                        <span style="font-weight: 700; color: #9e1b32; font-size: 2rem;">{{ $poli->nomor_antrian }}</span>
                    </h4>
                    <p style="font-size: 1rem; color: #6c757d;">Terima kasih telah mendaftar sebagai pasien di HealthyCare. Anda dapat mengikuti nomor antrean untuk melanjutkan proses pengobatan.</p>
                </div>

                <!-- Tombol kembali ke halaman utama -->
                <div class="text-center">
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-5 py-3 rounded-pill" style="font-weight: 600;">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection