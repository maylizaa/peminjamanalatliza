<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Alat;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();

        return view('landing.kategori', compact('kategori'));
    }

    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);

        $alat = Alat::where('kategori_id', $id)->get();

        return view('landing.detailkategori', compact(
            'kategori',
            'alat'
        ));
    }
}