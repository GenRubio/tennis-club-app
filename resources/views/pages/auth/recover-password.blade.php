@extends('layouts.app')

@section('personal-style')
    <style>
        .brand-wrapper {
            margin-bottom: 19px;
        }

        .brand-wrapper .logo {
            height: 37px;
        }

        .login-card {
            border: 0;
            border-radius: 5.5px;
            box-shadow: 0 10px 30px 0 rgba(255, 0, 0, 0.43);
            overflow: hidden;
        }

        .login-card-img {
            border-radius: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .login-card .card-body {
            padding: 85px 60px 60px;
        }

        @media (max-width: 422px) {
            .login-card .card-body {
                padding: 35px 24px;
            }
        }

        .login-card-description {
            font-size: 25px;
            color: #000;
            font-weight: normal;
            margin-bottom: 23px;
        }

        .login-card form {
            max-width: 326px;
        }

        .login-card .form-control {
            padding: 15px 25px;
            margin-bottom: 20px;
            min-height: 45px;
            font-size: 13px;
            line-height: 15;
            font-weight: normal;
        }

        .login-card .form-control::-webkit-input-placeholder {
            color: #919aa3;
        }

        .login-card .form-control::-moz-placeholder {
            color: #919aa3;
        }

        .login-card .form-control:-ms-input-placeholder {
            color: #919aa3;
        }

        .login-card .form-control::-ms-input-placeholder {
            color: #919aa3;
        }

        .login-card .form-control::placeholder {
            color: #919aa3;
        }

        .login-card .login-btn {
            padding: 13px 20px 12px;
            background-color: black;
            border-color: red;
            border-radius: 4px;
            font-size: 17px;
            font-weight: bold;
            line-height: 20px;
            color: #fff;
            margin-bottom: 24px;
        }

        .login-card .login-btn:hover {
            border: 1px solid whitesmoke;
            background-color: black;
            color: red;
        }

        .login-card .forgot-password-link {
            font-size: 14px;
            color: #919aa3;
            margin-bottom: 12px;
        }

        .login-card-footer-text {
            font-size: 16px;
            color: #0d2366;
            margin-bottom: 60px;
        }
        .login-recover-password {
            font-size: 16px;
            margin-bottom: 60px;
        }

        @media (max-width: 767px) {
            .login-card-footer-text {
                margin-bottom: 24px;
            }
        }

        .login-card-footer-nav a {
            font-size: 14px;
            color: #919aa3;
        }

        .login-title {
            color: #e3342f;
            font-weight: bold;
            font-size: 32px;
        }

        .inputs-style {
            background-color: #36393f !important;
        }

        .form-control:focus {
            border-color: #ff0101;
            box-shadow: inset 0 5px 5px rgba(0, 0, 0, 0.075), 0 0 8px rgb(190, 3, 3);
        }

        .form-control {
            color: whitesmoke !important;
        }

        .featurette-divider {
            background-color: red;
        }
        .color-whitesmoke{
            color:whitesmoke;
        }
        .button-login-here{
            color:red !important;
            font-weight: bold;
        }
        .back-ground-login-form{
            background-color: #141414 !important;
        }
        .facebook {
            background-color: #1a538a !important;
            font-weight: bold;
            border-style: solid !important;
            border-color: #1a538a !important;
        }
        .facebook:hover {
            background-color: #184b7c !important;
            border-color: #184b7c !important;
        }
        .google {
            background-color: white !important;
            color: black !important;;
            font-weight: bold;
            border-style: solid !important;
            border-color: rgb(207, 205, 205) !important;
        }

        .google:hover {
            color: black !important;
            background-color: rgb(233, 232, 232) !important;
        }
        .button-login-here:hover {
           text-decoration: none;
        }

    </style>
@endsection
@section('content')
<main class="d-flex align-items-center py-3 py-md-0 z-index:100">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5 border-right border-danger">
                    <img src="{{ url('/images/home/registro/31-315324_wallpaper-hd-iphone-tennis-ball-tennis-wallpaper-iphone.jpg') }}"
                        alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body back-ground-login-form">
                        <p class="login-card-description login-title">Recupera tu cuenta</p>
                        <hr class="featurette-divider">
                        <livewire:auth.recover-password-form/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('components.footer')
@endsection
@section('personal-script')
    <script>
        $(document).ready(function() {
            $("#email").focus();
        })
    </script>

@endsection
