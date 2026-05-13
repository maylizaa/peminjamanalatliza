<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    {{-- Navbar --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#">
                    ☰
                </a>
            </li>
        </ul>

    </nav>

    {{-- Sidebar --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">
                Dashboard User
            </span>
        </a>

        <div class="sidebar">

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column">

                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Profile</p>
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
    </aside>

    {{-- Content --}}
    <div class="content-wrapper">

        <section class="content pt-3">
            <div class="container-fluid">

                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">
                            Selamat Datang 👋
                        </h3>
                    </div>

                    <div class="card-body">
                        Kamu berhasil login ke dashboard.
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi</h3>
                    </div>

                    <div class="card-body">
                        Ini adalah halaman dashboard sederhana menggunakan AdminLTE.
                    </div>
                </div>

            </div>
        </section>

    </div>

    {{-- Footer --}}
    <footer class="main-footer text-sm">
        <strong>Laravel AdminLTE</strong>
    </footer>

</div>

{{-- Font Awesome --}}
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</body>
</html>