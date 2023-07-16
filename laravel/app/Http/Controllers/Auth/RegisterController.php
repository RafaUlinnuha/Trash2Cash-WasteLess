<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\AlamatUser;
use App\Models\Keranjang;
use App\Models\Order;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
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
        // dd($request);
        $request->validate([
            'role' => 'required',
            'nama' => 'required',
            'email' => ['required', 'email','unique:users', 'max:225'],
            'no_hp' => ['required', 'min:10', 'max:16'],
            'password' => ['required', 'min:8'],
            'confirm_password' => ['required', 'same:password']
        ]);

        $role='';
        if($request->role == 'Anggota Bank Sampah'){
            $role='anggota';
        } elseif($request->role == 'Bank Sampah'){
            $role='bank_sampah';
        } else {
            $role='pembeli';
        }

        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
            'role' => $role,
            'no_hp' => $request->no_hp
        ]);
        
        Keranjang::create([
            'user_id' => $user->id
        ]);

        AlamatUser::create([
            'user_id' => $user->id
        ]);

        // dd($user);
        return redirect()->route('login.view')->with('status', 'Your Account Has Been Successfully Registered!');
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
