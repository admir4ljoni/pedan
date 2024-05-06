<?php

use Illuminate\Support\Facades\Route;

//user
Route::get('/', function () {
    return view('pages.user.home.index');
});





//admin
Route::get('/admin', function () {
    return view('pages.admin.dashboard');
});