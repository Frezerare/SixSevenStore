<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| FASE 1 - STRUKTURAL
|--------------------------------------------------------------------------
| Semua route di bawah ini masih memakai closure/view kosong supaya
| setiap halaman langsung bisa dites di browser. Pada Fase 3, ganti
| closure dengan pemanggilan Controller sesuai kebutuhan fungsional.
*/

// ---------- Beranda ----------
Route::view('/', 'home')->name('beranda');

// ---------- Autentikasi ----------
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/register', fn () => view('auth.register'))->name('register');
// Route::post('/login', ...)->name('login.attempt');       // Fase 3
// Route::post('/register', ...)->name('register.store');   // Fase 3

// ---------- Pencarian ----------
Route::view('/pencarian', 'pencarian')->name('pencarian');

// ---------- Jasa Joki ----------
Route::prefix('jasa-joki')->name('jasa-joki.')->group(function () {
    Route::get('/', fn () => view('jasa-joki.index'))->name('index');
    Route::get('/{game}/layanan', fn ($game) => view('jasa-joki.layanan'))->name('layanan');
    Route::get('/layanan/{layanan}/detail-joki', fn ($layanan) => view('jasa-joki.detail-joki'))->name('detail-joki');
    Route::get('/detail-transaksi/{transaksi?}', fn ($transaksi = null) => view('jasa-joki.detail-transaksi'))->name('detail-transaksi');
});

// ---------- Cek Transaksi ----------
Route::prefix('transaksi')->name('transaksi.')->group(function () {
    Route::get('/cek', fn () => view('transaksi.cek'))->name('cek');
    Route::get('/{kode}', fn ($kode) => view('transaksi.detail'))->name('detail');
});

// ---------- Profil ----------
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', fn () => view('profil.index'))->name('index');
    Route::get('/edit', fn () => view('profil.edit'))->name('edit');
});

// ---------- Panel Admin ----------
Route::prefix('admin')->name('admin.')->group(function () {
    // Fase 3: tambahkan middleware ['auth', 'role:admin']
    Route::get('/dashboard', fn () => view('admin.dashboard'))->name('dashboard');
    Route::prefix('transaksi')->name('transaksi.')->group(function () {
        Route::get('/', fn () => view('admin.transaksi'))->name('index');
    });
});

// ---------- Panel Tim Joki ----------
Route::prefix('joki')->name('joki.')->group(function () {
    // Fase 3: tambahkan middleware ['auth', 'role:joki']
    Route::get('/dashboard', fn () => view('joki.dashboard'))->name('dashboard');
});
