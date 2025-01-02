<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi Poli & Dokter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
        .card {
            background-color: #f8f9fa;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .title-underline {
            text-decoration: underline;
            color: #9e1b32;
        }

        .btn-primary {
            background-color: #9e1b32;
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #8c1c29;
            color: white;
        }

        .form-label {
            font-weight: 500;
        }

        .form-select, .form-control {
            border-radius: 10px;
        }

        /* Responsiveness */
        @media (max-width: 767px) {
            .card {
                padding: 30px;
            }

            .btn-lg {
                font-size: 1.1rem;
                padding: 12px 25px;
            }

            .container {
                margin-top: 40px;
            }
        }
    </style>
</head>
<body>
<header class="header-main sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="/">HealthyCare</a>
    </div>
  </nav>
</header>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-5" style="background-color: #f8f9fa; border-radius: 15px;">
                <h1 class="title text-center mb-5" style="font-size: 2.5rem; font-weight: 700; color: #9e1b32;">Pilih Poli dan Dokter</h1>

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
    <h2>Registrasi Pemilihan Klinik & Dokter</h2>
    <form action="{{ route('poli.store') }}" method="POST">
      @csrf

      <!-- Nama Lengkap -->
      <div class="mb-3">
        <label for="nama_pasien" class="form-label" style="font-weight: 500;">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required placeholder="Masukkan nama lengkap">
      </div>

      <!-- Nomor Rekam Medis -->
      <div class="mb-4">
          <label for="nomor_rekam_medis" class="form-label" style="font-weight: 500;">Nomor Rekam Medis</label>
          <input type="text" class="form-control" id="nomorRekamMedis" name="nomor_rekam_medis" value="{{ old('nomorRekamMedis') }}" required placeholder="Masukkan nomor rekam medis">
      </div>

      <div class="mb-4">
          <label for="nama_klinik" class="form-label" style="font-weight: 500;">Pilih Poli</label>
          <select class="form-select" id="nama_klinik" name="nama_klinik" required>
          <option value="" disabled selected>Pilih Klinik</option>
          <option value="Klinik Umum">Klinik Umum</option>
          <option value="Klinik Gigi">Klinik Gigi</option>
          <option value="Klinik Ibu dan Anak">Klinik Ibu dan Anak</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="doctor" class="form-label" style="font-weight: 500;">Pilih Dokter</label>
        <select name="nama_dokter" class="form-select" id="namaDokter" required>
          <option value="" disabled selected>Pilih Dokter</option>
          <option value="Andi Setiawan">Andi Setiawan</option>
          <option value="Budi Santoso">Budi Santoso</option>
          <option value="Dwi Lestari">Dwi Lestari</option>
          <option value="Fitriani Rahmawati">Fitriani Rahmawati</option>
          <option value="Guntur Saputra">Guntur Saputra</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="tanggalKunjungan" class="form-label">Tanggal Kunjungan</label>
        <input type="date" name="tanggal_kunjungan" class="form-control" id="tanggalKunjungan" required>
      </div>

      <!-- Tombol Submit -->
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary btn-lg px-5 py-3 rounded-pill" style="font-weight: 600;">Simpan Pilihan</button>
      </div>
    </form>
</div>
</div>
</div>
</div>
</main>
</body>
</html>
