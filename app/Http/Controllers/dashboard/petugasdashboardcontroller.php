<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Anggota;

class DashboardController extends Controller
{
    public function index()
    {
        // Total data
        $totalAlat = Alat::count();
        $totalAnggota = Anggota::count();
        $totalPeminjaman = Peminjaman::count();
        $totalPengembalian = Pengembalian::count();

        // Status peminjaman
        $dipinjam = Peminjaman::where('status', 'dipinjam')->count();
        $menunggu = Peminjaman::where('status', 'menunggu')->count();
        $dikembalikan = Peminjaman::where('status', 'dikembalikan')->count();

        // Alat dengan stok rendah (<=5)
        $alatStokRendah = Alat::where('stok', '<=', 5)->count();

        // Data peminjaman terbaru
        $peminjamanTerbaru = Peminjaman::with('anggota')
            ->latest()
            ->take(5)
            ->get();

        return view('petugas.dashboard.index', compact(
            'totalAlat',
            'totalAnggota',
            'totalPeminjaman',
            'totalPengembalian',
            'dipinjam',
            'menunggu',
            'dikembalikan',
            'alatStokRendah',
            'peminjamanTerbaru'
        ));
    }
}