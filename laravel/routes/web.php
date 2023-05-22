<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;



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
Route::get('/detail-produk', function () {
    return view('marketplace.detail-produk');
});

Route::get('/profil/edit', function () {
    return view('user.edit-profil');})->name('/profil/edit');
// Route::get('/profil', function () {
//     return view('user.lihat-profil');})->name('profil');
Route::get('/pembayaran', function () {
    return view('marketplace.pembayaran');})->name('pembayaran');
Route::get('/keranjang', function () {
    return view('marketplace.keranjang');})->name('keranjang');
Route::get('/status-order', function () {
    return view('user.status-order');})->name('status-order');
Route::get('/produk/{id}', [ProdukController::class, 'detailProduk'])->name('detail-produk');


// login route
Route::get('/login', [LoginController::class, 'index'])->name('login.view');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

Route::middleware(['auth'])->group(function () {
    Route::get('keranjang',[KeranjangController::class,'index'])->name('keranjang');
    Route::post('keranjang/add/{id}',[KeranjangController::class,'store'])->name('keranjang.post');
    Route::get('profil',[UserController::class,'index'])->name('profil.view');
  });

// logout route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout.post');

//register route
Route::get('/register', [RegisterController::class, 'index'])->name('register.view');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');