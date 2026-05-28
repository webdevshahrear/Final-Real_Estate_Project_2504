<?php

use App\Http\Controllers\Frontend\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PropertyController::class, 'index'])->name('index');
Route::get('/{id}', [PropertyController::class, 'show'])->name('show');