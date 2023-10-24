<?php

use App\Http\Controllers\LoginController;
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


Route::get('/beranda', function () {
    return view('pages.beranda.home');
})->name('pages.beranda.home');

Route::get('/', function () {
    return redirect(route('pages.beranda.home'));
});

Route::get('/halamanguru', function () {
    return view('pages.beranda.homeguru');
})->name('halamanguru');

Route::get('/materi1', function () {
    return view('pages.materi.bab1');
});

Route::get('/kuis1', function () {
    return view('pages.materi.kuis1');
});

Route::get('/kuis2', function () {
    return view('pages.materi.kuis2');
});

Route::get('/kuis3', function () {
    return view('pages.materi.kuis3');
});

Route::get('/kuis4', function () {
    return view('pages.materi.kuis4');
});

Route::get('/materi2', function () {
    return view('pages.materi.bab2');
});

Route::get('/materi3', function () {
    return view('pages.materi.bab3');
});

Route::get('/materi4', function () {
    return view('pages.materi.bab4');
});


Route::get('/capaian', function () {
    return view('pages.capaian.capaian');
});

Route::get('/informasi', function () {
    return view('pages.capaian.informasi');
});


// Route::get('/', function () {
//     return view('pages.login.register');
// });

// Route::get('/', function () {
//     return view('pages.login.login');
// });

Route::get('/capaian', function () {
    return view('pages.capaian.capaian');
});

Route::get('/login', [LoginController::class, "indexL"])->name("auth.indexL");
Route::post('/login', [LoginController::class, "authenticate"])->name("auth.login");

Route::get('/register', [LoginController::class, "indexR"])->name("auth.indexR");
Route::post('/register', [LoginController::class, "store"])->name("auth.register");

// Route::get('/logout', [LoginController::class, "indexL"])->name("auth.indexL");
Route::get('/logout', [LoginController::class, "logout"])->name("auth.logout");



