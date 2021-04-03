<style>
    .nav-superior {
        height: 45px;
        background-color: black;
    }

    .nav-inferior-color {
        background-color: black !important;
    }

    .nav-link {
        color: #e3342f !important;
        font-weight: bold !important;
        -webkit-transition: all .3s linear;
        -o-transition: all .3s linear;
        transition: all .3s linear
    }

    .nav-link:hover {
        color: white !important;
        font-weight: bold !important;
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%23f04747' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .navbar-light .navbar-toggler {
        border-color: #e3342f !important;
    }

    .nav-banner {
        background-image: url("{{ url('/images/home/780473.jpg') }}");
        width: 100%;
        height: 350px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;

    }

    .banner-center {
        height: 300px;
    }

    #header {}

    .btn-transparent {
        background: transparent;
    }

    .avatar {
        width: 30px;
        margin-right: 5px;
        position: relative;
    }

    .nav-select {
        background-color: black;
    }

    .nav-select-item {
        color: #e3342f;
        font-weight: bold;
    }

    .nav-select-item:hover {
        color: whitesmoke !important;
        font-weight: bold !important;
        background-color: black !important;
    }

    .social-network {
        color: #e3342f;
        font-size: 26px;
    }

    .user-dropdown {
        text-decoration: none;
        font-weight: bold;
        color: #e3342f;
        font-size: 16px;
    }

    .nav-bar-logo {
        position: absolute;
        top: 5px;
    }
    #userlogo:hover{
        color: #e3342f;
    }

</style>
<div id="header">
    <div class="nav-banner">
        <div class="nav-superior">
            <div class="container">
                <div class="d-flex justify-content-end">
                    <div class="social-network m-1">
                        <i class="fab fa-facebook"></i>
                    </div>
                    <div class="social-network m-1">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="social-network m-1">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="social-network m-1">
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-center">
            <div class="d-flex justify-content-center align-items-center h-100">
                <a href="{{ route('home') }}">
                    <img src="{{ url('/images/logo.png') }}" height="170px;" width="170px">
                </a>
            </div>
        </div>
        <div class="nav-second-margin">
            <div class="container-fluid shadow nav-inferior-color">
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-inferior-color" style="z-index: 1">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <a class="navbar-brand d-none d-lg-block" href="{{ route('home') }}">
                                <img class="nav-bar-logo" src="{{ url('/images/logo.png') }}"
                                    width="46" height="46" alt="">
                            </a>
                            <ul class="navbar-nav  text-xl-center text-lg-center mr-auto ml-auto">
                                <li class="nav-item t-border">
                                    <a class="nav-link" href="{{ route('home') }}"
                                        style="{{ Request::is('/') ? 'color:whitesmoke !important' : '' }}">
                                        <strong>HOME</strong>
                                    </a>
                                </li>

                                <li class="nav-item dropdown t-border">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <strong>PADEL</strong>
                                    </a>
                                    <div class="dropdown-menu anti-parpadeo nav-select"
                                        aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-select-item" href="#">Escuela infantil de padel</a>
                                        <a class="dropdown-item nav-select-item" href="#">Torneos</a>
                                        <a class="dropdown-item nav-select-item" href="#">Reserva de pista</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown t-border">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <strong>TENNIS</strong>
                                    </a>
                                    <div class="dropdown-menu anti-parpadeo nav-select"
                                        aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-select-item" href="#">Escuela infantil de tenis</a>
                                        <a class="dropdown-item nav-select-item" href="#">Competiciones / Torneos</a>
                                        <a class="dropdown-item nav-select-item" href="#">Reserva de pista</a>
                                    </div>
                                </li>

                                <li class="nav-item t-border">
                                    <a class="nav-link" href="#">
                                        <strong>CASAL</strong>
                                    </a>
                                </li>
                                <li class="nav-item t-border">
                                    <a class="nav-link" href="{{ route('tienda') }}"
                                        style="{{ Request::is('tienda') ? 'color:whitesmoke !important' : '' }}">
                                        <strong>TIENDA</strong>
                                    </a>
                                </li>

                                <li class="nav-item t-border">
                                    <a class="nav-link" href="#">
                                        <strong>RESTAURANTE</strong>
                                    </a>
                                </li>
                                <li class="nav-item t-border">
                                    <a class="nav-link" href="{{ route('galleria') }}"
                                        style="{{ Request::is('multimedia') ? 'color:whitesmoke !important' : '' }}">
                                        <strong>MULTIMEDIA</strong>
                                    </a>
                                </li>
                                <li class="nav-item t-border">
                                    <a class="nav-link" href="{{ route('contacto') }}"
                                        style="{{ Request::is('contacto') ? 'color:whitesmoke !important' : '' }}">
                                        <strong>CONTACTO</strong>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <div class="btn-group" role="group">
                                        <button type="button"
                                            class="btn btn-outline-danger d-block d-sm-none mr-2">LOGIN</button>
                                        <button type="button" class="btn btn-danger d-block d-sm-none ml-2">SING
                                            UP</button>
                                    </div>
                                </li>
                            </ul>
                            @auth
                                <form class="form-inline my-2 my-lg-0">
                                    <div class="btn-group">
                                        <a type="button" class="dropdown-toggle user-dropdown" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" style="text-decoration: none;" id="userlogo">
                                            {{ auth()->user()->full_name }}
                                            <img src="{{ auth()->user()->image ? url(auth()->user()->image) : url('/images/default.jpg') }}"
                                                width="37" height="37" class="rounded-circle">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right anti-parpadeo">
                                            <a class="dropdown-item" type="button"><i class="fas fa-user"></i> Mi perfil</a>
                                            <a class="dropdown-item" type="button"><i class="fas fa-cogs"></i> Ajustes</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="{{ route('user.logaut') }}" class="dropdown-item" type="button"><i
                                                    class="fas fa-sign-out-alt"></i>
                                                Salir</a>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form class="form-inline my-2 my-lg-0">
                                    <a href="{{ route('login') }}" type="button"
                                        class="btn btn-outline-danger mr-2 mt-1 d-none d-sm-block">ENTRAR</a>
                                    <a href="{{ route('registro') }}" type="button"
                                        class="btn btn-danger mt-1 d-none d-sm-block">REGISTRO</a>
                                </form>
                            @endauth
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        if ($(window).width() <= 972) {
            $(".nav-item.t-border").addClass('border-bottom');
            //$('.nav-select-item').addClass('border-bottom');
        } else {
            $(".nav-item.t-border").removeClass('border-bottom');
            //$('.nav-select-item').removeClass('border-bottom');
        }
        $(window).resize(function() {
            if ($(window).width() <= 972) {
                $(".nav-item.t-border").addClass('border-bottom');
                //$('.nav-select-item').addClass('border-bottom');
            } else {
                $(".nav-item.t-border").removeClass('border-bottom');
                //$('.nav-select-item').removeClass('border-bottom');
            }
        });

    });

</script>
