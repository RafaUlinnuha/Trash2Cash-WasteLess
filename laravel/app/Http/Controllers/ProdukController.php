<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriSampah;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $produk = Produk::with('user', 'user.alamatUser')->take(4)->get();
        // dd($produk);
        return view('marketplace.home-page', compact('produk'));
    }

    public function semuaKategori()
    {
        $judul = 'Sampah';
        if(Auth::check()){
            $id = Auth::id();
            $produk = Produk::with('user', 'user.alamatUser')->where('user_id', '!=', $id)->get();
        } else {
            $produk = Produk::with('user', 'user.alamatUser')->get();
        }
        //dd($produk);
        return view('marketplace.produk', compact('judul','produk'));
    }

    public function perKategori($kategori_slug)
    {
        $kategori = KategoriSampah::where('slug', $kategori_slug)->first();
        if ($kategori){
            if(Auth::check()){
                $id = Auth::id();
                $produk = Produk::with('user', 'user.alamatUser')
                          ->where('user_id', '<>', $id)
                          ->where('kategori_sampah_id', $kategori->id)
                          ->get();
            } else {
                $produk = Produk::with('user', 'user.alamatUser')
                          ->where('kategori_sampah_id', $kategori->id)
                          ->get();
            }
        }
        $judul = $kategori->nama;
        return view('marketplace.produk', compact('judul','produk'));
    }

    public function detailProduk($id)
    {
        $produk = Produk::with('user', 'user.alamatUser')->where('id', $id)->first();
        //dd($produk);
        return view('marketplace.detail-produk', compact('produk'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function penjualanView()
    {
        $id = Auth::id();
        $produk = Produk::where('user_id', $id)->get();
        // dd($produk);
        return view('toko.penjualan', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        // $produk = Produk::create([
        //     'nama' => ,
        //     'nama_sub_kategori' => ,
        //     'jumlah' => ,
        //     'harga' => ,
        //     'deskripsi' => ,
        //     'slug' =>  ,
        //     'gambar' => ,
        //     'user_id' => ,
        // ]);
        return redirect()->route('penjualan.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        // $produk->update([
        //     'nama' => ,
        //     'nama_sub_kategori' => ,
        //     'jumlah' => ,
        //     'harga' => ,
        //     'deskripsi' => ,
        //     'slug' =>  ,
        //     'gambar' => ,
        // ]);
        return redirect()->route('penjualan.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->route('penjualan.view');
    }
}
