<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimulasiController;

Route::get('/login', [SimulasiController::class, 'showLoginForm']);
Route::post('/login', [SimulasiController::class, 'login']);
Route::get('/pesan', [SimulasiController::class, 'showPesanForm']);
Route::post('/pesan', [SimulasiController::class, 'prosesPesanan']);
