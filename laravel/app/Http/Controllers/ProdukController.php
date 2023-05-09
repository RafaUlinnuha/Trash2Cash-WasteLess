<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriSampah;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    public function homepage()
    {
        $produk = Produk::with('user', 'user.alamatUser')->take(4)->get();
        // dd($produk);
        return view('marketplace.home-page', compact('produk'));
    }

    public function semuaKategori()
    {
        $judul = 'Sampah';
        $produk = Produk::with('user', 'user.alamatUser')->get();
        //dd($produk);
        return view('marketplace.produk', compact('judul','produk'));
    }

    public function perKategori($kategori_slug)
    {
        $kategori = KategoriSampah::where('slug', $kategori_slug)->first();
        if ($kategori){
           $produk = Produk::with('user', 'user.alamatUser')->where('kategori_sampah_id',$kategori->id)->get();
            //dd($produk);
        }
        $judul = $kategori->nama;
        return view('marketplace.produk', compact('judul','produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
