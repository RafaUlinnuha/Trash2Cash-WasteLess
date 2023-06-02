<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriSampah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

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
        $kategori = KategoriSampah::All();
        return view('toko.penjualan', compact('produk', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // dd($request);
        $query = $request->input('search');
        // dd($query);
        $produk = Produk::with('user', 'user.alamatUser')
                          ->where('produks.nama', 'LIKE', '%'.$query.'%')
                          ->orWhere('produks.nama_sub_kategori', 'LIKE', '%'.$query.'%')
                          ->get();
        // dd($produk);
        $judul = 'Jual '.$query;
        // dd($judul);
        return view('marketplace.produk', compact('judul','produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama' => ['required'],
            'nama_sub_kategori' => ['required'],
            'deskripsi' => ['required'],
            'jumlah' => ['required','numeric', 'min:1'],
            'harga' => ['numeric'],
            'gambar' => ['required','image','mimes:jpeg,png'],
        ]);
        $id = Auth::id();
         // Handle image upload
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $imageName = time() . '_' . $gambar->getClientOriginalName();
            $imagePath = 'product_images/' . $imageName;
            Storage::disk('public')->put($imagePath, file_get_contents($gambar));
        }
        $kategori = KategoriSampah::where('nama', $request->kategori)->first();
        $slug = \Str::slug($request->nama,'-').'-'.substr($id, -8);
        try {
            $produk = new Produk();
            $produk->nama = $request->input('nama');
            $produk->nama_sub_kategori = $request->input('nama_sub_kategori');
            $produk->jumlah = $request->input('jumlah');
            $produk->harga = $request->input('harga');
            $produk->deskripsi = $request->input('deskripsi');
            $produk->slug =  $slug;
            $produk->gambar = $imagePath;
            $produk->user_id = $id;
            $produk->kategori_sampah_id = $kategori->id;
            $produk->save();
            return redirect()->back()->with('add', 'Product created successfully');
        } catch (\Exception $e) {
            // Set error message in the session
            return redirect()->back()->with('error', 'Failed to create product');
        }
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
        // dd($request->hasFile('gambar'));
        $request->validate([
            'nama' => ['required'],
            'nama_sub_kategori' => ['required'],
            'deskripsi' => ['required'],
            'jumlah' => ['required','numeric','min:1'],
            'harga' => ['numeric','min:1'],
            'gambar' => ['nullable','image','mimes:jpeg,png'],
        ]);
        $produk = Produk::findOrFail($id);
        $kategori = KategoriSampah::where('nama', $request->kategori)->first();
        $slug = \Str::slug($request->nama,'-').'-'.substr($id, -8);
        
        //update
        $produk->nama = $request->input('nama');
        $produk->nama_sub_kategori = $request->input('nama_sub_kategori');
        $produk->jumlah = $request->input('jumlah');
        $produk->harga = $request->input('harga');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->slug =  $slug;

        // Handle image upload if a new image is uploaded
        if ($request->hasFile('gambar')) {
            // Delete old image if exists
            
            if ($produk->gambar) {
                Storage::delete('public/product_images/' . $produk->gambar);
            }
            $gambar = $request->file('gambar');
            $imageName = time() . '_' . $gambar->getClientOriginalName();
            $imagePath = 'product_images/' . $imageName;
            Storage::disk('public')->put($imagePath, file_get_contents($gambar));

            $produk->gambar = $imagePath;
        }

        // Update the product in the database
        $produk->save();

        return redirect()->back()->with('update', 'Product updated successfully');
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
