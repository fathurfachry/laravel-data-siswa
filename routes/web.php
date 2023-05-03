<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\SiswaController;
use App\http\Controllers\AuthController;

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
    return view('welcome');
});

// {--ROUTE AUTH--}

//untuk menampilkan form login
Route::get('login', [AuthController::class, 'login']);
//menangani proses autentikasi user
Route::post('login', [AuthController::class, 'authenticate']);
//untuk menampilkan form register
// Route::get('register', [AuthController::class, 'register_form'])->name('register');
// //menangani proses registrasi user baru
// Route::post('register', [AuthController::class, 'register'])->name('register');

// {--ROUTE BIASA--}

Route::get('siswa', [SiswaController::class, 'index']);
Route::get('siswa/buat', [SiswaController::class, 'create']);
Route::post('siswa', [SiswaController::class, 'store']);
Route::delete('siswa/{id}', [SiswaController::class, 'destroy']);

//edit
Route::get('siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::patch('siswa/{id}', [SiswaController::class, 'update']);

//logout

Route::get('logout', [AuthController::class, 'logout']);





// Untuk Menghapus Blog //

// Route::resource('siswa', SiswaController::class