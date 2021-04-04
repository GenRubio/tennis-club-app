@extends('layouts.app')

@section('personal-style')
    <style>
        .wrap-img-cover {
            position: relative;
            height: 370px;
            overflow: hidden;
        }

        .img-cover {
            height: auto !important;
            left: 50% !important;
            position: absolute !important;
            top: 50% !important;
            transform: translate(-50%, -50%) !important;
            transition: 0.3s !important;
            max-width: none !important;
            width: 140% !important;
        }

        .wrap-img-cover-welcome {
            position: relative;
            height: 400px;
            overflow: hidden;
        }

        .img-cover-welcome {
            height: 100% !important;
            left: 50% !important;
            position: absolute !important;
            top: 50% !important;
            transform: translate(-50%, -50%) !important;
            transition: 0.3s !important;
            max-width: none !important;
            width: auto !important;
        }

        .color-red {
            color: #e3342f;
        }

        .parallax {
            background-size: cover;
            background-attachment: fixed;
            height: 400px;
            position: relative;
        }

        .parallax:before {
            content: '' !important;
            position: absolute !important;
            top: 0 !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
            background-color: rgba(0, 0, 0, 0.685) !important;
        }

        .parallax h1 {
            margin-top: 170px;
            font-size: 38px;
            font-weight: bold;
            color: #fff;
            position: relative
        }

        #avatar {
            width: 80px;
            height: 80px;
            background-size: cover;
            background-position: center;
            border-radius: 50%;
        }

        #avatar2 {
            width: 100px;
            height: 100px;
            background-size: cover;
            background-position: center;
            border-radius: 50%;
        }

        .cart-menu-div {
            background-color: black;
            color: whitesmoke;
            border: 2px dotted whitesmoke;
            transition: all 1s;
        }

        .cart-menu-div:hover {
            color: whitesmoke;
            border: 2px dotted #e3342f;
        }

        .div-plato {
            color: whitesmoke;
            transition: all 1s;
        }

        .div-plato:hover {
            color: #e3342f;
            text-decoration: none;
        }

    </style>
@endsection
@section('content')
    <br> <br> <br> <br><br>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active wrap-img-cover rounded shadow ">
                    <img class="img-cover" src="{{ url('/images/restaurante/descarga2.png') }}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item wrap-img-cover rounded">
                    <img class="img-cover" src="{{ url('/images/restaurante/descarga3.png') }}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <hr class="featurette-divider">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div>
                    <div>
                        <h1 class="color-red" style="font-weight: bold;">
                            Bienvenido
                        </h1>
                    </div>
                    <div style="color:whitesmoke;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores quibusdam consequuntur et
                        sit
                        nulla quasi dolorum? Aliquam, dignissimos? Qui id dolor minus enim praesentium doloremque beatae
                        reiciendis quibusdam. Sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores quibusdam consequuntur et
                        sit
                        nulla quasi dolorum? Aliquam, dignissimos? Qui id dolor minus enim praesentium doloremque beatae
                        reiciendis quibusdam. Sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores quibusdam consequuntur et
                        sit
                        nulla quasi dolorum? Aliquam, dignissimos? Qui id dolor minus enim praesentium doloremque beatae
                        reiciendis quibusdam. Sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores quibusdam consequuntur et
                        sit
                        nulla quasi dolorum? Aliquam, dignissimos? Qui id dolor minus enim praesentium doloremque beatae
                        reiciendis quibusdam. Sit.
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="wrap-img-cover-welcome rounded">
                    <img class="img-cover-welcome" src="{{ url('/images/restaurante/comida.png') }}">
                </div>
            </div>
        </div>
        <br><br>
        <br><br>
    </div>
    <div class="parallax" style="background-image: url({{ url('/images/restaurante/bg_3.jpg') }})">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1>Comida exquisita & Horas divertidas</h1>
            </div>
        </div>
    </div>
    <br>
    <br><br> <br>
    @if (count($categoriasRestaurante) > 0)
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1 class="color-red" style="font-weight: bold;">
                    Nuestro Menu
                </h1>
            </div>
            <br><br>
            <div class="row">
                @foreach ($categoriasRestaurante as $categoria)
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class=" p-3 rounded mb-4 cart-menu-div">
                            <div class="mt-3 d-flex justify-content-center color-red"
                                style="font-weight: bold;font-size: 24px;">
                                {{ $categoria->name }}
                            </div>
                            <br>
                            @foreach ($categoria->platos_categoria as $plato)
                                <a href="" class="div-plato" data-toggle="modal" data-target="#plato{{ $plato->id }}">
                                    <div>
                                        <div class="row headline">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                                                <div class="d-flex justify-content-center">
                                                    <div id="avatar"
                                                        style="background-image: url({{ $plato->image ? url($plato->image) : '' }})">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-6 col-6 p-xl-0 p-lg-0 p-md-0">
                                                <div class="">
                                                    <p class="title-plato"><strong
                                                            style="font-size: 18px;">{{ $plato->name }}</strong></p>
                                                    <p style="font-size: 15px;">{{ $plato->ingredients }}</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                                <div class="">
                                                    <strong
                                                        style="color: #e3342f;font-size: 22px;">€{{ $plato->price }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="featurette-divider" style="margin-top: -1px;">
                                </a>
                                <div class="modal fade" id="plato{{ $plato->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content" style="background-color: #211f1f;">
                                            <div class="modal-header">
                                                <h5 class="modal-title w-100 text-center" id="exampleModalLongTitle"
                                                    style="color: black;">
                                                    <strong style="color: #e3342f">{{ $categoria->name }}</strong>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex justify-content-center">
                                                    <div id="avatar2"
                                                        style="background-image: url({{ $plato->image ? url($plato->image) : '' }})">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="d-flex justify-content-center">
                                                    <div style="color: #e3342f;font-size: 21px;">
                                                        <strong>{{ $plato->name }}</strong>
                                                    </div>
                                                </div>
                                                @if ($plato->description)
                                                    <p style="color: whitesmoke;">{!! $plato->description !!}</p>
                                                @endif
                                                <p style="color: whitesmoke;">Ingredientes: {{ $plato->ingredients }}</p>
                                                <br>
                                                <div class="d-flex justify-content-center">
                                                    <strong
                                                        style="color: #e3342f;font-size: 22px;">€{{ $plato->price }}</strong>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal"><strong>Cerrar</strong></button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <br> <br> <br> <br>
    <br> <br>
    @include('components.footer')
@endsection

@section('personal-script')
<script src="{{ url('/js/scrollreveal.js') }}"></script>
<script src="{{ url('/js/parallax/parallax.js') }}"></script>
<script>
    ScrollReveal({
        reset: true
    });
    ScrollReveal().reveal('.headline');

</script>
@endsection
