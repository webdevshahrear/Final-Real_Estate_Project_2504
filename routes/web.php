<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('admin.dashboard');

    // Building
    Route::get('/building', [App\Http\Controllers\Backend\BuildingController::class, 'index'])->name('admin.building.index');
    Route::get('/building/create', [App\Http\Controllers\Backend\BuildingController::class, 'create'])->name('admin.building.create');
    Route::post('/building/store', [App\Http\Controllers\Backend\BuildingController::class, 'store'])->name('admin.building.store');
    Route::delete('/building/delete/{id}', [App\Http\Controllers\Backend\BuildingController::class, 'delete'])->name('admin.building.delete');

    // Units
    Route::get('/units', [App\Http\Controllers\Backend\UnitController::class, 'index'])->name('admin.units.index');
    Route::get('/units/create', [App\Http\Controllers\Backend\UnitController::class, 'create'])->name('admin.units.create');
    Route::post('/units/store', [App\Http\Controllers\Backend\UnitController::class, 'store'])->name('admin.units.store');
    Route::get('/units/edit/{id}', [App\Http\Controllers\Backend\UnitController::class, 'edit'])->name('admin.units.edit');
    Route::put('/units/update/{id}', [App\Http\Controllers\Backend\UnitController::class, 'update'])->name('admin.units.update');
    Route::delete('/units/delete/{id}', [App\Http\Controllers\Backend\UnitController::class, 'delete'])->name('admin.units.delete');

});

