<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AlamatUser;
use App\Models\MetodePembayaran;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        dd($user);

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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::id();
        $request->validate([
            'nama' => 'required',
            'email' => ['required', 'email', 'max:225'],
            'no_hp' => ['required', 'min:12', 'max:12'],
        ]);
        $user = User::find($id);
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
    }

    public function updateAlamat(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
        ]);
        $id = Auth::id();
        $alamat = AlamatUser::Where('user_id', $id)->first();
        $alamat->update([
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
        ]);
    }
    
    public function addRekening(Request $request)
    {
        $request->validate([
            'no_rek' => 'required',
            'nama_metode' => 'required',
            'atas_nama' => 'required',
        ]);
        $id = Auth::id();
        MetodePembayaran::create([
            'no_rek' => $request->no_rek,
            'nama_metode' => $request->nama_metode,
            'atas_nama' => $request->atas_nama,
            'user_id' => $id
        ]);
    }

    public function updateRekening(Request $request)
    {
        $request->validate([
            'no_rek' => 'required',
            'nama_metode' => 'required',
            'atas_nama' => 'required',
        ]);
        $id = Auth::id();
        $rekening = MetodePembayaran::Where('user_id', $id)->first();
        $rekening->update([
            'no_rek' => $request->no_rek,
            'nama_metode' => $request->nama_metode,
            'atas_nama' => $request->atas_nama,
            'user_id' => $id
        ]);
    }

    public function deleteRekening($id)
    {
        $rekening = MetodePembayaran::find($id);
        $rekening->delete();
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
