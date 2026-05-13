<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        /*
        |--------------------------------------------------------------------------
        | TABLE KATEGORI
        |--------------------------------------------------------------------------
        */
        Schema::create('kategori', function (Blueprint $table) {

            $table->id();

            $table->string('nama_kategori');

            $table->text('deskripsi')->nullable();

            $table->timestamps();

        });

        /*
        |--------------------------------------------------------------------------
        | TABLE ALAT
        |--------------------------------------------------------------------------
        */
        Schema::create('alat', function (Blueprint $table) {

            $table->id();

            $table->foreignId('kategori_id')
                ->constrained('kategori')
                ->cascadeOnDelete();

            $table->string('nama_alat');

            $table->string('merk')->nullable();

            $table->integer('stok')->default(0);

            $table->enum('kondisi', [
                'baik',
                'rusak'
            ])->default('baik');

            $table->string('gambar')->nullable();

            $table->text('deskripsi')->nullable();

            $table->timestamps();

        });

        /*
        |--------------------------------------------------------------------------
        | TABLE USERS
        |--------------------------------------------------------------------------
        */
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            $table->string('nama');

            $table->string('username')->unique();

            $table->string('email')->unique()->nullable();

            $table->string('password');

            $table->enum('role', [
                'admin',
                'petugas',
                'peminjam'
            ])->default('peminjam');

            $table->rememberToken();

            $table->timestamps();

        });

        /*
        |--------------------------------------------------------------------------
        | TABLE PEMINJAMAN
        |--------------------------------------------------------------------------
        */
        Schema::create('peminjaman', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->date('tanggal_pinjam');

            $table->date('tanggal_kembali');

            $table->enum('status', [

                'menunggu',
                'dipinjam',
                'dikembalikan',
                'ditolak'

            ])->default('menunggu');

            $table->text('catatan')->nullable();

            $table->timestamps();

        });

        /*
        |--------------------------------------------------------------------------
        | TABLE DETAIL PEMINJAMAN
        |--------------------------------------------------------------------------
        */
        Schema::create('detail_peminjaman', function (Blueprint $table) {

            $table->id();

            $table->foreignId('peminjaman_id')
                ->constrained('peminjaman')
                ->cascadeOnDelete();

            $table->foreignId('alat_id')
                ->constrained('alat')
                ->cascadeOnDelete();

            $table->integer('jumlah');

            $table->timestamps();

        });

        /*
        |--------------------------------------------------------------------------
        | TABLE PENGEMBALIAN
        |--------------------------------------------------------------------------
        */
        Schema::create('pengembalian', function (Blueprint $table) {

            $table->id();

            $table->foreignId('peminjaman_id')
                ->constrained('peminjaman')
                ->cascadeOnDelete();

            $table->date('tanggal_dikembalikan');

            $table->integer('denda')->default(0);

            $table->text('catatan')->nullable();

            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('pengembalian');

        Schema::dropIfExists('detail_peminjaman');

        Schema::dropIfExists('peminjaman');

        Schema::dropIfExists('users');

        Schema::dropIfExists('alat');

        Schema::dropIfExists('kategori');

    }
};