<?php
    // subdomain : auth

    use Illuminate\Support\Facades\Route;
    use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

    Route::get('/', function () {
        return "Auth Subdomain Here!";
    });

    /*Route::group(['middleware' => ['auth:sanctum', 'verified']], function (){
        Route::get('/',function (){
            return "pl";
//            return view('welcome');
        });
    });*/

    // todo:
    // run auth seperate
    // write readme
    // multiple route files for multiple subdomains
    // integrate ci/cd
    // integrate other config files like github repo or ...
