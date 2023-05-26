<?php

namespace App\Http\Controllers;
use App\Models\Keranjang;
use App\Models\ItemKeranjang;
use App\Models\Produk;
use App\Models\Order;
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
    public function index()
    {
        //
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
