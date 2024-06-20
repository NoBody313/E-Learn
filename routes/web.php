<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Guru\DashboardController as GuruDashboardController;
use App\Http\Controllers\Siswa\DashboardController as SiswaDashboardController;

Route::redirect('/', 'login');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.check');

Route::middleware(['auth:users'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/kelola-pengguna', [AdminDashboardController::class, 'kelolaPengguna'])->name('admin.kelola.pengguna');
    });

    Route::prefix('guru')->group(function () {
        Route::get('/dashboard', [GuruDashboardController::class, 'index'])->name('guru.dashboard');
        Route::get('/kelola-pelajaran', [GuruDashboardController::class, 'kelolaPelajaran'])->name('guru.kelola.pelajaran');
        Route::get('/kelola-tugas', [GuruDashboardController::class, 'kelolaTugas'])->name('guru.kelola.tugas');
        Route::get('/kelola-nilai', [GuruDashboardController::class, 'kelolaNilai'])->name('guru.kelola.nilai');
    });

    Route::prefix('siswa')->group(function () {
        Route::get('/dashboard', [SiswaDashboardController::class, 'index'])->name('siswa.dashboard');
        Route::get('/daftar-peajaran', [SiswaDashboardController::class, 'daftarPelajaran'])->name('siswa.daftar.pelajaran');
        Route::get('/daftar-nilai', [SiswaDashboardController::class, 'daftarNilai'])->name('siswa.daftar.nilai');
        Route::get('/profil', [SiswaDashboardController::class, 'profil'])->name('siswa.profil');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
