<?php

use App\Http\Controllers\Backend\BuildingController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


// Building
Route::get('/building', [BuildingController::class, 'index'])->name('building.index');
