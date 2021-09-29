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

    // dashboard logged in
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//======================= HomePage Routes Here
Route::get('/', function () {
    return view('welcome');
});


Route::get('test',function (){

    $menu = \App\Models\Menu::where('panel','super-admin')->with('items' , function ($q){
        $q->whereNull('parent_id')->with('nestedChildren');
    })->get();
    die_r($menu->toArray());
    // ready to use https://github.com/paxha/laravel-recursive-relationships

});
