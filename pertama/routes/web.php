<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/contact', [PageController::class, 'contact']);