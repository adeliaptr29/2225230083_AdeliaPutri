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
Route::get('/', function () {
    return view('warga.index', [
        "title" => "Warga",
        "active" => 'warga'
    ]);
});

Route::get('/warga', function () {
    return view('warga.index', [
        "title" => "Warga",
        "active" => 'warga'
    ]);
});

Route::get('/warga/tambah', function () {
    return view('warga.tambah', [
        "title" => "Tambah",
        "active" => 'tambah'
    ]);
});


Route::get('/register', function () {
    return view('register.index', [
        "title" => "Register",
        "active" => 'register'
    ]);
});

Route::get('/login', function () {
    return view('login.index',  [
        "title" => "Login",
        "active" => 'login'
    ]);
});

Route::get('/logout', function () {
    return view('logout',  [
        "title" => "Logout",
        "active" => 'logout'
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [WargaController::class, 'index']);
Route::get('/warga', [WargaController::class, 'index']);
Route::get('/warga/tambah', [WargaController::class, 'create']);
Route::post('/warga/store', [WargaController::class, 'store']);

Route::get('/warga/{id}/ubah', [WargaController::class, 'ubah']);
Route::put('/warga/{id}', [WargaController::class, 'update']);
Route::delete('/warga/{id}', [WargaController::class, 'hapus']);
