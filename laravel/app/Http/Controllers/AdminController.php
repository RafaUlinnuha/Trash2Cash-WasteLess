<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Sampah;
use App\Models\AlamatUser;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totaluser= User::where('role', '!=', 'admin')->count();
        $bankuser= User::where('role', 'bank_sampah')->count();
        $anggotauser= User::where('role', 'anggota')->count();
        $order= Order::count();
        $setor= Sampah::count();
        $transaksiorder = 0;
        $transaksisetor = 0;
        foreach(Order::All() as $item){
            $transaksiorder += $item->pembayaran->harga;
        }
        foreach(Sampah::All() as $items){
            foreach($items->itemSampah as $item){
                $transaksisetor += $item->hargasatuan*$item->jumlah;
            }
        }
        // dd($transaksisetor);
        $user=[
            'total' => $totaluser,
            'bank' => $bankuser,
            'anggota' => $anggotauser,
            'order' => $order,
            'setor' => $setor,
            'transaksiorder' => $transaksiorder,
            'transaksisetor' => $transaksisetor,
        ];

        $order = Order::All();
        $sampah = Sampah::where('status','selesai')->get();

        return view('admin.dashboard', compact('user','sampah','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order()
    {
        $order= Sampah::Sortable()->paginate(10);
        // dd($order);
        return view('admin.order', compact('order'));

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
