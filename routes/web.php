<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PoliController;

use App\Http\Controllers\loginAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\dokterAdminController;
use App\Http\Controllers\NorekamController;
use App\Http\Controllers\CekNorekamController;
use App\Http\Controllers\CetakResepController;

use App\Http\Controllers\DokterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\HasilPeriksaController;

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ClinicController;

// Route untuk halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/masuk', [HomeController::class, 'masuk'])->name('masuk');

// Route untuk dashboard admin (dilindungi middleware)
Route::middleware(['auth:admin'])->group(function () {
     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
     Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
     Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
     Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
     Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

// Route untuk dokter
// Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
// Route::get('/dokter/create', [DokterController::class, 'create'])->name('dokter.create');
// Route::post('/dokter/login', [DokterController::class, 'login'])->name('dokter.login');
// Route::post('/logout', [DokterController::class, 'logout'])->name('dokter.logout');

// Route::middleware(['auth:dokter'])->group(function () {
//     Route::get('/dokter/dashboard', [DokterController::class, 'dashboard'])->name('dokter.dashboard');
// });

Route::get('/daftar', [DaftarController::class, 'index']);
Route::get('/daftar/pasien/baru', [DaftarController::class, 'pasienBaru']);
Route::post('/daftar/pasien/baru', [DaftarController::class, 'storePasienBaru'])->name('daftar.storePasienBaru'); // Route POST
Route::get('/antrian', [DaftarController::class, 'antrian']);
Route::get('/daftar/pasien/lama', [DaftarController::class, 'pasienLama']);
Route::post('/daftar/pasien/lama', [DaftarController::class, 'pasienLamaStore'])->name('daftar.pasienLamaStore');;
Route::get('/daftar/poli', [DaftarController::class, 'poli']); // bisa ke poli
Route::post('/daftar/poli', [DaftarController::class, 'poliStore']); // bisa menyimpan data poli

Route::get('/daftar/{pasien}', [PoliController::class, 'selectPoli'])->name('poli.select'); // Route untuk menampilkan form
Route::post('/daftar/poli', [PoliController::class, 'store'])->name('poli.store');
Route::get('/daftar/nomorAntrian/{id}', [PoliController::class, 'nomorAntrian'])->name('daftar.nomorAntrian');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Route untuk admin
Route::get('/admin/beranda', [AdminController::class, 'beranda'])->name('admin.beranda');
Route::get('/admin/inputDokter', [dokterAdminController::class, 'index'])->name('dokterAdmin.index');
Route::get('/admin/inputDokter/create', [dokterAdminController::class, 'create'])->name('dokterAdmin.create');
Route::post('/admin/inputDokter', [dokterAdminController::class, 'store'])->name('dokterAdmin.store');
Route::get('/admin/inputDokter/{id}/edit', [dokterAdminController::class, 'edit'])->name('dokterAdmin.edit');
Route::put('/admin/inputDokter/{id}', [dokterAdminController::class, 'update'])->name('dokterAdmin.update');
Route::delete('/admin/inputDokter/{id}', [dokterAdminController::class, 'destroy'])->name('dokterAdmin.destroy');
Route::get('/admin/norekam', [NorekamController::class, 'index'])->name('admin.norekam');
Route::get('/admin/editNorekam/{id}/edit', [NorekamController::class, 'edit'])->name('admin.editNorekam');
Route::put('/admin/editNorekam/{id}', [NorekamController::class, 'update'])->name('admin.updateNorekam');
Route::delete('/admin/editNorekam/{id}', [NorekamController::class, 'destroy'])->name('admin.deleteNorekam');
Route::get('/admin/cek-rekam', [CekNorekamController::class, 'index'])->name('admin.cekRekam'); 
Route::get('/admin/cek-rekam/search', [CekNorekamController::class, 'search'])->name('admin.cekRekamSearch'); 

Route::get('/admin/cetakResep', [CetakResepController::class, 'cetakResep'])->name('admin.cetakResep');
Route::post('admin/cetakResep/cari', action: [CetakResepController::class, 'cari'])->name('admin.cariResep');
Route::get('/admin', [loginAdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin', [loginAdminController::class, 'login']);

// Rute untuk login
Route::get('/dokter', [DokterController::class, 'showLogin'])->name('dokter.login');
Route::post('/dokter', [DokterController::class, 'login'])->name('dokter.login.submit');
Route::get('/dokter/dashboard', [DashboardController::class, 'index'])->name('dokter.dashboard');
Route::get('/dokter/logout', [DokterController::class, 'logout'])->name('dokter.logout');

// Route untuk antrian
Route::get('/antrian', [AntrianController::class, 'index'])->name('dokter.antrian');
Route::post('/antrian/process', [AntrianController::class, 'process'])->name('dokter.hasilPeriksa');

// Route untuk hasil periksa
Route::get('/hasil-periksa', [HasilPeriksaController::class, 'create'])->name('dokter.hasilPeriksa.create');
Route::post('/hasil-periksa', [HasilPeriksaController::class, 'store'])->name('dokter.hasilPeriksa.store');

// Route untuk doctors dan clinics
Route::get('/jadwalDokter', action: [DoctorController::class, 'jadwalDokter'])->name('jadwalDokter');
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/dokter/{id}', [DoctorController::class, 'show'])->name('doctors.show');
Route::get('/clinics', [ClinicController::class, 'index'])->name('clinics.index');
Route::get('/klinik/{id}', [ClinicController::class, 'show'])->name('clinic.show');