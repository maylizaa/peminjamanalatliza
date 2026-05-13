@extends('layouts.guest')

@section('content')

<div class="container mt-4">

    <h2>
        Kategori :
        {{ $kategori->nama_kategori }}
    </h2>

    <div class="row mt-4">

        @forelse($alat as $item)

        <div class="col-md-4 mb-3">

            <div class="card shadow-sm h-100">

                <img src="{{ asset('uploads/alat/'.$item->foto) }}"
                     class="card-img-top"
                     height="200">

                <div class="card-body">

                    <h5>{{ $item->nama_alat }}</h5>

                    <p>
                        {{ $item->deskripsi }}
                    </p>

                    <p>
                        Stok :
                        <b>{{ $item->stok }}</b>
                    </p>

                </div>

            </div>

        </div>

        @empty

        <div class="col-md-12">

            <div class="alert alert-danger">
                Data alat belum tersedia
            </div>

        </div>

        @endforelse

    </div>

</div>

@endsection