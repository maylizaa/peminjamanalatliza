<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterAnggotaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FORM REGISTER
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        return view('auth.register-anggota');
    }

    /*
    |--------------------------------------------------------------------------
    | PROSES REGISTER
    |--------------------------------------------------------------------------
    */
    public function register(Request $request)
    {
        $request->validate([

            'nama' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ]);

        User::create([

            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'peminjam',

        ]);

        return redirect('/login-anggota')
            ->with('success', 'Register berhasil');
    }
}