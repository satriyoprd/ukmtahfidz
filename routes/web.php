<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetoranController;

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

Route::get('/register', function () {
    return view('landing.register');
});

Route::get('/login', function () {
    return view('landing.login');
});

Route::get('/departemen-mudarosah', function () {
    return view('landing.departemen_mudarosah');
});

Route::get('/departemen-munaqosyah', function () {
    return view('landing.departemen_munaqosyah');
});

Route::get('/departemen-syiar', function () {
    return view('landing.departemen_syiar');
});

Route::get('/departemen-tahfidz', function () {
    return view('landing.departemen_tahfidz');
});

Route::get('/departemen-ukhuwah', function () {
    return view('landing.departemen_ukhuwah');
});

Route::get('/publikasi', function () {
    return view('landing.publikasi');
});

Route::get('/program-tahfidz', function () {
    return view('landing.tahfidz');
});

Route::get('/santri-setoran', function () {
    return view('dashboard.santri_setoran');
});

Route::get('/santri-ujian', function () {
    return view('dashboard.santri_ujian');
});

Route::get('/penguji-setoran', function () {
    return view('dashboard.penguji_setoran');
});

Route::get('/penguji-ujian', function () {
    return view('dashboard.penguji_ujian');
});

Route::get('/santri', [SetoranController::class, 'getSetoranSantri']);

// Route::get('/penguji', function () {
//     return view('dashboard.penguji');
// });

Route::get('/register', function () {
    return view('landing.register');
});

Route::get('/penguji', [SetoranController::class, 'getSetoran']);
Route::get('/penguji/edit/{id_setoran}', [SetoranController::class, 'edit'])->name('dashboard.edit');
Route::patch('/penguji/update/{id_setoran}', [SetoranController::class, 'update'])->name('dashboard.update');
Route::get('/penguji/delete/{id_setoran}', [SetoranController::class, 'delete'])->name('dashboard.delete');