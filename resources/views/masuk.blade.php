<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - HealthyCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <!-- Header -->
    <header class="header-main sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/LOGOKU.png') }}" alt="HealthyCare Logo" width="50" height="50">
                    <span class="ms-2">HealthyCare</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#service">Fasilitas & Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#contact">Kontak</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lainnya</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ url('/daftar') }}">Daftar</a></li>
                                <li><a class="dropdown-item" href="{{ url('/jadwalDokter') }}">Jadwal Dokter</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="card shadow-lg p-5 text-center">
                <h1 class="mb-3">Selamat Datang!</h1>
                <p class="mb-4">Silakan masuk ke akun Anda</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ url('dokter') }}" class="btn btn-danger btn-lg">Dokter</a>
                    <a href="{{ route('admin.login') }}" class="btn btn-secondary btn-lg">Admin</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="custom-footer py-3 text-center">
        <p>&copy; 2024 HealthyCare. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
