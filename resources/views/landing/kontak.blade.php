@extends('layouts.guest')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-body">

            <h2>Kontak Kami</h2>

            @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

            @endif

            <form action="{{ url('kontak') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label>Nama</label>

                    <input type="text"
                           name="nama"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>

                    <input type="email"
                           name="email"
                           class="form-control">
                </div>

                <div class="mb-3">
                    <label>Pesan</label>

                    <textarea name="pesan"
                              rows="5"
                              class="form-control"></textarea>
                </div>

                <button class="btn btn-primary">
                    Kirim Pesan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection