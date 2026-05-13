<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LANDING CONTROLLERS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\ArtikelController;
use App\Http\Controllers\Landing\KategoriController;
use App\Http\Controllers\Landing\KontakController;
use App\Http\Controllers\Landing\TentangController;

/*
|--------------------------------------------------------------------------
| AUTH CONTROLLERS
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\LoginAnggotaController;
use App\Http\Controllers\Auth\RegisterAnggotaController;

/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index']);

/*
|--------------------------------------------------------------------------
| ARTIKEL
|--------------------------------------------------------------------------
*/
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{slug}', [ArtikelController::class, 'show']);

/*
|--------------------------------------------------------------------------
| KATEGORI
|--------------------------------------------------------------------------
*/
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/{id}', [KategoriController::class, 'show']);

/*
|--------------------------------------------------------------------------
| KONTAK
|--------------------------------------------------------------------------
*/
Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kontak', [KontakController::class, 'kirim']);

/*
|--------------------------------------------------------------------------
| TENTANG
|--------------------------------------------------------------------------
*/
Route::get('/tentang', [TentangController::class, 'index']);

/*
|--------------------------------------------------------------------------
| LOGIN USER
|--------------------------------------------------------------------------
*/
Route::get('/login-user', [UserLoginController::class, 'index'])
    ->name('login.user');

Route::post('/login-user/proses', [UserLoginController::class, 'proses'])
    ->name('login-user.proses');

/*
|--------------------------------------------------------------------------
| LOGIN ANGGOTA
|--------------------------------------------------------------------------
*/
Route::get('/login-anggota', [LoginAnggotaController::class, 'index'])
    ->name('login-anggota');

Route::post('/login-anggota', [LoginAnggotaController::class, 'login'])
    ->name('login-anggota.proses');

/*
|--------------------------------------------------------------------------
| REGISTER ANGGOTA
|--------------------------------------------------------------------------
*/
Route::get('/register-anggota', [RegisterAnggotaController::class, 'index'])
    ->name('register-anggota');

Route::post('/register-anggota', [RegisterAnggotaController::class, 'register'])
    ->name('register-anggota.proses');

/*
|--------------------------------------------------------------------------
| DASHBOARD USER
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('user.dashboard.index');
})->name('dashboard');
use App\Http\Controllers\Auth\UserLoginController;
