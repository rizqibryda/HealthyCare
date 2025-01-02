<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter - HealthyCare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/dokter.css') }}">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        #text-intro-section {
            background-image: url('{{ asset("assets/img/dokter2.png") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .caption h1, .caption h2 {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .form-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }
        .form-container input {
            border-radius: 5px;
        }
        .form-container .btn-light {
            border-radius: 20px;
            padding: 10px 20px;
        }
        footer.custom-footer {
            background-color: #343a40;
            color: #fff;
        }
        footer.custom-footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Intro Section -->
    <section id="text-intro-section">
        <div class="container">
            <div class="caption">
                <h1>Selamat Datang,</h1>
                <h2>Dokter</h2>
                <div class="form-container mt-4">
                <form method="POST" action="{{ route('dokter.beranda') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label text-white">Username:</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white">Password:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-light">
                        <a href="/index.html" style="color: #000; text-decoration: none;">Keluar</a>
                    </button>
                    <button type="submit" class="btn btn-light">Masuk</button>
                </div>
            </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="custom-footer text-center py-4">
        <p>&copy; 2024 HealthyCare. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
