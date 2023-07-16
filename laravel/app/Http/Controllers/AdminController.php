<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Sampah;
use App\Models\AlamatUser;
use App\Models\Keranjang;
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
            $transaksiorder += $item->pembayaran->total;
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

        $order = Order::latest()->paginate(5);
        $sampah = Sampah::where('status','selesai')->latest()->paginate(5);

        return view('admin.dashboard', compact('user','sampah','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order()
    {
        $order= Order::Sortable()->latest()->paginate(10);
        // dd($order);
        return view('admin.order', compact('order'));

    }

    public function penyetoran()
    {
        $sampah= Sampah::Sortable()->where('status','selesai')->paginate(10);
        // dd($sampah);
        return view('admin.penyetoran', compact('sampah'));

    }
    
    public function rincianSetor($id)
    {
        $sampah = Sampah::find($id);
        // dd($sampah);
        return view('admin.rincian-setor', compact('sampah'));
    }

    public function userview()
    {
        $user= User::latest()->Paginate(10);
        // dd($user);
        return view('admin.user', compact('user'));

    }
    
    public function rincianUser($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('admin.rincian-user', compact('user'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addUser(Request $request)
    {
        // dd($request);
        $request->validate([
            'role' => 'required',
            'nama' => 'required',
            'email' => ['required', 'email','unique:users', 'max:225'],
            'no_hp' => ['required', 'min:10', 'max:16'],
            'password' => ['required', 'min:8'],
            'confirm_password' => ['required', 'same:password']
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
            'role' => $request->role,
            'no_hp' => $request->no_hp
        ]);
        
        Keranjang::create([
            'user_id' => $user->id
        ]);

        AlamatUser::create([
            'user_id' => $user->id
        ]);
        return redirect()->route('admin.user')->with('success','Berhasil Membuat User Baru');

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
