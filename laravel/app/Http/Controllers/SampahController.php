<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sampah;
use App\Models\ItemSampah;
use App\Models\KategoriSampah;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;




class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $ceksampah = Sampah::where('anggota_user_id', $id)->exists();
        if($ceksampah){
            $latestsampah = Sampah::orderByDesc('created_at')->first();
            if($latestsampah->waktu_jemput != null){
                $sampah = Sampah::create([
                    'status' => 'ongoing',
                    'anggota_user_id' => $id,
                ]);
            // dd($sampah);
            }else{
                $sampah=$latestsampah;
            }
        }else{
            $sampah = Sampah::create([
                'status' => 'ongoing',
                'anggota_user_id' => $id,
            ]);
        }
        // dd($sampah);
        return view('anggota.daur-ulang', compact('sampah'));
    }

    //pendapatan
    public function homeview()
    {
        $user = Auth::user();
        $sampah = Sampah::where('anggota_user_id', $user->id)->where('status','selesai')->get();
        $jumlahKeseluruhan=0;
        $totalkg = 0;
        foreach($sampah as $item){
            foreach($item->itemSampah as $itemsampah){
                $jumlahKeseluruhan += $itemsampah->jumlah * $itemsampah->hargasatuan;
                $totalkg += $itemsampah->jumlah;
            }
        }

        $pendapatan = [
            'totalsemua' => $jumlahKeseluruhan,
            'totalkg' => $totalkg
        ];
        // dd($pendapatan);
        return view('anggota.home', compact('pendapatan', 'sampah'));
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
        //dd($request);
        $sampah = Sampah::orderByDesc('created_at')->first();
        $id = Auth::id();
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required',
        ]);

        $kategori = KategoriSampah::where('nama', $request->kategori)->first();
        
        $itemSampah = ItemSampah::create([
            'nama_jenis' => $request->nama,
            'jumlah' => $request->jumlah,
            'hargasatuan' => $kategori->harga,
            'deskripsi' => $request->deskripsi,
            'kategori_sampah_id' => $kategori->id,
            'sampah_id' => $sampah->id,
        ]);
        return redirect()->back()->with('success', 'Sampah berhasil disimpan');

        //dd($itemSampah);    
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
    public function setorKonfirmasiView($id)
    {
        $user = Auth::user();
        $kota= $user->alamatUser->kota;
        // dd($kota);
        $sampah = Sampah::find($id);
        $bank = User::where('role', 'bank_sampah')
                ->whereHas('alamatUser', function ($query) use ($kota) {
                    $query->where('kota', $kota);
                })
                ->get();
        // dd($bank);
        return view('anggota.konfirmasi-setor', compact('sampah', 'bank'));
    }

    public function bankSetorKonfirmasiView($id)
    {
        $sampah = Sampah::find($id);
        // dd($user);
        return view('banksampah.konfirmasi-setor', compact('sampah'));
    }

    public function statusView()
    {
        $id = Auth::id();
        $sampah = Sampah::with('bankUser', 'itemSampah')
        ->where('anggota_user_id', $id)
        ->whereNotNull('bank_user_id')
        ->orderByDesc('updated_at')
        ->get();
        // dd($sampah);
        return view('anggota.status-setor', compact('sampah'));
    }

    public function bankStatusView()
    {
        $id = Auth::id();
        $sampah = Sampah::with('anggotaUser', 'itemSampah')
        ->where('bank_user_id', $id)
        ->orderByDesc('updated_at')
        ->get();
        // dd($sampah);
        return view('banksampah.status-setor', compact('sampah'));
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
        // dd($request);
        $sampah = Sampah::find($id);
        // dd($sampah);
        $request->validate([
            'bank' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
        ]);

        $sampah->update([
            'tgl_jemput' => $request->tanggal,
            'waktu_jemput' => $request->waktu,
            'bank_user_id' => $request->bank,
        ]);
        // dd($sampah);
        return redirect()->route('anggota-status');
    }

    public function updateSampahBank($id)
    {
        $sampah= Sampah::find($id);
        $sampah->update([
            'status' => 'selesai'
        ]);
        // dd($sampah);
        return redirect()->route('bank-status');
    }

    public function itemBankUpdate(Request $request, $id)
    {
        // dd($request);
        $item = ItemSampah::find($id);
        $request->validate([
            'jumlah' => 'required',
            'harga' => 'required',
        ]);
        $item->update([
            'jumlah' => $request->jumlah,
            'hargasatuan' => $request->harga,
        ]);
        // dd($item);
        return redirect()->back();
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

    public function incSampah($id)
    {
        $item = ItemSampah::find($id);
        $jumlah = $item->jumlah + 1;
        
        $item->update([
            'jumlah' => $jumlah
        ]);
        return redirect()->route('anggota-daur');
    }
    public function decSampah($id)
    {
        $item = ItemSampah::find($id);
        $jumlah = $item->jumlah - 1;
        // dd($jumlah);
        if($jumlah == 0){
            $item->delete();
        } else {
            $item->update([
                'jumlah' => $jumlah
            ]);
        }
        return redirect()->back();
    }

    //pendapatan
    public function indexpendapatan()
    {
        $user = Auth::user();
        $sampah = Sampah::where('anggota_user_id', $user->id)->where('status','selesai')->get();
        $jumlahKeseluruhan=0;
        $totalperbulan = 0;
        $totalkg = 0;
        $now = Carbon::now();
        // dd($items);
        foreach($sampah as $item){
            foreach($item->itemSampah as $itemsampah){
                $jumlahKeseluruhan += $itemsampah->jumlah * $itemsampah->hargasatuan;
                $totalkg += $itemsampah->jumlah;
                if ($itemsampah->created_at->month == $now->month && $itemsampah->created_at->year == $now->year){
                    $totalperbulan += $itemsampah->jumlah * $itemsampah->hargasatuan;
                }
            }
        }

        $pendapatan = [
            'totalsemua' => $jumlahKeseluruhan,
            'totalbulanini' => $totalperbulan,
            'totalkg' => $totalkg
        ];
        // dd($pendapatan);
        return view('anggota.pendapatan', compact('pendapatan', 'sampah'));
    }
}
