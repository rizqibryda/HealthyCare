@extends('layouts.app')
@section('title', 'Pendaftaran Pasien Baru')
@section('content')
<body>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-4" style="background-color: #f8f9fa; border-radius: 15px;">
                <h1 class="title-underline text-center mb-4" style="font-size: 2.5rem; font-weight: 700; color: #9e1b32;">Pendaftaran Pasien Baru</h1>

                <form action="{{ route('daftar.storePasienBaru') }}" method="POST">
                    @csrf

                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="nama_pasien" class="form-label" style="font-weight: 500;">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required placeholder="Masukkan nama lengkap">
                    </div>

                    <!-- Nomor Kartu Identitas -->
                    <div class="mb-3">
                        <label for="nomor_kartu_identitas" class="form-label" style="font-weight: 500;">Nomor Kartu Identitas</label>
                        <input type="text" class="form-control" id="nomor_kartu_identitas" name="nomor_kartu_identitas" required placeholder="Masukkan nomor kartu identitas">
                    </div>

                    <!-- Umur -->
                    <div class="mb-3">
                        <label for="umur" class="form-label" style="font-weight: 500;">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label" style="font-weight: 500;">Jenis Kelamin</label>
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="Pria">Laki-laki</option>
                            <option value="Wanita">Perempuan</option>
                        </select>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label" style="font-weight: 500;">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" max="{{ date('Y-m-d') }}">
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill" style="font-weight: 600;">Daftar Pasien Baru</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      </body>
      </html>
@endsection