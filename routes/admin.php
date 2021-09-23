<?php

    use Illuminate\Support\Facades\Route;
    use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


    Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
        Route::get('dashboard', \App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');

    });

    Route::match(['get', 'post'], 'logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
