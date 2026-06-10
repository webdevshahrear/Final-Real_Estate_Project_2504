<?php

use App\Http\Controllers\Backend\BuildingController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PropertyController;
use App\Http\Controllers\Backend\UnitController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::view('/dashboard-manager', 'backend.dashboard.manager')->name('dashboard.manager');
Route::view('/dashboard-owner', 'backend.dashboard.owner')->name('dashboard.owner');
Route::view('/dashboard-tenant', 'backend.dashboard.tenant')->name('dashboard.tenant');
Route::view('/dashboard-flat-owner', 'backend.dashboard.flat-owner')->name('dashboard.flat-owner');

// Management Routes
Route::view('/billing', 'backend.billing.index')->name('billing');
Route::view('/billing-manager', 'backend.billing.manager')->name('billing.manager');
Route::view('/billing-owner', 'backend.billing.owner')->name('billing.owner');
Route::view('/billing-tenant', 'backend.billing.tenant')->name('billing.tenant');

Route::view('/accounts', 'backend.accounts.index')->name('accounts');
Route::view('/accounts-manager', 'backend.accounts.manager')->name('accounts.manager');
Route::view('/accounts-tenant', 'backend.accounts.tenant')->name('accounts.tenant');

Route::view('/owners', 'backend.owners.index')->name('owners');
Route::view('/owners-manager', 'backend.owners.manager')->name('owners.manager');

Route::view('/tenants', 'backend.tenants.index')->name('tenants');
Route::view('/tenants-manager', 'backend.tenants.manager')->name('tenants.manager');
Route::view('/tenants-owner', 'backend.tenants.owner')->name('tenants.owner');

Route::view('/reports', 'backend.reports.index')->name('reports');
Route::view('/reports-manager', 'backend.reports.manager')->name('reports.manager');

Route::view('/settings', 'backend.settings.index')->name('settings');
Route::view('/settings-manager', 'backend.settings.manager')->name('settings.manager');
Route::view('/settings-owner', 'backend.settings.owner')->name('settings.owner');
Route::view('/settings-tenant', 'backend.settings.tenant')->name('settings.tenant');
Route::view('/settings-flat-owner', 'backend.settings.flat-owner')->name('settings.flat-owner');

Route::view('/documents', 'backend.documents.index')->name('documents');
Route::view('/documents-manager', 'backend.documents.manager')->name('documents.manager');
Route::view('/documents-owner', 'backend.documents.owner')->name('documents.owner');
Route::view('/documents-tenant', 'backend.documents.tenant')->name('documents.tenant');
Route::view('/documents-flat-owner', 'backend.documents.flat-owner')->name('documents.flat-owner');

Route::view('/maintenance', 'backend.maintenance.index')->name('maintenance');
Route::view('/maintenance-manager', 'backend.maintenance.manager')->name('maintenance.manager');
Route::view('/maintenance-owner', 'backend.maintenance.owner')->name('maintenance.owner');
Route::view('/maintenance-tenant', 'backend.maintenance.tenant')->name('maintenance.tenant');

Route::view('/notices', 'backend.notices.index')->name('notices');
Route::view('/notices-manager', 'backend.notices.manager')->name('notices.manager');
Route::view('/notices-owner', 'backend.notices.owner')->name('notices.owner');
Route::view('/notices-tenant', 'backend.notices.tenant')->name('notices.tenant');
Route::view('/notices-flat-owner', 'backend.notices.flat-owner')->name('notices.flat-owner');

Route::view('/transfers', 'backend.transfers.index')->name('transfers');
Route::view('/transfers-manager', 'backend.transfers.manager')->name('transfers.manager');
Route::view('/transfers-flat-owner', 'backend.transfers.flat-owner')->name('transfers.flat-owner');
Route::view('/statements-owner', 'backend.statements.owner')->name('statements.owner');
Route::view('/statements-flat-owner', 'backend.statements.flat-owner')->name('statements.flat-owner');

Route::view('/visitors', 'backend.visitors.index')->name('visitors');
Route::view('/visitors-manager', 'backend.visitors.manager')->name('visitors.manager');

Route::view('/parking', 'backend.parking.index')->name('parking');
Route::view('/user-roles', 'backend.user-roles.index')->name('user-roles');
Route::view('/home', 'backend.dashboard.home')->name('home');

// Building
Route::prefix('/building')->name('building.')->controller(BuildingController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});
Route::view('/buildings-manager', 'backend.building.manager')->name('building.manager');
Route::view('/buildings-owner', 'backend.building.owner')->name('building.owner');

// Units
Route::prefix('/units')->name('units.')->controller(UnitController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});

// Customers
Route::prefix('/customers')->name('customers.')->controller(CustomerController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::get('/verify/{id}', 'verify')->name('verify');
    Route::get('/reject/{id}', 'reject')->name('reject');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});

// Properties
Route::prefix('/properties')->name('properties.')->controller(PropertyController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});

Route::view('/units-manager', 'backend.units.manager')->name('units.manager');
Route::view('/units-owner', 'backend.units.owner')->name('units.owner');
Route::view('/units-flat-owner', 'backend.units.flat-owner')->name('units.flat-owner');
