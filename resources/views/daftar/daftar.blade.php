@extends('layouts.app')

@section('title', 'Pendaftaran Pasien')

@section('content')  
<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg" style="background-color: #9e1b32; color: white; padding: 50px; border-radius: 20px;">
                <h1 class="title-underline text-center mb-5" style="font-size: 2.5rem; font-weight: 700;">Pendaftaran Pasien</h1>

                <div class="row text-center">
                    <!-- Pasien Baru -->
                    <div class="col-md-6 mb-4">
                        <h3 style="font-weight: 500; font-size: 1.5rem;">Pasien Baru</h3>
                        <p style="font-size: 1rem;">Jika Anda pasien baru, silakan klik tombol di bawah untuk mendaftar.</p>
                        <br>
                        <a href="/daftar/pasien/baru" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">Daftar Pasien Baru</a>
                    </div>

                    <!-- Pasien Lama -->
                    <div class="col-md-6 mb-4">
                        <h3 style="font-weight: 500; font-size: 1.5rem;">Pasien Lama</h3>
                        <p style="font-size: 1rem;">Jika Anda sudah terdaftar, silakan klik tombol di bawah untuk mendaftar sebagai pasien lama.</p>
                        <a href="/daftar/pasien/lama" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">Daftar Pasien Lama</a>
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success mt-4" role="alert" style="border-radius: 10px; padding: 15px; background-color: #e0f9e0; color: #28a745;">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
    </div>
  </main>
</body>
</html>
@endsection
