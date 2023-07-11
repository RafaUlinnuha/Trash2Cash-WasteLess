<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\AdminController;




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
Route::get('/artikel-sampah-plastik', function () {
    return view('artikel.plastik');})->name('artikel-sampah-plastik');
Route::get('/artikel-sampah-elektronik', function () {
    return view('artikel.elektronik');})->name('artikel-sampah-elektronik');
Route::get('/artikel-sampah-kaca-kaleng', function () {
    return view('artikel.kaca-kaleng');})->name('artikel-sampah-kaca-kaleng');
Route::get('/artikel-sampah-kertas', function () {
    return view('artikel.kertas');})->name('artikel-sampah-kertas');


Route::group(['middleware' => ['role:anggota,pembeli|guest' ]], function () {
    // Route marketplace
    // Tambahkan route lain yang ingin diakses oleh guest, anggota, dan pembeli di sini
    Route::get('/home-page', [ProdukController::class, 'index'])->name('home-page');

    Route::get('/kategori/{kategori_slug}', [ProdukController::class, 'perKategori']);

    Route::get('/semua-kategori', [ProdukController::class, 'semuaKategori'])->name('semua-kategori');
    Route::get('/detail-produk', function () {
        return view('marketplace.detail-produk');
    });
    Route::get('/search', [ProdukController::class, 'search'])->name('search-produk');
    Route::get('/produk/{id}', [ProdukController::class, 'detailProduk'])->name('detail-produk');

});
Route::group(['middleware' => 'guest'], function () {
    // login route
    Route::get('/login', [LoginController::class, 'index'])->name('login.view');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

    //register route
    Route::get('/register', [RegisterController::class, 'index'])->name('register.view');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.post');
});


Route::middleware(['auth'])->group(function () {
    //admin
    Route::middleware('role:admin')->group(function (){
        Route::get('admin',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('admin/order',[AdminController::class,'order'])->name('admin.order');
    });
    //pembelian
    Route::middleware(['role:anggota, pembeli'])->group(function () {
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
    });
    
    //user
    Route::get('profil',[UserController::class,'index'])->name('profil.view');
    Route::get('profil/editprofil',[UserController::class,'editprofil'])->name('profil.edit');
    Route::post('profil/edit-alamat',[UserController::class,'updateAlamat'])->name('alamat.update');
    Route::post('profil/edit-user',[UserController::class,'update'])->name('user.update');
    Route::put('profil/rekening/{id}', [UserController::class, 'updaterekening'])->name('rekening.update');
    Route::post('profil/edit-katasandi',[UserController::class,'changePassword'])->name('katasandi.update');
    Route::post('profil/edit-fotoprofil',[UserController::class,'updatefotoprofil'])->name('fotoprofil.update');
    Route::post('profil/add-rekening',[UserController::class,'storerekening'])->name('rekening.store');
    Route::delete('profil/delete-rekening/{id}',[UserController::class,'deleterekening'])->name('rekening.delete');
  
    // logout route
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout.post');

    //UNTUK ANGGOTA
    Route::middleware(['role:anggota'])->group(function () {
        Route::get('anggota/setor',[SampahController::class,'index'])->name('anggota-daur');
        Route::get('anggota', [SampahController::class,'homeview'])->name('anggota-home');
        Route::post('anggota/setor/add-sampah',[SampahController::class,'store'])->name('setor.add');
        Route::get('anggota/setor/inc/{id}',[SampahController::class,'incSampah'])->name('sampah.inc');
        Route::get('anggota/setor/dec/{id}',[SampahController::class,'decSampah'])->name('sampah.dec');
        Route::get('anggota/setor/konfirmasi/{id}',[SampahController::class,'setorKonfirmasiView'])->name('setor.konfirmasi');
        Route::post('anggota/setor/konfirmasi/{id}/post',[SampahController::class,'update'])->name('setor.post');
        Route::get('anggota/status', [SampahController::class,'statusView'])->name('anggota-status');
        Route::get('anggota/pendapatan',[SampahController::class,'indexpendapatan'])->name('anggota.pendapatan');  
    });

    //UNTUK BANK SAMPAH
    Route::middleware(['role:bank_sampah'])->group(function () {
        Route::get('bank-sampah/status-setoran', [SampahController::class,'bankStatusView'])->name('bank-status');
        Route::get('bank-sampah/setor/konfirmasi/{id}',[SampahController::class,'bankSetorKonfirmasiView'])->name('bank-setorkonfirmasi');
        Route::post('bank-sampah/setor/konfirmasi/edit/{id}',[SampahController::class,'itemBankUpdate'])->name('setor.updateItemBank');
        Route::get('bank-sampah/setor/simpan-konfirmasi/{id}',[SampahController::class,'updateSampahBank'])->name('bank.konfirmasi');
            //toko
        Route::get('bank-sampah/penjualan',[ProdukController::class,'penjualanView'])->name('penjualan.view');
        Route::post('bank-sampah/add-product',[ProdukController::class,'store'])->name('penjualan.add');
        Route::post('bank-sampah/edit-product/{id}',[ProdukController::class,'update'])->name('penjualan.edit');
        Route::delete('bank-sampah/penjualan/delete/{id}',[ProdukController::class,'destroy'])->name('penjualan.del');
        Route::get('bank-sampah/order',[OrderController::class,'indextoko'])->name('ordertoko.view');
        Route::get('bank-sampah/order/konfirmasi/{id}',[PembayaranController::class,'konfirmasiPembayaran'])->name('konfirmasipembayaran');
        Route::get('bank-sampah/order/kirim/{id}',[PembayaranController::class,'konfirmasiKirim'])->name('konfirmasipengiriman');
        Route::get('bank-sampah/pendapatan',[PembayaranController::class,'indexpendapatan'])->name('pendapatan.view');
        Route::get('/download-gambar/{path}', [PembayaranController::class, 'download'])->name('download.image');  
    });
});



