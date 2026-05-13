<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class namaseederpeminjamanalatmayliza extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        /*
        |--------------------------------------------------------------------------
        | KATEGORI
        |--------------------------------------------------------------------------
        */
        DB::table('kategori')->insert([

            [
                'nama_kategori' => 'Elektronik',
                'deskripsi' => 'Peralatan elektronik',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_kategori' => 'Olahraga',
                'deskripsi' => 'Peralatan olahraga',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_kategori' => 'Multimedia',
                'deskripsi' => 'Peralatan multimedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | ALAT
        |--------------------------------------------------------------------------
        */
        DB::table('alat')->insert([

            [
                'kategori_id' => 1,
                'nama_alat' => 'Laptop Asus',
                'merk' => 'Asus',
                'stok' => 10,
                'kondisi' => 'baik',
                'gambar' => 'laptop.jpg',
                'deskripsi' => 'Laptop untuk peminjaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kategori_id' => 2,
                'nama_alat' => 'Bola Futsal',
                'merk' => 'Specs',
                'stok' => 15,
                'kondisi' => 'baik',
                'gambar' => 'bola.jpg',
                'deskripsi' => 'Bola futsal sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kategori_id' => 3,
                'nama_alat' => 'Proyektor Epson',
                'merk' => 'Epson',
                'stok' => 5,
                'kondisi' => 'baik',
                'gambar' => 'proyektor.jpg',
                'deskripsi' => 'Proyektor ruang kelas',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */
        DB::table('users')->insert([

            [
                'nama' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Petugas',
                'username' => 'petugas',
                'email' => 'petugas@gmail.com',
                'password' => Hash::make('petugas123'),
                'role' => 'petugas',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Peminjam',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'role' => 'peminjam',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | PEMINJAMAN
        |--------------------------------------------------------------------------
        */
        DB::table('peminjaman')->insert([

            [
                'user_id' => 3,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => now()->addDays(3),
                'status' => 'dipinjam',
                'catatan' => 'Dipinjam untuk presentasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | DETAIL PEMINJAMAN
        |--------------------------------------------------------------------------
        */
        DB::table('detail_peminjaman')->insert([

            [
                'peminjaman_id' => 1,
                'alat_id' => 1,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'peminjaman_id' => 1,
                'alat_id' => 3,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | PENGEMBALIAN
        |--------------------------------------------------------------------------
        */
        DB::table('pengembalian')->insert([

            [
                'peminjaman_id' => 1,
                'tanggal_dikembalikan' => now(),
                'denda' => 0,
                'catatan' => 'Sudah dikembalikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

    }
}