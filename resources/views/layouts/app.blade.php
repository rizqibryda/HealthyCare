<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HealthyCare')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        header.custom-header {
            background-color: #800000;
            color: #fff;
        }
        .title-underline {
            display: inline-block;
            position: relative;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .title-underline::after {
            content: "";
            position: absolute;
            left: 0px;
            bottom: -20px;
            width: 100%;
            height: 2px;
            background-color: #800000;
        }
    </style>
</head>
<body>
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
                        <li class="nav-item"><a class="btn btn-danger" href="{{ url('masuk') }}">Masuk</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <br>
    <br>
    <footer class="custom-footer text-center py-4">
        <p>&copy; 2024 HealthyCare. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
