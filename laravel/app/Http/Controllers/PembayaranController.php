<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembayaran;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $order = Order::Where('user_id',$id)->first();
        $pembayaran = $order->pembayaran;
        // sekalian ngecek udh lewat batas pembayaran atau engga
        // kl udh lewat status berubah jadi gagal.
        $now = Carbon::now();
        if($pembayaran->batas <= $now){
            $pembayaran->update([
                'status' => 'batal'
            ]);
        }
        dd($pembayaran);
        
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
    public function store($orderid)
    {
        $userid = Auth::id();
        $order = Order::Where('user_id',$userid)->first();
        $item = $order->itemOrder;
        $harga = 0;
        $batas = Carbon::now('+07:00')->addDay(2)->toDateTimeString();
        //dd($batas);
        foreach ( $item as $produk){
            $harga = $harga + ($produk->jumlah*$produk->produk->harga);
        }
        Pembayaran::create([
            'jumlah' => $harga,
            'status' => 'menunggu',
            'batas_pembayaran' => $batas,
            'order_id' => $orderid,
        ]);
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
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $image_path = $request->file('image')->store('image', 'public');
        $pembayaran::find($id);
        $pembayaran->update([
            'bukti_pembayaran' => $image_path,
        ]);
    }

    public function konfirmasi($id)
    {
        $pembayaran::find($id);
        $pembayaran->update([
            'status' => 'selesai',
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
        //
    }
}
