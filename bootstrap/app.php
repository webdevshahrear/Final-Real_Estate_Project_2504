<?php

use App\Http\Middleware\IsTenantMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

$app = new Application(dirname(__DIR__));
$app->useBootstrapPath(dirname(__DIR__) . '/storage/bootstrap-cache');

return (new Illuminate\Foundation\Configuration\ApplicationBuilder($app))
    ->withKernels()
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware(['web', 'auth'])
                ->prefix('/admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));

            Route::middleware(['web'])
                ->prefix('/properties')
                ->name('properties.')
                ->group(base_path('routes/public.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->redirectTo(
            guests: '/login',
            users: '/admin/dashboard'
        );

        $middleware->alias([
            'cus' => IsTenantMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
