<?php
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('dashboard', \App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');

    Route::get('sample',function (){
        return "logged in as admin";
    })->name('dashboard');
});


Route::any('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
//Route::redirect('logout', route('logout'));
