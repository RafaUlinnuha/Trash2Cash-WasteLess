<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/home-page', function () {
    return view('marketplace.home-page');})->name('home-page');
 
Route::get('/detail-produk', function () {
    return view('marketplace.detail-produk');
});

Route::get('/semua-kategori', function () {
    return view('marketplace.semua-kategori');})->name('semua-kategori');

Route::get('/kategori-plastik', function () {
    return view('marketplace.kategori-plastik');})->name('kategori-plastik');

Route::get('/kategori-kaca-kaleng', function () {
    return view('marketplace.kategori-kaca-kaleng');})->name('kategori-kaca-kaleng');
    
Route::get('/kategori-elektronik', function () {
    return view('marketplace.kategori-elektronik');})->name('kategori-elektronik');

Route::get('/kategori-kertas', function () {
    return view('marketplace.kategori-kertas');})->name('kategori-kertas');

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