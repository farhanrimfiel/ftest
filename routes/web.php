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
    return view('landing');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/panduanPengguna', function () {
    return view('panduanPengguna');
});

Route::get('/maklumBalas', function () {
    return view('maklumBalas');
});

Route::get('/hubungiKami', function () {
    return view('hubungiKami');
});

Route::get('/login', function () {
    return view('login');
});
