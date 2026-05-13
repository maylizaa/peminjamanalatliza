<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAnggotaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FORM LOGIN ANGGOTA
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        return view('auth.login-anggota');
    }

    /*
    |--------------------------------------------------------------------------
    | PROSES LOGIN ANGGOTA
    |--------------------------------------------------------------------------
    */
    public function login(Request $request)
    {
        $credentials = $request->validate([

            'username' => 'required',
            'password' => 'required',

        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('/')
                ->with('success', 'Login anggota berhasil');
        }

        return back()->withErrors([

            'username' => 'Username atau password salah'

        ])->onlyInput('username');
    }
}