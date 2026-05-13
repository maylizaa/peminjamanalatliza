<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Anggota;
use App\Models\Alat;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Denda;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik Dashboard
        $totalUser          = User::count();
        $totalAnggota       = Anggota::count();
        $totalAlat          = Alat::count();
        $totalPeminjaman    = Peminjaman::count();
        $totalPengembalian  = Pengembalian::count();

        // Peminjaman aktif
        $peminjamanAktif = Peminjaman::where('status', 'dipinjam')->count();

        // Total denda
        $totalDenda = Denda::sum('jumlah_denda');

        // Data peminjaman terbaru
        $peminjamanTerbaru = Peminjaman::latest()
            ->take(5)
            ->get();

        return view('user.dashboard.index', compact(
            'totalUser',
            'totalAnggota',
            'totalAlat',
            'totalPeminjaman',
            'totalPengembalian',
            'peminjamanAktif',
            'totalDenda',
            'peminjamanTerbaru'
        ));
    }
}