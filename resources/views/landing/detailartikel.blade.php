@extends('layouts.guest')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-body">

            <h2>{{ $artikel->judul }}</h2>

            <hr>

            @if($artikel->foto)

            <img src="{{ asset('uploads/artikel/'.$artikel->foto) }}"
                 class="img-fluid mb-3">

            @endif

            <p>
                {!! nl2br(e($artikel->isi)) !!}
            </p>

        </div>

    </div>

</div>

@endsection