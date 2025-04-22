<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimulasiController;

Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login']); // jika sudah implementasi login
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/login', [SimulasiController::class, 'showLoginForm']);
Route::post('/login', [SimulasiController::class, 'login']);
Route::get('/pesan', [SimulasiController::class, 'showPesanForm']);
Route::post('/pesan', [SimulasiController::class, 'prosesPesanan']);
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/pesanan/create', [PesananController::class, 'create']);
Route::post('/pesanan', [PesananController::class, 'store']);
Route::get('/pesanan/{id}/edit', [PesananController::class, 'edit']);
Route::put('/pesanan/{id}', [PesananController::class, 'update']);
Route::get('/pesanan/create', [PesananController::class, 'create']);
Route::post('/pesanan', [PesananController::class, 'store']);
Route::get('/pesanan/{id}/edit', [PesananController::class, 'edit']);
Route::put('/pesanan/{id}', [PesananController::class, 'update']);
