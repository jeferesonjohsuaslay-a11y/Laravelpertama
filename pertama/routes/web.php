<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [PageController::class, 'home']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);