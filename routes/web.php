<?php

use App\Http\Controllers\Authentication\PanitiaRegisterController;
use App\Http\Controllers\Authentication\PengujiRegisterController;
use App\Http\Controllers\Authentication\SantriRegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\Setoran\SetoranController;
use App\Models\Setoran;
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
Route::get('/santri', [SetoranController::class, 'indexSantri'])->name('dashboard.santri');
Route::get('/penguji/setoran', [SetoranController::class, 'create'])->name('dashboard.penguji.setoran.create');

Route::get('/santri/setoran/{id}', [SantriController::class, 'indexNilaiSetoran'])->name('dashboard.santri.setoran');

Route::get('/santri/ujian/{id}', function () {
    return view('dashboard.santri-ujian');
})->name('dashboard.santri.ujian');


Route::get('/penguji', function () {
    $setoran = Setoran::where('penguji_id', Auth::user()->penguji->id)->get();

    $setoran->load('penguji.user', 'santri.user', 'nilais');

    return view('dashboard.penguji', compact('setoran'));
})->name('dashboard.penguji');

Route::get('/penguji/setoran/{setoran}', [SetoranController::class, 'edit'])->name('dashboard.penguji.setoran.update');


Route::get('/penguji/ujian', function () {
    return view('dashboard.penguji-ujian-create');
})->name('dashboard.penguji.ujian.create');

Route::get('/penguji/ujian/{id}', function () {
    return view('dashboard.penguji-ujian-update');
})->name('dashboard.penguji.ujian.update');


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

// Route::get('/penguji-setoran', function () {
//     return view('dashboard.penguji_setoran');
// });

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
