<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua kategori
        $kategori = Kategori::latest()->get();

        // Ambil 3 alat terbaru
        $alat = Alat::latest()->take(3)->get();

        return view('landing.home', compact(
            'kategori',
            'alat'
        ));
    }
}