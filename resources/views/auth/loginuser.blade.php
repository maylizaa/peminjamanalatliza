@extends('layouts.guest')

@section('title', 'Login User')

@section('content')

<style>
    body{
        font-family: 'Poppins', sans-serif;
        background: #f4f7fb;
    }

    .login-wrapper{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 15px;
        position: relative;
        overflow: hidden;
    }

    .login-wrapper::before{
        content: '';
        position: absolute;
        width: 350px;
        height: 350px;
        background: rgba(13,110,253,0.08);
        border-radius: 50%;
        top: -120px;
        right: -120px;
    }

    .login-wrapper::after{
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(13,110,253,0.08);
        border-radius: 50%;
        bottom: -120px;
        left: -120px;
    }

    .login-card{
        width: 100%;
        max-width: 1000px;
        background: white;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        position: relative;
        z-index: 2;
    }

    .left-side{
        background: linear-gradient(135deg,#0d6efd,#0056d6);
        color: white;
        padding: 60px 40px;
        height: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .left-side i{
        font-size: 70px;
        margin-bottom: 20px;
    }

    .left-side h2{
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .left-side p{
        font-size: 17px;
        line-height: 1.8;
    }

    .right-side{
        padding: 60px 50px;
    }

    .login-title{
        font-size: 38px;
        font-weight: 700;
        color: #1a1f36;
    }

    .login-subtitle{
        color: #6c757d;
        margin-bottom: 35px;
    }

    .form-label{
        font-weight: 600;
        color: #1a1f36;
    }

    .input-group{
        position: relative;
    }

    .input-group i{
        position: absolute;
        top: 18px;
        left: 15px;
        color: #6c757d;
        z-index: 5;
    }

    .form-control{
        height: 55px;
        border-radius: 12px;
        padding-left: 45px;
        border: 1px solid #dbe2ef;
    }

    .form-control:focus{
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.15rem rgba(13,110,253,.15);
    }

    .btn-login{
        height: 55px;
        border-radius: 12px;
        background: linear-gradient(135deg,#0d6efd,#0056d6);
        border: none;
        font-size: 17px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-login:hover{
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(13,110,253,.3);
    }

    @media(max-width:768px){

        .left-side{
            display: none;
        }

        .right-side{
            padding: 40px 25px;
        }

        .login-title{
            font-size: 30px;
        }
    }
</style>

<div class="login-wrapper">

    <div class="login-card">

        <div class="row g-0">

            <!-- LEFT -->
            <div class="col-md-5">

                <div class="left-side">

                    <i class="fas fa-hand-holding-heart"></i>

                    <h2>peminjamanalat</h2>

                    <p>
                        Sistem informasi peminjaman alat
                        untuk mempermudah pengelolaan
                    </p>

                    <img src="{{ asset('foto/asset/login.png') }}"
                         class="img-fluid mt-4">

                </div>

            </div>

            <!-- RIGHT -->
            <div class="col-md-7">

                <div class="right-side">

                    <h2 class="login-title">
                        Login User
                    </h2>

                    <p class="login-subtitle">
                        Silakan login untuk melanjutkan
                    </p>

                    {{-- ALERT --}}
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('login-user.proses') }}"
                          method="POST">

                        @csrf

                        <!-- username -->
                        <div class="mb-4">

                            <label class="form-label">
                                username
                            </label>

                            <div class="input-group">

                                <i class="fas fa-user"></i>

                                <input type="text"
                                       name="username"
                                       class="form-control"
                                       placeholder="Masukkan username"
                                       required>

                            </div>

                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-4">

                            <label class="form-label">
                                Password
                            </label>

                            <div class="input-group">

                                <i class="fas fa-lock"></i>

                                <input type="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Masukkan password"
                                       required>

                            </div>

                        </div>

                        <!-- REMEMBER -->
                        <div class="d-flex justify-content-between mb-4">

                            <div class="form-check">

                                <input type="checkbox"
                                       class="form-check-input">

                                <label class="form-check-label">
                                    Ingat saya
                                </label>

                            </div>

                            <a href="#"
                               class="text-decoration-none">
                                Lupa password?
                            </a>

                        </div>

                        <!-- BUTTON -->
                        <button type="submit"
                                class="btn btn-primary btn-login w-100">

                            <i class="fas fa-sign-in-alt me-2"></i>
                            Login

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection