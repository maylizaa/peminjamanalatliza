<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->paginate(6);

        return view('landing.artikel', compact('artikel'));
    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        return view('landing.detailartikel', compact('artikel'));
    }
}