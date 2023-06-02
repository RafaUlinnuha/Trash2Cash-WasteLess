<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PembayaranController;




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
Route::get('/search', [ProdukController::class, 'search'])->name('search-produk');
Route::get('/produk/{id}', [ProdukController::class, 'detailProduk'])->name('detail-produk');

// Route::get('/profil/edit', function () {
//     return view('user.edit-profil');})->name('/profil/edit');
// Route::get('/profil', function () {
//     return view('user.lihat-profil');})->name('profil.view');
// Route::get('/pembayaran', function () {
//     return view('marketplace.pembayaran');})->name('pembayaran');
// Route::get('/keranjang', function () {
//     return view('marketplace.keranjang');})->name('keranjang');
// Route::get('/toko/status-order', function () {
//     return view('toko.status-order');})->name('/toko/status-order');

Route::group(['middleware' => 'guest'], function () {
    // login route
    Route::get('/login', [LoginController::class, 'index'])->name('login.view');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

    //register route
    Route::get('/register', [RegisterController::class, 'index'])->name('register.view');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.post');
});



Route::middleware(['auth'])->group(function () {
    //pembelian
    Route::get('keranjang',[KeranjangController::class,'index'])->name('keranjang');
    Route::post('keranjang/add/{id}',[KeranjangController::class,'store'])->name('keranjang.post');
    Route::get('keranjang/inc/{id}',[KeranjangController::class,'incProduk'])->name('produk.inc');
    Route::get('keranjang/dec/{id}',[KeranjangController::class,'decProduk'])->name('produk.dec');
    Route::get('keranjang/dec/{id}',[KeranjangController::class,'decProduk'])->name('produk.dec');
    Route::post('keranjang/buat-pesanan',[OrderController::class,'rincianPesanan'])->name('order.post');
    Route::get('keranjang/buat-pesanan',[OrderController::class,'showRincianPesanan'])->name('order.view');
    Route::get('checkout',[OrderController::class,'store'])->name('checkout');
    Route::get('pembelian',[PembayaranController::class,'index'])->name('pembelian.view');
    Route::post('order/bayar/{id}',[PembayaranController::class,'updateBukti'])->name('bukti.update');
    Route::get('order/selesai/{id}',[PembayaranController::class,'konfirmasi'])->name('konfirmasi');
    Route::get('order/batal/{id}',[PembayaranController::class,'batal'])->name('batalkan');

    //toko
    Route::get('toko/penjualan',[ProdukController::class,'penjualanView'])->name('penjualan.view');
    Route::post('toko/add-product',[ProdukController::class,'store'])->name('penjualan.add');
    Route::post('toko/edit-product/{id}',[ProdukController::class,'update'])->name('penjualan.edit');
    Route::delete('toko/penjualan/delete/{id}',[ProdukController::class,'destroy'])->name('penjualan.del');
    Route::get('toko/order',[OrderController::class,'indextoko'])->name('ordertoko.view');
    Route::get('toko/order/konfirmasi/{id}',[PembayaranController::class,'konfirmasiPembayaran'])->name('konfirmasipembayaran');
    Route::get('toko/order/kirim/{id}',[PembayaranController::class,'konfirmasiKirim'])->name('konfirmasipengiriman');
    Route::get('toko/pendapatan',[PembayaranController::class,'indexpendapatan'])->name('pendapatan.view');
    Route::get('/download-gambar/{path}', [PembayaranController::class, 'download'])->name('download.image');

    
    //user
    Route::get('profil',[UserController::class,'index'])->name('profil.view');
    Route::get('editprofil',[UserController::class,'editprofil'])->name('profil.edit');
    Route::post('edit-alamat',[UserController::class,'updateAlamat'])->name('alamat.update');
    Route::post('edit-user',[UserController::class,'update'])->name('user.update');
    Route::put('/rekening/{id}', [UserController::class, 'updaterekening'])->name('rekening.update');
    Route::post('edit-katasandi',[UserController::class,'changePassword'])->name('katasandi.update');
    Route::post('edit-fotoprofil',[UserController::class,'updatefotoprofil'])->name('fotoprofil.update');
    Route::post('add-rekening',[UserController::class,'storerekening'])->name('rekening.store');
    Route::delete('delete-rekening/{id}',[UserController::class,'deleterekening'])->name('rekening.delete');
  
    // logout route
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout.post');
});



