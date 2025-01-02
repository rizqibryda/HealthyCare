<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                                <li><a class="dropdown-item" href="{{ route('jadwalDokter') }}">Jadwal Dokter</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="btn btn-danger" href="{{ url('masuk') }}">Masuk</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

  <section id="text-intro-section" style="background-image: url('{{ asset('assets/img/bg-healthycare.png') }}');">
    <div class="container">
      <div class="caption">
        <h1>Selamat Datang di HealthyCare</h1>
        <h2>Your Health, Our Priority</h2>
      </div>
    </div>
  </section>

  <section id="about" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 display-4 fw-bold text-primary">Tentang Kami</h2>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="lead text-center mb-4">Klinik HealthyCare hadir untuk memberikan layanan kesehatan berkualitas tinggi dengan sentuhan personal. Kami percaya bahwa kesehatan adalah aset berharga, dan kami berkomitmen untuk mendukung Anda dan keluarga dalam menjaga kesehatan secara menyeluruh.</p>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 border-0 bg-white shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-user-md fa-3x mb-3 text-primary"></i>
                                <h3 class="card-title fw-bold">Poli Umum</h3>
                                <p class="card-text">Pemeriksaan kesehatan umum, diagnosis, pengobatan, dan saran kesehatan dari dokter berpengalaman untuk berbagai keluhan dan pemeriksaan rutin. Layanan tes kesehatan, pemeriksaan tekanan darah, penanganan infeksi, dan pengobatan penyakit akut maupun kronis tersedia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 bg-white shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-tooth fa-3x mb-3 text-info"></i>
                                <h3 class="card-title fw-bold">Poli Gigi</h3>
                                <p class="card-text">Perawatan gigi dan mulut terbaik dengan peralatan canggih. Meliputi pemeriksaan rutin, pembersihan, perawatan gigi berlubang, pencabutan, pemasangan gigi palsu, dan prosedur estetika seperti pemutihan gigi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 border-0 bg-white shadow-sm">
                            <div class="card-body text-center">
                                <i class="fas fa-baby fa-3x mb-3 text-success"></i>
                                <h3 class="card-title fw-bold">Poli Ibu & Anak</h3>
                                <p class="card-text">Perhatian khusus untuk kesehatan ibu hamil, ibu menyusui, bayi, dan anak-anak. Layanan meliputi pemeriksaan kehamilan, konsultasi laktasi, imunisasi, dan pemantauan tumbuh kembang.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-center mt-5 lead">Kami mengutamakan pengalaman medis yang nyaman, aman, dan penuh perhatian. Kesehatan Anda dan keluarga adalah prioritas utama kami, dan kami hadir untuk memberikan layanan yang terbaik.</p>
            </div>
        </div>
    </div>
</section>

  <!-- Layanan Section -->
  <section id="service" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Layanan</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                        <div class="card h-100 border-0 bg-white shadow-sm">
                        <img src="{{ asset('assets/img/foto1.jpg') }}" class="card-img-top" alt="Ekokardiografi">
                        <div class="card-body">
                            <h5 class="card-title">Ekokardiografi</h5>
                            <p class="card-text">Ekokardiografi adalah pemeriksaan menggunakan gelombang ultrasound untuk melihat gambaran struktur.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/foto2.jpeg') }}" class="card-img-top" alt="Elektromiografi (EMG)">
                        <div class="card-body">
                            <h5 class="card-title">Elektromiografi (EMG)</h5>
                            <p class="card-text">Elektromiografi (EMG) adalah tes untuk memeriksa kondisi otot dan sel-sel saraf yang mengontrolnya (neuron motorik).</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/foto3.jpeg') }}" class="card-img-top" alt="EEG">
                        <div class="card-body">
                            <h5 class="card-title">EEG</h5>
                            <p class="card-text">Electroencephalography (EEG) berfungsi untuk mempelajari gambar dari rekaman aktivitas listrik di otak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas Section -->
    <section id="fasilitas" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Fasilitas</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                <div class="card h-100">
                        <img src="{{ asset('assets/img/fotofasilitas1.jpeg') }}" class="card-img-top" alt="Fasilitas ICU">
                        <div class="card-body">
                            <h5 class="card-title">ICU / ICCU / HCU</h5>
                            <p class="card-text">Dilengkapi alat modern dan tenaga medis ahli untuk penanganan kasus pasien kritikal dan perawatan intensif.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/fotofasilitas2.jpeg') }}" class="card-img-top" alt="Fasilitas Farmasi">
                        <div class="card-body">
                            <h5 class="card-title">Farmasi</h5>
                            <p class="card-text">HealthyCare memiliki Fasilitas Unit Farmasi yang tersedia selama 24 Jam.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/img/fotofasilitas3.jpg') }}" class="card-img-top" alt="Fasilitas Kamar Bersalin">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Bersalin</h5>
                            <p class="card-text">HealthyCare menghadirkan layanan yang nyaman tentunya untuk Ibu Melahirkan, dimana kami memiliki fasilitas bed bersalin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  <section id="contact" ">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="mb-4">Hubungi Kami</h3>
        <p>Untuk informasi lebih lanjut, Anda bisa menghubungi kami melalui:</p>
        <ul class="list-unstyled">
          <li><b>Telepon:</b> +62 812 3456 7890</li>
          <li><b>Email:</b> info@healthycareclinic.com</li>
          <li><b>Alamat:</b> Jl. Sehat No. 123, Sukapura, Bandung, Jawa Barat, Indonesia</li>
        </ul>
      </div>
      <div class="col-md-6">
        <h3 class="mb-4">Kirim Pesan</h3>
        <form action="{{ route('contact.send') }}" method="POST">
          @csrf
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Masukkan Subjek" required>
          </div>
          <div class="mb-3">
            <textarea name="message" class="form-control" placeholder="Pesan Anda" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <h3 class="text-center mb-3">Lokasi Kami</h3>
        <div class="map-container" style="padding: 15px; background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
          <div class="ratio ratio-16x9">
            <iframe 
              src="https://maps.google.com/maps?q=-6.973064,107.630347&t=&z=13&ie=UTF8&iwloc=&output=embed" 
              allowfullscreen="" 
              loading="lazy" 
              style="border: 0; border-radius: 10px;">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
  <footer class="custom-footer text-center py-4">
    <p>&copy; 2024 HealthyCare. All rights reserved.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
