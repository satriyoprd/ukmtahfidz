<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/santri', function () {
    return view('dashboard.santri');
});

Route::get('/penguji', function () {
    return view('dashboard.penguji');
});

Route::get('/register', function () {
    return view('landing.register');
});