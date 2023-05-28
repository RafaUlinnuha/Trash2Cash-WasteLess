<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembayaran;
use App\Models\Order;
use App\Models\User;
use App\Models\Produk;
use App\Models\ItemOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



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
        $orders = Order::where('user_id',$id)->get();
        // foreach($orders as $order){
        //     dd($order->id);
        // }
        return view('user.pembelian', compact('orders'));
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
    public function updateBukti(Request $request, $id)
    {
        // dd($id);
        $this->validate($request, [
            'gambar' => 'required|image|mimes:jpg,png,jpeg',
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $imageName = time() . '_' . $gambar->getClientOriginalName();
            $imagePath = 'bukti_pembayaran/' . $imageName;
            Storage::disk('public')->put($imagePath, file_get_contents($gambar));
        }
        $pembayaran = Pembayaran::find($id);
        $pembayaran->update([
            'bukti_pembayaran' => $imagePath,
            'status' => 'menunggu'
        ]);
        return redirect()->back();
    }

    //konfirmasi order oleh pelanggan
    public function konfirmasi($id)
    {
        $pembayaran = Pembayaran::find($id);
        // dd($pembayaran);
        $order = Order::where('id', $pembayaran->order_id)->first();
        $order->update([
            'status' => 'selesai',
        ]);
        // dd($order);
        return redirect()->back();
    }

    //oleh toko
    public function konfirmasiPembayaran($id)
    {
        $pembayaran = Pembayaran::find($id);
        // dd($pembayaran);
        $pembayaran->update([
            'status' => 'selesai',
        ]);
        // dd($order);
        return redirect()->back();
    }

    //oleh toko
    public function konfirmasiKirim($id)
    {
        // dd($id);
        $item = ItemOrder::where('id',$id)->first();
        $order = Order::where('id',$item->order_id)->first();
        // dd($order);    
        $order->update([
            'status' => 'dikirim',
        ]);
        // dd($order);
        return redirect()->back();
    }

    //oleh toko/pelanggan
    public function batal($id)
    {
        $pembayaran = Pembayaran::find($id);
        $order = Order::where('id', $pembayaran->order_id)->first();
        $pembayaran->update([
            'status' => 'batal'
        ]);
        $order->update([
            'status' => 'batal',
        ]);
        // dd($order);
        return redirect()->back();
    }


    //pendapatan toko
    public function indexpendapatan()
    {
        $id = Auth::id();
        $user = User::find($id);
        $items = ItemOrder::whereHas('produk', function ($query) use ($id) {
            $query->where('user_id', $id);
        })->get();
        $jumlahKeseluruhan=0;
        // dd($items);
        foreach($items as $item){
            $jumlahKeseluruhan += $item->jumlah * $item->produk->harga;
        }
        // Get the current month's start and end dates
        $currentMonthStart = Carbon::now()->startOfMonth();
        $currentMonthEnd = Carbon::now()->endOfMonth();
        
        $items_bulan = $items-> whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])->All();
        $totalperbulan = 0;
        foreach($items_bulan as $item){
            $totalperbulan += $item->jumlah * $item->produk->harga;
        }
        // dd($totalperbulan);

        //produk
        $mostOrderedProduct = DB::table('item_orders')
                    ->select('produk_id', DB::raw('count(*) as total_orders'))
                    ->groupBy('produk_id')
                    ->orderBy('total_orders', 'desc')
                    ->first();
        $product = Produk::find($mostOrderedProduct->produk_id);
        // dd($product);
        $pendapatan = [
            'totalsemua' => $jumlahKeseluruhan,
            'totalbulanini' => $totalperbulan,
            'produkterlaris' => $product->nama
        ];
        // dd($pendapatan);
        return view('toko.pendapatan', compact('pendapatan', 'items'));
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
