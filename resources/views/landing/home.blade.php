@extends('layouts.guest')

@section('content')

<div class="container mt-4">

    {{-- HERO SECTION --}}
    <div class="bg-primary text-white p-5 rounded shadow-sm">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h1 class="fw-bold">
                    Selamat Datang
                </h1>

                <p class="lead">
                    Sistem Informasi Peminjaman Alat
                </p>

                <p>
                    Aplikasi peminjaman alat berbasis Laravel
                    untuk mempermudah pengelolaan alat,
                    peminjaman, dan pengembalian alat.
                </p>

            </div>

            <div class="col-md-4 text-center">

                {{-- LOGIN USER --}}
                <a href="{{ url('/login-user') }}"
                   class="btn btn-light btn-lg mb-3 w-100">

                    Login User

                </a>

                {{-- LOGIN ANGGOTA --}}
                <a href="{{ url('/login-anggota') }}"
                   class="btn btn-warning btn-lg mb-3 w-100">

                    Login Anggota

                </a>

                {{-- REGISTER --}}
                <a href="{{ url('/register-anggota') }}"
                   class="btn btn-success btn-lg w-100">

                    Register

                </a>

            </div>

        </div>

    </div>

    {{-- KATEGORI --}}
    <h3 class="mt-5 mb-3">

        Kategori Alat

    </h3>

    <div class="row">

        @forelse($kategori as $item)

        <div class="col-md-3 mb-3">

            <div class="card shadow-sm h-100 border-0">

                <div class="card-body text-center">

                    <h5 class="fw-bold">

                        {{ $item->nama_kategori }}

                    </h5>

                    <p class="text-muted small">

                        {{ $item->deskripsi }}

                    </p>

                    <a href="#"
                       class="btn btn-primary btn-sm">

                        Lihat

                    </a>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12">

            <div class="alert alert-danger">

                Data kategori belum tersedia

            </div>

        </div>

        @endforelse

    </div>

    {{-- ALAT TERBARU --}}
    <h3 class="mt-5 mb-3">

        Alat Terbaru

    </h3>

    <div class="row">

        @forelse($alat as $item)

        <div class="col-md-4 mb-3">

            <div class="card shadow-sm h-100 border-0">

                {{-- GAMBAR --}}
                @if($item->gambar)

                    <img src="{{ asset('uploads/alat/'.$item->gambar) }}"
                         class="card-img-top"
                         height="220"
                         style="object-fit: cover;">

                @else

                    <img src="https://via.placeholder.com/500x300"
                         class="card-img-top"
                         height="220"
                         style="object-fit: cover;">

                @endif

                <div class="card-body">

                    <h5 class="fw-bold">

                        {{ $item->nama_alat }}

                    </h5>

                    <p class="mb-1">

                        <strong>Merk:</strong>
                        {{ $item->merk }}

                    </p>

                    <p class="mb-1">

                        <strong>Stok:</strong>
                        {{ $item->stok }}

                    </p>

                    <p class="mb-1">

                        <strong>Kondisi:</strong>
                        {{ $item->kondisi }}

                    </p>

                    <p class="text-muted">

                        {{ $item->deskripsi }}

                    </p>

                    <button class="btn btn-success btn-sm">

                        Pinjam Alat

                    </button>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12">

            <div class="alert alert-danger">

                Data alat belum tersedia

            </div>

        </div>

        @endforelse

    </div>

</div>

@endsection