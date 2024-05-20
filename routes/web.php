<?php

use App\Http\Controllers\Authentication\PanitiaRegisterController;
use App\Http\Controllers\Authentication\PengujiRegisterController;
use App\Http\Controllers\Authentication\SantriRegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Setoran\SetoranController;
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
})->name('home');

Route::get('/santri/register', [SantriRegisterController::class, 'create'])->name('santri.create');
Route::post('/santri/register', [SantriRegisterController::class, 'store'])->name('santri.store');
Route::get('/penguji/register', [PengujiRegisterController::class, 'create'])->name('penguji.create');
Route::post('/penguji/register', [PengujiRegisterController::class, 'store'])->name('penguji.store');
Route::get('/panitia/register', [PanitiaRegisterController::class, 'create'])->name('panitia.create');
Route::post('/panitia/register', [PanitiaRegisterController::class, 'store'])->name('panitia.store');


Route::resource('/setoran', SetoranController::class);


Route::get('/santri', function () {
    return view('dashboard.santri');
})->name('dashboard.santri');

Route::get('/santri/setoran/{id}', function () {
    return view('dashboard.santri-setoran');
})->name('dashboard.santri.setoran');

Route::get('/santri/ujian/{id}', function () {
    return view('dashboard.santri-ujian');
})->name('dashboard.santri.ujian');


Route::get('/penguji', function () {
    return view('dashboard.penguji');
})->name('dashboard.penguji');

Route::get('/penguji/setoran/{id}', function () {
    return view('dashboard.penguji-setoran-update');
})->name('dashboard.penguji.setoran.update');

Route::get('/penguji/setoran', function () {
    return view('dashboard.penguji-setoran-create');
})->name('dashboard.penguji.setoran.create');

Route::get('/penguji/ujian', function () {
    return view('dashboard.penguji-ujian-create');
})->name('dashboard.penguji.ujian.create');

Route::get('/penguji/ujian/{id}', function () {
    return view('dashboard.penguji-ujian-update');
})->name('dashboard.penguji.ujian.update');


Route::get('/register', function () {
    return view('landing.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
