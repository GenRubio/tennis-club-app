@extends('layouts.app')
@section('meta')
    {{-- <meta property="og:title" content="{{ $noticia->titulo }}" />
    <meta property="og:image" content="{{ url($noticia->image) }}" />
    <meta property="og:type" content="website" /> --}}
@endsection
@section('personal-style')
    <style>
        .img-auto-width {
            height: auto;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
            max-width: none;
            width: 100%;
        }

        .div-image {
            position: relative;
            width: 100%;
            height: 100px;
            overflow: hidden;
        }

        .divider {
            background-color: #e3342f;
        }

        .color-whitesmoke {
            color: whitesmoke;
        }

        .color-red {
            color: #e3342f;
        }

        .margin-b-20 {
            margin-bottom: 20px;
        }

        .margin-b-10 {
            margin-bottom: 10px;
        }

        .margin-b-0 {
            margin-bottom: 0;
        }

        .font-size-17 {
            font-size: 17px;
        }

        .div-data-nuevas-noticias {
            margin-bottom: 0px;
            color: grey;
        }

        .login-link {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            color: #e3342f;
        }

        .login-link:hover {
            color: #e3342f;
        }

        .nav-bar-second {
            color: #e3342f;
            font-weight: bold;
            font-size: 16px;
            margin-top: 10px;
        }

        .nav-noticia {
            color: #e3342f;

        }

        .nav-noticia:hover {
            color: whitesmoke !important;
            text-decoration: none;
        }

        .width-ellipse {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .img-auto-width-noticia {
            height: auto;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
            max-width: none;
            width: 100%;
        }

        .div-image-noticia {
            position: relative;
            width: 100%;
            height: 180px;
            overflow: hidden;
        }

        .card-border-personal {
            box-shadow: 0 2px 18px 0 rgb(255 0 0 / 43%) !important;
        }

        .noticia-titulo {
            min-height: 45px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            color: #e3342f;
            font-weight: bold;
        }

        .noticia-body {
            color: whitesmoke;
            height: 190px;
            overflow: hidden;
        }

        .card-body-color {
            background-color: black;
        }

        .card-point {
            cursor: pointer;
        }

        .card-title-color {
            background-color: #000000d9;
        }


        .div-image-noticias-todas {
            position: relative;
            width: 100%;
            height: 180px;
            overflow: hidden;
        }

        @media (max-width: 767.98px) {
            .div-image-noticias-todas {
                position: relative;
                width: 100%;
                height: 240px;
                overflow: hidden;
            }
        }

        .img-auto-width-noticias-todas {
            height: auto;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
            max-width: none;
            width: 100%;
        }

    </style>
@endsection
@php
if (isset($noticia)) {
    $idNoticia = $noticia->id;
}
@endphp

@if (isset($noticia))
    @section('content')
        <div class="container-fluid" style="margin-top: -50px;">
            <div class="row border-bottom border-dark p-2">
                <div class="col">
                    <div class="container nav-bar-second">
                        <div class="width-ellipse">
                            <span style="font-size: 16px;">
                                <i class="far fa-newspaper"></i>
                                <a href="{{ route('noticias') }}"
                                    class="sm-font-size text-danger nav-noticia">Noticias</a>
                            </span>
                            <i class="fas fa-angle-right"></i>
                            <span style="font-size: 13px;">
                                <span class="sm-font-size">{{ $noticia->titulo }}</span>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            @isset($noticia)
                <div class="row">
                    <div class="col-xl-9 col-lg-12 col-md-12">
                        <div class="color-whitesmoke">
                            <h2><strong class="color-whitesmoke">{!! $noticia->titulo !!}</strong></h2>
                            <p>Publicado: {{ $noticia->created_at->translatedFormat('jS F Y') }}</p>
                        </div>
                        <div>
                            {{-- <h5style="margin-bottom:20px;"><strong>!!$noticia->sub_titulo!!</strong></h5> --}}
                        </div>
                        @if ($noticia->image != '')
                            <img src="{{ url($noticia->image) }}" class="card-img-top margin-b-20">
                        @endif
                        <div class="d-flex justify-content-end">
                            <li>
                                <a href="#" id="gmail-btn"><i class="fa fa-envelope-o" aria-hidden="true"
                                        style="color: #cf3e39; font-size: 2rem"></i></a>
                            </li>
                            <li>
                                <a href="#" id="facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"
                                        style="color: #3b5998; font-size: 2rem"></i></a>
                            </li>
                            <li>
                                <a href="#" id="twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"
                                        style="color: #1da1f2; font-size: 2rem"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" id="whatsapp-btn"><i class="fa fa-whatsapp" aria-hidden="true"
                                        style="color: #25d366; font-size: 2rem"></i>
                                </a>
                            </li>
                        </div>
                        <br>
                        <div class="color-whitesmoke">
                            <p class="font-size-17">{!! $noticia->descripcion !!}
                            <p>
                        </div>
                        <br>
                        <ul class="nav mt-3">
                            <li class="nav-item">
                                <a class="nav-link active p-0" href="{{ route('home') }}">
                                    <button class="btn btn-danger">
                                        <strong>Volver</strong>
                                    </button>
                                </a>
                            </li>
                        </ul>
                        <br> <br>
                        <livewire:home.comentarios :noticia="$noticia->id">
                    </div>
                    <div class="col-xl-3 d-none d-xl-block border-left border-dark">
                        <h4><strong class="color-red">Ultimas noticias</strong></h4>
                        <div class="row">
                            @foreach ($ultimasNoticias as $noticia)
                                <div class="col-12">
                                    <a href="{{ route('noticias', $noticia->slug) }}" style="text-decoration: none;">
                                        <div class="div-image margin-b-10">
                                            <img class="img-auto-width" src="{{ url($noticia->image) }}">
                                        </div>
                                        <div>
                                            <p class="text-muted card-text margin-b-0">
                                                <strong class="color-whitesmoke">{{ $noticia->titulo }}</strong>
                                            </p>
                                            <p class="div-data-nuevas-noticias">
                                                {{ $noticia->created_at->format('jS F Y') }}</p>
                                        </div>
                                    </a>
                                    <hr class="border border-dark">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endisset
        </div>
    @endsection
@else
    @section('content')
        <div class="container">
            <h1 class="color-red" style="font-weight: bold;">
                Noticias
            </h1>
            <hr class="featurette-divider">
            <br>
            <div class="row">
                @foreach ($noticias as $noticia)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-5">
                        <a href="{{ route('noticias', $noticia->slug) }}" style="text-decoration: none; color:whitesmoke">
                            <div class="card border-0 rounded card-border-personal card-point">
                                <div class="div-image-noticias-todas">
                                    <img class="img-auto-width-noticias-todas rounded"
                                        src="{{ $noticia->image ? url($noticia->image) : '' }}">
                                </div>
                                <div class="card-body card-body-color">
                                    <h5 class="card-title noticia-titulo">{{ $noticia->titulo }}</h5>
                                    <div class="noticia-body">
                                        {!! str_limit(strip_tags($noticia->descripcion), $limit = 370, $end = '...') !!}
                                    </div>
                                </div>
                                <div class="card-footer border-0 card-title-color">
                                    @php
                                        setlocale(LC_TIME, 'French');
                                    @endphp
                                    <small class="text-muted">Publicado:
                                        {{ $noticia->created_at->translatedFormat('jS F Y') }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    @endsection
@endif
