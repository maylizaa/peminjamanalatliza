<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class TentangController extends Controller
{
    public function index()
    {
        return view('landing.tentang');
    }
}