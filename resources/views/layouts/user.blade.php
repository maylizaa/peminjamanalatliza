<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <title>@yield('title')</title>

    <!-- AdminLTE -->
    <link rel="stylesheet"
          href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

    {{-- Navbar --}}
    @include('components.navbar.navbar')

    {{-- Sidebar --}}
    @include('components.sidebar.sidebar')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.footer.footer')

</div>

<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>