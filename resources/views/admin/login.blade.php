<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <!-- Section Background -->
    <section id="text-intro-section" class="parallax d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('assets/img/admin.png') }}'); height: 100vh; background-size: cover; background-position: center;">
        <div class="container text-center text-white">
            <h1 class="mb-4">Selamat Datang Admin</h1>
            <div class="form-container bg-dark p-4 rounded shadow">
                <!-- Login Form -->
                <form method="POST" action="{{ route('admin.postLogin') }}">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="d-flex justify-content-between">
        <a href="/" class="btn btn-outline-light">Exit</a>
        <button type="submit" class="btn btn-light">Login</button>
    </div>
    </form>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="custom-footer text-center py-4 bg-dark text-white">
        <p>&copy; 2024 HealthyCare. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
