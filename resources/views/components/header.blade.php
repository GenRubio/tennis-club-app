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
        margin-top: 6px;
        border-right: 1px solid #5d1d1d;
        border-bottom: 1px solid #5d1d1d;
        border-left: 1px solid #5d1d1d;
        box-shadow: 0 0 15px 0px #000;
        clip-path: inset(0px -15px -15px -15px);
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
    }

    .nav-bar-logo {
        position: absolute;
        top: 5px;
    }

    #userlogo:hover {
        color: #e3342f;
    }

    .dropdow-status {
        margin-top: 6px;
        width: 221px;
        background-color: black;
        border-right: 1px solid #5d1d1d;
        border-bottom: 1px solid #5d1d1d;
        border-left: 1px solid #5d1d1d;
        box-shadow: 0 0 15px 0px #000;
        clip-path: inset(0px -15px -15px -15px);
    }

    .dropdown-item:hover {
        background-color: #252323;
        color: white;
    }

    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        width: 100%;
        height: 370px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .logo {
        position: absolute;
        align-self: center;
        top: 145px;
        z-index: 9999999;
    }

    .avatar {
        vertical-align: middle;
        width: 37px;
        height: 37px;
        border-radius: 50%;
        background-color: black;
    }

    .idiomas-boton {
        color: #e3342f;
        font-weight: bold;
        font-size: 20px;
    }

    .idiomas-boton:hover {
        color: #e3342f;
        font-weight: bold;
        font-size: 20px;
    }

    .contenedor-idiomas {
        margin-top: -6px;
        margin-right: -3px;
        background-color: black;
        border-right: 1px solid #5d1d1d;
        border-bottom: 1px solid #5d1d1d;
        border-left: 1px solid #5d1d1d;
        box-shadow: 0 0 15px 0px #000;
        clip-path: inset(0px -15px -15px -15px);
    }

    .item-language {
        color: #e3342f;
        font-weight: bold;
        font-size: 15px;
    }

    .network-button {
        color: #e3342f;
        -webkit-transition: all .3s linear;
        -o-transition: all .3s linear;
        transition: all .3s linear
    }

    .network-button:hover {
        color: white;
    }

    .width-ellipse-name {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .width-ellipse-email {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

</style>
<div id="header">
    <div class="nav-superior">
        <div class="container">
            <div class="d-flex justify-content-between">

                <div class="d-flex">
                    @php
                        use App\Models\SocialNetwork;
                        
                        $socialNetworks = SocialNetwork::where('activo', 1)->get();
                    @endphp
                    @foreach ($socialNetworks as $network)
                        <div class="social-network m-1">
                            <a href="{{ $network->url }}" class="network-button" target="_black">
                                <i class="{{ $network->icon }}"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex">
                    @php
                        use App\Models\Idioma;
                        $idiomas = Idioma::where('active', 1)->get();
                    @endphp
                    <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle idiomas-boton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @if (session()->has('language'))
                                @if (Session::get('language') == 'es')
                                    Español
                                @elseif (Session::get('language') == "ca")
                                    Català
                                @elseif (Session::get('language') == "fr")
                                    Français
                                @elseif (Session::get('language') == "ru")
                                    Pусский
                                @elseif (Session::get('language') == "en")
                                    English
                                @endif
                            @else
                                @if (\App::getLocale() == 'es')
                                    Español
                                @elseif (\App::getLocale() == 'ca')
                                    Català
                                @elseif (\App::getLocale() == 'fr')
                                    Français
                                @elseif (\App::getLocale() == 'ru')
                                    Pусский
                                @elseif (\App::getLocale() == 'en')
                                    English
                                @endif
                            @endif
                        </button>
                        <div class="dropdown-menu dropdown-menu-right contenedor-idiomas">
                            @foreach ($idiomas as $idioma)
                                <a class="dropdown-item item-language" href="{{ route('language', $idioma->abbr) }}"
                                    type="button">{{ $idioma->native }}</a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="swiper-container swiper-1">
        <div class="swiper-wrapper">
            <div class="swiper-slide anti-parpadeo"
                style="background-image: url('{{ url('/uploads/header_1.jpg') }}')"></div>

            <div class="swiper-slide anti-parpadeo"
                style="background-image: url('{{ url('/uploads/header_2.jpg') }}')">
            </div>
        </div>
    </div>
    @if (!Request::is('me/datos-cliente'))
        <div class="d-flex justify-content-center">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ url('/uploads/logo.png') }}" height="170px;" width="170px">
                </a>
            </div>
        </div>
    @endif
    <div class="nav-second-margin">
        <div class="container-fluid shadow nav-inferior-color">
            <div class="container p-0">
                <nav class="navbar navbar-expand-xl navbar-light bg-light nav-inferior-color" style="z-index: 1">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a class="navbar-brand d-none d-lg-block" href="{{ route('home') }}">
                            <img class="nav-bar-logo" src="{{ url('/uploads/logo.png') }}" width="46" height="46"
                                alt="">
                        </a>
                        <ul class="navbar-nav  text-xl-center text-lg-center mr-auto ml-auto">
                            <li class="nav-item t-border">
                                <a class="nav-link" href="{{ route('home') }}"
                                    style="{{ Request::is('/') ? 'color:whitesmoke !important' : '' }}; font-size:16px;">
                                    <strong>{{ translate('home') }}</strong>
                                </a>
                            </li>

                            <li class="nav-item dropdown t-border">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="{{ Request::is('escuela-padel') ? 'color:whitesmoke !important' : '' }};font-size:16px;">
                                    <strong>{{ translate('padel') }}</strong>
                                </a>
                                <div class="dropdown-menu anti-parpadeo nav-select" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item nav-select-item"
                                        href="{{ route('escuela', ['slug' => 'escuela-padel']) }}"
                                        style="{{ Request::is('escuela-padel') ? 'color:whitesmoke !important' : '' }};font-size:16px;">
                                        {{ translate('escuela_padel') }}
                                    </a>
                                    <a class="dropdown-item nav-select-item"
                                        href="https://playtomic.io/tennis-blanes/745f469e-c8bd-4aa6-b427-90b080b53058?q=TENNIS~2021-05-15~~~"
                                        target="_blank">{{ translate('reservar_pista') }}</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown t-border">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="font-size:16px;">
                                    <strong>{{ translate('tenis') }}</strong>
                                </a>
                                <div class="dropdown-menu anti-parpadeo nav-select" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item nav-select-item"
                                        href="{{ route('escuela', ['slug' => 'escuela-tenis']) }}"
                                        style="{{ Request::is('escuela-tenis') ? 'color:whitesmoke !important' : '' }}">
                                        {{ translate('escuela_tenis') }}
                                    </a>
                                    <a class="dropdown-item nav-select-item"
                                        href="https://playtomic.io/tennis-blanes/745f469e-c8bd-4aa6-b427-90b080b53058?q=TENNIS~2021-05-15~~~"
                                        target="_blank">{{ translate('reservar_pista') }}</a>
                                </div>
                            </li>

                            <li class="nav-item t-border">
                                <a class="nav-link" href="{{ route('socios') }}"
                                    style="{{ Request::is('socio') ? 'color:whitesmoke !important' : '' }};font-size:16px;">
                                    <strong>{{ translate('socios') }}</strong>
                                </a>
                            </li>
                            <li class="nav-item t-border">
                                <a class="nav-link" href="{{ route('tienda') }}"
                                    style="{{ Request::is('tienda') ? 'color:whitesmoke !important' : '' }};font-size:16px;">
                                    <strong>{{ translate('tienda') }}</strong>
                                </a>
                            </li>

                            <li class="nav-item t-border">
                                <a class="nav-link" href="{{ route('restaurante') }}"
                                    style="{{ Request::is('restaurante') ? 'color:whitesmoke !important' : '' }};font-size:16px;">
                                    <strong>{{ translate('restaurante') }}</strong>
                                </a>
                            </li>
                            <li class="nav-item t-border">
                                <a class="nav-link" href="{{ route('galleria') }}"
                                    style="{{ Request::is('multimedia') ? 'color:whitesmoke !important' : '' }};font-size:16px;">
                                    <strong>{{ translate('multimedia') }}</strong>
                                </a>
                            </li>
                            <li class="nav-item t-border">
                                <a class="nav-link" href="{{ route('contacto') }}"
                                    style="{{ Request::is('contacto') ? 'color:whitesmoke !important' : '' }};font-size:16px;">
                                    <strong>{{ strtoupper(translate('contacto')) }}</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @auth
                        <div style="position: relative;">
                            @if (count(auth()->user()->clients) > 0)
                                <form class="form-inline my-2 my-lg-0">
                                    <div class="btn-group">
                                        <a type="button" role="button" class="dropdown-toggle user-dropdown"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            style="text-decoration: none;" id="userlogo">
                                            <img src="{{ auth()->user()->cliente()->image
    ? url(
        auth()->user()->cliente()->image,
    )
    : url('/images/default.jpg') }}"
                                                class="avatar" id="headerAvatar">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right anti-parpadeo dropdow-status">
                                            <div class="d-flex justify-content-center">
                                                <div class="width-ellipse-name" style="color: #e3342f;font-weight: bold;font-size: 21px;">
                                                    {{ auth()->user()->user_name }}
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="d-flex justify-content-center">
                                                <div class="width-ellipse-email" style="color: #e3342f;font-weight: bold;font-size: 14px;margin-top: -16px;">
                                                    {{ auth()->user()->email }}
                                                </div>
                                            </div>

                                            <a href="{{ route('me') }}" style="color: white" class="dropdown-item"
                                                type="button">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                    <div class="col-9">
                                                        {{ translate('mi_perfil') }}
                                                    </div>
                                                </div>

                                            </a>
                                            <a href="{{ route('profile') }}" style="color: white" class="dropdown-item"
                                                type="button">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <i class="fas fa-cogs"></i>
                                                    </div>
                                                    <div class="col-10">
                                                        {{ translate('ajustes') }}
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a style="color: white" href="{{ route('user.logaut') }}"
                                                class="dropdown-item" type="button">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <i class="fas fa-sign-out-alt"></i>
                                                    </div>
                                                    <div class="col-10">
                                                        {{ translate('salir') }}
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form class="form-inline my-2 my-lg-0">
                                    <a href="{{ route('login') }}" type="button"
                                        class="btn btn-outline-danger mr-2 mt-1 d-none d-sm-block">{{ strtoupper(translate('entrar')) }}</a>
                                    <a href="{{ route('registro') }}" type="button"
                                        class="btn btn-danger mt-1 d-none d-sm-block">{{ translate('registro') }}</a>
                                </form>
                            @endif
                        @else
                            <form class="form-inline my-2 my-lg-0">
                                <a href="{{ route('login') }}" type="button"
                                    class="btn btn-outline-danger mr-2 mt-1 d-none d-sm-block d-block">{{ strtoupper(translate('entrar')) }}</a>
                                <a href="{{ route('registro') }}" type="button"
                                    class="btn btn-danger mt-1 d-none d-sm-block d-block">{{ translate('registro') }}</a>
                            </form>
                        @endauth
                    </div>

                </nav>
            </div>
        </div>
    </div>
</div>
<br> <br>
<script>
    var swiper = new Swiper('.swiper-1', {
        spaceBetween: 30,
        effect: 'fade',
        speed: 2000,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
    });

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
