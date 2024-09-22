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
    return view('home');
});

Route::get('/login', function () {
    return view('authlogin');
});

Route::get('/register', function () {
    return view('authregister');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/detail', function () {
    return view('detail');
});


Route::get('/cart', function () {
    return view('cartpage');
});

Route::get('/logout', function () {
    return view('logoutpage');
});

Route::get('/update', function () {
    return view('profilesuccess');
});

Route::get('/profile', function () {
    return view('profilepage');
});



