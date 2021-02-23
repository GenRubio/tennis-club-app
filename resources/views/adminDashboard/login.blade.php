@extends('layouts.app')

@section('personal-style')
    <style>
        .login-box {
            margin-top: 75px;
            height: auto;
            text-align: center;
        }

        .login-key {
            height: 100px;
            font-size: 80px;
            line-height: 100px;
            background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-title {
            margin-top: 15px;
            text-align: center;
            font-size: 30px;
            letter-spacing: 2px;
            margin-top: 15px;
            font-weight: bold;
            color: black;
        }

        .login-form {
            margin-top: 25px;
            text-align: left;
        }

        .form-group {
            margin-bottom: 40px;
            outline: 0px;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 0;
        }

        label {
            margin-bottom: 0px;
        }

        .login-btm {
            float: left;
        }

        .login-button {
            padding-right: 0px;
            text-align: right;
            margin-bottom: 25px;
        }

        .login-text {
            text-align: left;
            padding-left: 0px;
            color: #A2A4A4;
        }

        .loginbttm {
            padding: 0px;
        }

    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box rounded shadow-lg">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="form-group mb-2">
                                <label class="form-control-label">Email: </label>
                                {!! $errors->first('email', '<span style="color:red" class="help-block">:message</span>')
                                !!}
                                <input id="email" name="email" type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password: </label>
                                {!! $errors->first('password', '<span style="color:red" class="help-block">:message</span>')
                                !!}
                                <input name="password" type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="d-flex justify-content-center mb-5">
                                <button type="submit" class="btn btn-outline-primary btn-block">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    @endsection

    @section('personal-script')
        <script>
            $('#email').focus();
        </script>
    @endsection
