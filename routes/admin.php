<?php


use App\Http\Controllers\Backend\BuildingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UnitController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


// Building
Route::prefix('/building')->name('building.')->controller(BuildingController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});

// Units
Route::prefix('/units')->name('units.')->controller(UnitController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});
