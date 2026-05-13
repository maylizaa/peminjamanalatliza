<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Alat;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data user login (anggota)
        $anggota = Auth::user();

        // Total peminjaman milik anggota
        $totalPeminjaman = Peminjaman::where('anggota_id', $anggota->id)->count();

        // Peminjaman yang masih dipinjam
        $dipinjam = Peminjaman::where('anggota_id', $anggota->id)
            ->where('status', 'dipinjam')
            ->count();

        // Peminjaman yang sudah dikembalikan
        $dikembalikan = Peminjaman::where('anggota_id', $anggota->id)
            ->where('status', 'dikembalikan')
            ->count();

        // Data alat tersedia
        $alatTersedia = Alat::sum('stok');

        // Riwayat peminjaman terbaru
        $riwayat = Peminjaman::where('anggota_id', $anggota->id)
            ->latest()
            ->take(5)
            ->get();

        return view('anggota.dashboard.index', compact(
            'totalPeminjaman',
            'dipinjam',
            'dikembalikan',
            'alatTersedia',
            'riwayat'
        ));
    }
}