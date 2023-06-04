<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AlamatUser;
use App\Models\MetodePembayaran;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


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
        // dd($user);
        return view('user.lihat-profil', compact('user'));
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
    public function editprofil()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('user.edit-profil', compact('user'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8'],
            'new_password_confirm' => ['required', 'min:8', 'same:new_password'],
        ]);

        $user = Auth::user();

        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->back();
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
        // dd($request);
        $id = Auth::id();
        $request->validate([
            'nama' => 'required',
            'email' => ['required', 'email', 'max:225'],
            'no_hp' => ['required', 'numeric'],
        ]);
        $user = User::find($id);
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);
        return redirect()->back();
    }

    public function updatefotoprofil(Request $request)
    {
        // dd($request);
        $id = Auth::id();
        $this->validate($request, [
            'gambar' => ['image','mimes:jpeg,png'],
        ]);

        $user = User::findOrFail($id);
        // Handle image upload if a new image is uploaded
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $imageName = time() . '_' . $gambar->getClientOriginalName();
            $imagePath = 'foto_user/' . $imageName;
            Storage::disk('public')->put($imagePath, file_get_contents($gambar));
        }
        $user = User::find($id);
        $user->update([
            'foto_profil' => $imageName
        ]);
        return redirect()->back();
    }

    public function updateAlamat(Request $request)
    {
        $request->validate([
            'alamat' => ['required'],
            'kecamatan' => ['required'],
            'kota' => ['required'],
            'provinsi' => ['required'],
            'kode_pos' => ['required', 'numeric'],
        ]);
        $id = Auth::id();
        $alamat = AlamatUser::where('user_id', $id)->first();
        
        $alamat->update([
            'alamat' => $request->alamat,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
        ]);
        // dd($alamat);
        // Return the updated address as a JSON response
        return redirect()->back();
    }

    public function storerekening(Request $request)
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
        return redirect()->back();
    }

    public function updaterekening(Request $request)
    {
        $request->validate([
            'rekening_id' => 'required', // Add validation for the ID field
            'no_rek' => 'required|numeric',
            'nama_metode' => 'required',
            'atas_nama' => 'required',
        ]);
    
        $rekening = MetodePembayaran::find($request->rekening_id); // Retrieve the record based on the ID field
        // dd($rekening);
        $rekening->update([
            'no_rek' => $request->no_rek,
            'nama_metode' => $request->nama_metode,
            'atas_nama' => $request->atas_nama,
        ]);
        return redirect()->back();
    }

    public function deleterekening($id)
    {
        $rekening = MetodePembayaran::find($id);
        // dd($rekening);
        $rekening->delete();
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
}
