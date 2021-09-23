<?php
    // subdomain : sample
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return "Sample Subdomain!";
    });
