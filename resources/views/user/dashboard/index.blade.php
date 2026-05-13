<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard User</title>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

    {{-- Navbar --}}
    @include('components.navbar.navbar')

    {{-- Sidebar --}}
    @include('components.sidebar.sidebar')

    {{-- Content --}}
    <div class="content-wrapper">

        <section class="content-header">

            <div class="container-fluid">

                <h1>Dashboard User</h1>

            </div>

        </section>

        <section class="content">

            <div class="container-fluid">

                <div class="card">

                    <div class="card-body">

                        Selamat datang di Dashboard User

                    </div>

                </div>

            </div>

        </section>

    </div>

    {{-- Footer --}}
    @include('components.footer.footer')

</div>

<!-- Script -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>