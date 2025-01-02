@extends('layouts.app')
@section('title', 'Registrasi Pasien Lama')
@section('content')
<body>
      <main class="main=content vh-100" style="background-image: url('/daftar/Assets/img/daftar.png');">
      <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-4" style="background-color: #f8f9fa; border-radius: 15px;">
                <h1 class="title-underline text-center mb-5" style="font-size: 2.5rem; font-weight: 700; color: #9e1b32;">Pendaftaran Pasien Lama</h1>

                <!-- Menampilkan pesan error jika ada -->
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert" style="border-radius: 10px; padding: 15px; background-color: #f8d7da; color: #721c24;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Form Pendaftaran Pasien Lama -->
                <form action="{{ route('daftar.pasienLamaStore') }}" method="POST">
                    @csrf

                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="nama_pasien" class="form-label" style="font-weight: 500;">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required placeholder="Masukkan nama lengkap">
                    </div>

                    <!-- Nomor Kartu Identitas -->
                    <div class="mb-3">
                        <label for="kartu_identitas" class="form-label" style="font-weight: 500;">Nomor Kartu Identitas</label>
                        <input type="text" class="form-control" id="kartu_identitas" name="kartu_identitas" required placeholder="Masukkan nomor kartu identitas">
                    </div>

                    <!-- Nomor Rekam Medis -->
                    <div class="mb-3">
                        <label for="nomor_rekam_medis" class="form-label" style="font-weight: 500;">Nomor Rekam Medis</label>
                        <input type="text" class="form-control" id="nomor_rekam_medis" name="nomor_rekam_medis" required placeholder="Masukkan nomor rekam medis">
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill" style="font-weight: 600;">Daftar Pasien Lama</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</main>
</body>
</html>
@endsection