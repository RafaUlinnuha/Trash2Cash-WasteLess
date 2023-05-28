<?php

namespace App\Http\Controllers;
use App\Models\Keranjang;
use App\Models\ItemKeranjang;
use App\Models\ItemOrder;
use App\Models\Order;
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
        // $items = $keranjang->itemKeranjang;
        // dd($keranjang->itemKeranjang[0]->produk);
        return view('marketplace.keranjang', compact('keranjang'));
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
        // dd($request);
        $produk = Produk::Where('id', $id)->first();
        $user_id = Auth::id();
        $keranjang = Keranjang::Where('user_id',$user_id)->first();
        //dd($produk->id);
        if($request->action == 'tambah_keranjang'){
            if(ItemKeranjang::where('keranjang_id', $keranjang->id)->where('produk_id',$produk->id)->first()){
                $item = ItemKeranjang::where('keranjang_id', $keranjang->id)->where('produk_id',$produk->id)->first();
                $item->update([
                    'jumlah' => $request->jumlah + $item->jumlah,
                ]);
            } else {
                ItemKeranjang::create([
                'jumlah' => $request->jumlah,
                'keranjang_id' => $keranjang->id,
                'produk_id' => $produk->id,
                ]);
            }
             return redirect()->route('detail-produk', ['id' => $produk->id]);
        }
        else {
            $item[0] = itemKeranjang::create([
                'jumlah' => $request->jumlah,
                'keranjang_id' => $keranjang->id,
                'produk_id' => $produk->id,]
            );
            $request->session()->put('itemKeranjang', $item);
            return view('marketplace.pembayaran');
        }
        
    }

    public function incProduk($id)
    {
        $item = ItemKeranjang::find($id);
        $jumlah = $item->jumlah + 1;
        if($jumlah != $item->produk->jumlah){
            $item->update([
                'jumlah' => $jumlah
            ]);
        }
        return redirect()->route('keranjang');
    }

    public function decProduk($id)
    {
        $item = ItemKeranjang::find($id);
        $jumlah = $item->jumlah - 1;
        // dd($jumlah);
        if($jumlah == 0){
            $item->delete();
        } else {
            $item->update([
                'jumlah' => $jumlah
            ]);
        }
        return redirect()->route('keranjang');
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
