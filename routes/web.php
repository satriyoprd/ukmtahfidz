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


