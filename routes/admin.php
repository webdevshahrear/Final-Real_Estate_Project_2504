<?php

use App\Http\Controllers\Backend\BuildingController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PropertyController;
use App\Http\Controllers\Backend\TenantManagementController;
use App\Http\Controllers\Backend\UnitController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::view('/dashboard-manager', 'backend.manager.dashboard.index')->name('dashboard.manager');
Route::view('/dashboard-owner', 'backend.prop-owner.dashboard.index')->name('dashboard.owner');
Route::view('/dashboard-flat-owner', 'backend.flat-owner.dashboard.index')->name('dashboard.flat-owner');

// Management Routes
Route::view('/billing', 'backend.admin.billing.index')->name('billing');
Route::view('/billing-manager', 'backend.manager.billing.index')->name('billing.manager');
Route::view('/billing-owner', 'backend.prop-owner.billing.index')->name('billing.owner');

Route::view('/accounts', 'backend.admin.accounts.index')->name('accounts');
Route::view('/accounts-manager', 'backend.manager.accounts.index')->name('accounts.manager');

Route::view('/owners', 'backend.admin.owners.index')->name('owners');
Route::view('/owners-manager', 'backend.manager.owners.index')->name('owners.manager');

// Tenant Management (Admin)
Route::get('/tenants', [TenantManagementController::class, 'index'])->name('tenants');
Route::post('/tenants/{id}/approve', [TenantManagementController::class, 'approve'])->name('tenants.approve');
Route::post('/tenants/{id}/reject', [TenantManagementController::class, 'reject'])->name('tenants.reject');
Route::post('/tenants/generate-bills', [TenantManagementController::class, 'generateMonthlyBills'])->name('tenants.generate-bills');

Route::view('/tenants-manager', 'backend.manager.tenants.index')->name('tenants.manager');
Route::view('/tenants-owner', 'backend.prop-owner.tenants.index')->name('tenants.owner');

Route::view('/reports', 'backend.admin.reports.index')->name('reports');
Route::view('/reports-manager', 'backend.manager.reports.index')->name('reports.manager');

Route::view('/settings', 'backend.admin.settings.index')->name('settings');
Route::view('/settings-manager', 'backend.manager.settings.index')->name('settings.manager');
Route::view('/settings-owner', 'backend.prop-owner.settings.index')->name('settings.owner');
Route::view('/settings-flat-owner', 'backend.flat-owner.settings.index')->name('settings.flat-owner');

Route::view('/documents', 'backend.admin.documents.index')->name('documents');
Route::view('/documents-manager', 'backend.manager.documents.index')->name('documents.manager');
Route::view('/documents-owner', 'backend.prop-owner.documents.index')->name('documents.owner');
Route::view('/documents-flat-owner', 'backend.flat-owner.documents.index')->name('documents.flat-owner');

Route::view('/maintenance', 'backend.admin.maintenance.index')->name('maintenance');
Route::view('/maintenance-manager', 'backend.manager.maintenance.index')->name('maintenance.manager');
Route::view('/maintenance-owner', 'backend.prop-owner.maintenance.index')->name('maintenance.owner');

Route::view('/notices', 'backend.admin.notices.index')->name('notices');
Route::view('/notices-manager', 'backend.manager.notices.index')->name('notices.manager');
Route::view('/notices-owner', 'backend.prop-owner.notices.index')->name('notices.owner');
Route::view('/notices-flat-owner', 'backend.flat-owner.notices.index')->name('notices.flat-owner');

Route::view('/transfers', 'backend.admin.transfers.index')->name('transfers');
Route::view('/transfers-manager', 'backend.manager.transfers.index')->name('transfers.manager');
Route::view('/transfers-flat-owner', 'backend.flat-owner.transfers.index')->name('transfers.flat-owner');
Route::view('/statements-owner', 'backend.prop-owner.statements.index')->name('statements.owner');
Route::view('/statements-flat-owner', 'backend.flat-owner.statements.index')->name('statements.flat-owner');

Route::view('/visitors', 'backend.admin.visitors.index')->name('visitors');
Route::view('/visitors-manager', 'backend.manager.visitors.index')->name('visitors.manager');

Route::view('/parking', 'backend.admin.parking.index')->name('parking');
Route::view('/user-roles', 'backend.admin.user-roles.index')->name('user-roles');
Route::view('/home', 'backend.admin.dashboard.home')->name('home');

// Building
Route::prefix('/building')->name('building.')->controller(BuildingController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/delete/{id}', 'delete')->name('delete');
});
Route::view('/buildings-manager', 'backend.manager.building.index')->name('building.manager');
Route::view('/buildings-owner', 'backend.prop-owner.building.index')->name('building.owner');

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

Route::view('/units-manager', 'backend.manager.units.index')->name('units.manager');
Route::view('/units-owner', 'backend.prop-owner.units.index')->name('units.owner');
Route::view('/units-flat-owner', 'backend.flat-owner.units.index')->name('units.flat-owner');
