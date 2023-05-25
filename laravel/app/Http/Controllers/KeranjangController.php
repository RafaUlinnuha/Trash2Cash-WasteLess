<?php

namespace App\Http\Controllers;
use App\Models\Keranjang;
use App\Models\ItemKeranjang;
use App\Models\Produk;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $keranjang = Keranjang::Where('user_id',$id)->first();
        $item = $keranjang->itemKeranjang;
        dd($item);
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
    public function store(Request $request, $id)
    {   
        //dd($request);
        $produk = Produk::Where('id', $id)->first();
        $user_id = Auth::id();
        $keranjang = Keranjang::Where('user_id',$user_id)->first();
        //dd($produk->id);
        ItemKeranjang::create([
            'jumlah' => $request->jumlah,
            'keranjang_id' => $keranjang->id,
            'produk_id' => $produk->id,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        //return view('marketplace.keranjang', compact('keranjang'));
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
        $user_id = Auth::id();
        $keranjang = Keranjang::Where('user_id',$user_id)->first();
        $item = $keranjang->itemKeranjang->find($id);
        //update jumlah?
        $item->update([
            'jumlah' => $request->jumlah
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ItemKeranjang::find($id);
        $item->delete();
        return back();
    }
}
