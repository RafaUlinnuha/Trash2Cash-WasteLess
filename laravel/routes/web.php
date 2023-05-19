<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProdukController;


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
    return view('landing-page');})->name('landing-page');

Route::get('/home-page', [ProdukController::class, 'index'])->name('home-page');

Route::get('/kategori/{kategori_slug}', [ProdukController::class, 'perKategori']);

Route::get('/semua-kategori', [ProdukController::class, 'semuaKategori'])->name('semua-kategori');
Route::get('/produk/{id}', [ProdukController::class, 'detailProduk'])->name('detail-produk');
Route::get('/edit-profil', function () {
    return view('user.edit-profil');
});

// login route
Route::get('/login', [LoginController::class, 'index'])->name('login.view');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

// logout route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout.post');

//register route
Route::get('/register', [RegisterController::class, 'index'])->name('register.view');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');