<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Sistem Peminjaman Alat
    </title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="container">

            <a class="navbar-brand"
               href="/">

                Peminjaman Alat

            </a>

        </div>

    </nav>

    {{-- CONTENT --}}
    <main>

        @yield('content')

    </main>

    {{-- FOOTER --}}
    <footer class="bg-light text-center p-3 mt-5">

        <small>
            © {{ date('Y') }} Sistem Peminjaman Alat
        </small>

    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>