<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HargaController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/filter-harga', [HargaController::class, 'filter']);
