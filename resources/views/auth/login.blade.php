<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- AdminLTE -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #1d3557, #457b9d);
        }

        .login-box {
            width: 400px;
        }

        .card {
            border-radius: 10px;
        }

        .login-logo a {
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body class="hold-transition login-page">

<div class="login-box">

    <div class="login-logo">
        <a href="#"><b>Peminjaman</b>Alat</a>
    </div>

    <div class="card shadow-lg">
        <div class="card-body login-card-body">

            <p class="login-box-msg">
                Silahkan login terlebih dahulu
            </p>

            <form action="/login-user" method="POST">
                @csrf

                <div class="input-group mb-3">
                    <input type="text"
                           class="form-control"
                           name="username"
                           placeholder="Username">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password"
                           class="form-control"
                           name="password"
                           placeholder="Password">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <button type="submit"
                        class="btn btn-primary btn-block">
                    Login
                </button>

            </form>

        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>