<?php

use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::view('/about', 'frontend.about')->name('about');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/services', 'frontend.services')->name('services');
Route::view('/flats-for-sale', 'frontend.flats-for-sale')->name('flats-for-sale');

Route::get('/flats-for-rent', [RentController::class,'showFlatsForRent'])->name('flats-for-rent');


Route::view('/commercial-spaces', 'frontend.commercial-spaces')->name('commercial-spaces');
Route::view('/property-detail', 'frontend.property-detail')->name('property-detail');
Route::view('/property-detail-commercial', 'frontend.property-detail-commercial')->name('property-detail-commercial');
Route::view('/property-detail-rent', 'frontend.property-detail-rent')->name('property-detail-rent');
Route::view('/faq', 'frontend.faq')->name('faq');
Route::view('/privacy-policy', 'frontend.privacy-policy')->name('privacy-policy');
Route::view('/terms-conditions', 'frontend.terms-conditions')->name('terms-conditions');
Route::view('/store', 'frontend.store')->name('store');
Route::view('/listings', 'frontend.listings')->name('listings');
Route::view('/store', 'frontend.store')->name('store');
Route::view('/welcome', 'frontend.welcome')->name('welcome');

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

