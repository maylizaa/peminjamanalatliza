@extends('layouts.guest')

@section('content')

<div class="container mt-4">

    <h2>Daftar Artikel</h2>

    <div class="row">

        @foreach($artikel as $item)

        <div class="col-md-4 mb-3">

            <div class="card shadow-sm h-100">

                <div class="card-body">

                    <h5>{{ $item->judul }}</h5>

                    <p>
                        {{ Str::limit($item->isi, 120) }}
                    </p>

                    <a href="{{ url('artikel/'.$item->slug) }}"
                       class="btn btn-primary btn-sm">
                        Detail
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

    <div class="mt-3">
        {{ $artikel->links() }}
    </div>

</div>

@endsection