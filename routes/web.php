<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfNotAuthenticated;
use App\Http\Controllers\AllController;
use App\Http\Controllers\FlashcardController;
use App\Http\Controllers\BisyaratvideoController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\MusikController;
use App\Http\Controllers\TariController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryagbrController;
use App\Http\Controllers\KaryavidController;
use App\Models\Karyagbr;
use Illuminate\Support\Facades\Auth;

// webUtama
Route::get('/', [AllController::class, 'home']);
Route::get('/home', [AllController::class, 'landing'])->middleware(RedirectIfNotAuthenticated::class);
Route::get('/tutorial/bhsisyarat', [AllController::class, 'tBhsisyarat']);
Route::get('/tutorial/musik', [AllController::class, 'tMusik']);
Route::get('/tutorial/tari', [AllController::class, 'tTari']);
Route::get('/tutorial/gambar', [AllController::class, 'tGambar']);
Route::get('/galeri', [AllController::class, 'galeri']);

Route::group(['prefix' => 'karya'], function () {
    // Rute untuk KaryagbrController
    Route::resource('/karya', KaryagbrController::class)->except(['store', 'update', 'edit']);
    Route::post('/karya/gambar/', [KaryagbrController::class, 'store'])->name('karya.gbr.store');
    Route::post('/karya', [KaryagbrController::class, 'update'])->name('karya.gbr.update');
    Route::post('/karya', [KaryagbrController::class, 'edit'])->name('karya.gbr.edit');

    // Rute untuk KaryavidController
    Route::resource('/karya', KaryagbrController::class)->except(['store', 'update', 'edit']);
    Route::post('/karya/video', [KaryavidController::class, 'store'])->name('karya.vid.store');
    Route::post('/video', [KaryagbrController::class, 'update'])->name('karya.vid.update');
    Route::post('/video', [KaryagbrController::class, 'edit'])->name('karya.vid.edit');
});

Route::resource('/karya', KaryagbrController::class);
Route::resource('/video', KaryavidController::class);


// crud webAdmin
Route::resource('/bhsIsyarat/flashcard', FlashcardController::class);
Route::resource('/bhsIsyarat/video', BisyaratvideoController::class);
Route::resource('/musik', MusikController::class);
Route::resource('/tari', TariController::class);
Route::resource('/gambar', GambarController::class);
Route::resource('/user', UserController::class);
Route::get('/galeri', [AllController::class, 'galeri'])
    ->name('galeri.index');;
Route::get('/galeri/video', [AllController::class, 'galerivideo'])
    ->name('galeri.video');;

// CRUD
// // menampilkan tabel lowongan pekerjaan
// Route::get('/galeri', [GaleriController::class, 'index'])
//     ->name('galeri.index');
// // menampilkan form input lowongan pekerjaan
// Route::get('galeriKarya/create', [GaleriController::class, 'create'])
//     ->name('galeri.create');
// Route::post('/galeriKarya', [GaleriController::class, 'store'])
//     ->name('galeri.store');
// Route::get('/galeri/{id}', [GaleriController::class, 'show'])
//     ->name('galeri.show');
// Route::get('/galeri/{id}/edit', [GaleriController::class, 'edit'])
//     ->name('galeri.edit');
// Route::patch('/galeri/{id}', [GaleriController::class, 'update'])
//     ->name('galeri.update');
// Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])
//     ->name('galeri.destroy');


// User Login Register
Route::get('register', [UserController::class, 'register'])
    ->name('register');
Route::post('register', [UserController::class, 'register_action'])
    ->name('register.action');
Route::get('login', [UserController::class, 'login'])
    ->name('login');
Route::post('login', [UserController::class, 'login_action'])
    ->name('login.action');

// adminLogin Register
Route::get('admin', [UserController::class, 'admin_login'])
    ->name('admin.login')->middleware('is_admin');
