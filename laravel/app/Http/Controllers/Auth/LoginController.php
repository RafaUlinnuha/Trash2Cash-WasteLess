<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
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

    public function authenticate(Request $request)
    {
        //$request->dd();
        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            //echo ('yoo mantap baby');
            return redirect()->route('landing-page');
        }
        else{
            return redirect()->back()->with('error', 'Invalid email or password');
        }
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing-page');
    }


}
