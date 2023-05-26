<?php

namespace App\Http\Controllers;
use App\Models\Keranjang;
use App\Models\ItemKeranjang;
use App\Models\Produk;
use App\Models\Order;
use App\Models\User;
use App\Models\ItemOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indextoko()
    {
        $id = Auth::id();
        $user = User::find($id);
        $orders = $user->produk()->whereHas('itemOrder', function ($query) {
            $query->whereHas('order', function ($query) {
                // Add any additional conditions for the order if needed
            });
        })
        // ->with(['itemOrder.order.user', 'itemOrder.order.pembayaran'])
        ->get();
        // dd($orders[0]->itemOrder->first()->order->pembayaran);
        return view('toko.status-order', compact('orders'));
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
    public function indexpembeli()
    {
        $id = Auth::id();
        $orders = Order::where('user_id', $id)->get();
        // dd($orders);
        return view('user.pembelian', compact('orders'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function rincianPesanan(Request $request)
    {
        $selectedCheckboxes = $request->input('checkboxes');
        $id = Auth::id();
        $order = Order::where('user_id', '=', $id)
                 ->where('status', '=', 'ongoing')
                 ->first();
        // dd($selectedCheckboxes);
        $i = 0;
        foreach ($selectedCheckboxes as $checkboxValue) {
            $itemKeranjang[$i] = ItemKeranjang::find($checkboxValue);
            $i++;
        }
        return view('marketplace.pembayaran', compact('itemKeranjang'));
    }

    public function store(Request $request)
    {
        $id = Auth::id();
        $order = Order::create([
            'user_id' =>$id
        ]);
        // dd($request->query->keys());
        foreach ($request->query->keys() as $item_id) {
            $itemKeranjang = ItemKeranjang::find($item_id);
            // dd($itemKeranjang);
            ItemOrder::create([
                'jumlah' => $itemKeranjang->jumlah,
                'produk_id' => $itemKeranjang->produk->id,
                'order_id' => $order->id
            ]);
            $produk = $itemKeranjang->produk;
            $newjml = $produk->jumlah - $itemKeranjang->jumlah;
            if($newjml <= 0){
                $produk->delete();
            } else {
                $produk->update([
                'jumlah' => $newjml
                ]);
            }
            
            $itemKeranjang->delete();
        }

        return redirect()->route('home-page');
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
