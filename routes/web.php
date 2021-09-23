<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin','as'=>'admin.'], function (){
    Route::get('dashboard',\App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');
});

Route::get('test',function (){

    $menu = \App\Models\Menu::where('panel','super-admin')->with('items' , function ($q){
        $q->whereNull('parent_id')->with('nestedChildren');
    })->get();
    die_r($menu->toArray());
    // ready to use https://github.com/paxha/laravel-recursive-relationships

});

Route::domain('auth.'.env("APP_MAIN_DOMAIN"))->group(function() {
    Route::get('/', function() {
        return view('welcome');
    })->middleware(['auth:sanctum', 'verified']);

    // todo:
    // run auth seperate
    // write readme
    // multiple route files for multiple subdomains
    // integrate ci/cd
    // integrate other config files like github repo or ...

});
