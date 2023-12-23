<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route group untuk halaman yang dapat diakses oleh semua pengguna
Route::group([], function () {
    // Route untuk halaman login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    // Route untuk halaman register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

// Route group untuk halaman yang hanya dapat diakses oleh pengguna yang sudah login
Route::group(['middleware' => 'checklogin'], function () {
    // Route untuk halaman warga.index
    Route::get('/', [WargaController::class, 'index'])->name('warga.index');
    Route::get('/warga', [WargaController::class, 'index']);

    // Route untuk halaman warga.tambah
    Route::get('/warga/tambah', [WargaController::class, 'create'])->name('warga.tambah');
    Route::post('/warga/store', [WargaController::class, 'store']);

    // Route untuk halaman warga.ubah
    Route::get('/warga/{id}/ubah', [WargaController::class, 'ubah'])->name('warga.ubah');
    Route::put('/warga/{id}', [WargaController::class, 'update']);

    // Route untuk halaman warga.destroy
    Route::delete('/warga/{id}', [WargaController::class, 'destroy'])->name('warga.destroy');

    // Route untuk halaman warga.hasil
    Route::get('/warga/hasil', [WargaController::class, 'showResult'])->name('warga.hasil');

    // Route untuk halaman warga.cari
    Route::get('/warga/cari', [WargaController::class, 'cari'])->name('warga.cari');

    // Route untuk halaman warga.urut
    Route::get('/warga/urut', [WargaController::class, 'urut'])->name('warga.urut');

    // Route untuk halaman logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
