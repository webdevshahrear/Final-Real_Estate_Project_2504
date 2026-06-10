<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {

    // Customers
    Route::get('/customers', [App\Http\Controllers\Backend\CustomerController::class, 'index'])->name('admin.customers.index');
    Route::get('/customers/create', [App\Http\Controllers\Backend\CustomerController::class, 'create'])->name('admin.customers.create');
    Route::post('/customers/store', [App\Http\Controllers\Backend\CustomerController::class, 'store'])->name('admin.customers.store');
    Route::get('/customers/edit/{id}', [App\Http\Controllers\Backend\CustomerController::class, 'edit'])->name('admin.customers.edit');
    Route::put('/customers/update/{id}', [App\Http\Controllers\Backend\CustomerController::class, 'update'])->name('admin.customers.update');
    Route::get('/customers/verify/{id}', [App\Http\Controllers\Backend\CustomerController::class, 'verify'])->name('admin.customers.verify');
    Route::get('/customers/reject/{id}', [App\Http\Controllers\Backend\CustomerController::class, 'reject'])->name('admin.customers.reject');
    Route::delete('/customers/delete/{id}', [App\Http\Controllers\Backend\CustomerController::class, 'delete'])->name('admin.customers.delete');

});