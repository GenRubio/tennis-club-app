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

</style>
<div id="header">
    <div class="nav-banner">
        <div class="nav-superior">
            <div class="container">
                <div class="d-flex justify-content-end">
                    <a href="{{ route('login') }}" type="button"
                        class="btn btn-outline-danger mr-2 mt-1 d-none d-sm-block">LOGIN</a>
                    <a href="{{ route('registro') }}" type="button" class="btn btn-danger mt-1 d-none d-sm-block">SING
                        UP</a>
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
            <div class="container-fluid shadow nav-inferior-color justify-content-center">
                <nav class="navbar navbar-expand-xl navbar-light bg-light nav-inferior-color" style="z-index: 1">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto text-center mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}"
                                    style="{{ Request::is('/') ? 'color:whitesmoke !important' : '' }}">
                                    HOME
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    PADEL
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    TENNIS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    RESERVAR PISTAS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    CASAL
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    COMPETICION/TORNEOS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">GALERIA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('tienda') }}"
                                    style="{{ Request::is('tienda') ? 'color:whitesmoke !important' : '' }}">TIENDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">RESTAURANTE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contacto') }}"
                                    style="{{ Request::is('contacto') ? 'color:whitesmoke !important' : '' }}">CONTACTO</a>
                            </li>
                            <li class="nav-item">
                                <div class="btn-group" role="group">
                                    <button type="button"
                                        class="btn btn-outline-danger d-block d-sm-none mr-2">LOGIN</button>
                                    <button type="button" class="btn btn-danger d-block d-sm-none ml-2">SING UP</button>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function() {

        /*var count = 0;
        setInterval(function(){
            count++;
            switch (count) {
                case 1:
                    $('.nav-banner').css("background-image", "url('{{ url('/images/home/780473.jpg') }}')");
                    break;
                case 2:
                    $('.nav-banner').css("background-image", "url('{{ url('/images/home/216.jpg') }}')");
                    break;
                default:
                    //fibra-padel-sports-club.png
                    $('.nav-banner').css("background-image",
                        "url('{{ url('/images/home/fibra-padel-sports-club.png') }}')", "filter");
                    count = 0;
                    break;
            }
        }, 20000);*/
    });

</script>
