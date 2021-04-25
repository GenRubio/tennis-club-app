@extends('layouts.app')

@section('personal-style')
    <style>
        .wrap-img-cover {
            position: relative;
            height: 370px;
            overflow: hidden;
        }

        .img-cover {
            height: 200% !important;
            left: 50% !important;
            position: absolute !important;
            top: 50% !important;
            transform: translate(-50%, -50%) !important;
            transition: 0.3s !important;
            max-width: none !important;
            width: auto !important;
        }

        .wrap-img-cover-second {
            position: relative;
            height: 197px;
            overflow: hidden;
        }

        .img-cover-second {
            height: 100% !important;
            left: 50% !important;
            position: absolute !important;
            top: 50% !important;
            transform: translate(-50%, -50%) !important;
            transition: 0.3s !important;
            max-width: none !important;
            width: auto !important;
        }

        .wrap-img-cover-tercero {
            position: relative;
            height: 210px;
            overflow: hidden;
            background-color: black;
        }

        .img-cover-tercero {
            height: 150% !important;
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

        #particles-js {
            position: absolute;
            width: 100%;
            height: 532px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }

        .card-border-personal {
            box-shadow: 0 2px 18px 0 rgb(255 0 0 / 43%) !important;
        }

    </style>
@endsection

@section('content')
    <style>
        .swiper-2 {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 200px;
        }

        .slide-2 {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
            -webkit-box-reflect: below 1px linear-gradient(transparent, transparent, #00000040);
        }

    </style>
    <div class="container">
        <h1 class="color-red" style="font-weight: bold;">
            Nuestra multimedia
        </h1>
        <hr class="featurette-divider">
        <br>
        @if (count($carusel) > 0)
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($carusel as $key => $item)
                        @if ($key + 1 == 1)
                            <div class="carousel-item active wrap-img-cover rounded shadow ">
                                <img class="img-cover" src="{{ url($item->image) }}" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $item->titulo }}</h5>
                                    <p>{{ $item->descripcion }}</p>
                                </div>
                            </div>
                        @else
                            <div class="carousel-item wrap-img-cover rounded">
                                <img class="img-cover" src="{{ url($item->image) }}" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $item->titulo }}</h5>
                                    <p>{{ $item->descripcion }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
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
        @endif
        <br><br><br>
        @if (count($destacados) > 0)
            <div class="swiper-container swiper-2">
                <div class="swiper-wrapper">
                    @foreach ($destacados as $item)
                        <div class="swiper-slide slide-2" style="background-image:url({{ $item->image }})"></div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    @if (count($videos) > 0)
        <div id="particles-js"></div>
        <div class="container-fluid" style="background-color: black">
            <div class="container">
                <br><br>
                <h1 class="color-red" style="font-weight: bold;">
                    Nuestros videos
                </h1>
                <br>
                <div class="row align-self-center">
                    <div class="col-lx-6 col-lg-6 col-md-12 mb-4 col-sm-12">
                        @if (count($videos) > 0)
                            <div class="embed-responsive embed-responsive-16by9" style="height: 100% !important">
                                <iframe width="100%" src="{{ $videos[0]->url_video }}" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        @endif
                    </div>
                    <div class="col-lx-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            @foreach ($videos as $key => $video)
                                @if ($key > 0)
                                    <div class="col-lx-6 col-lg-6 col-md-6 mb-4  col-sm-12">
                                        <a class="lightbox" style="text-decoration: none; min-height: 100px;" href="">
                                            <div class="iteams-noticia">
                                                <div class="card bg-blak mb-3"
                                                    style="background-color: black !important; border: none !important">
                                                    <div class="card-image" style="background-color: black ">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe width="100%" src="{{ $video->url_video }}"
                                                                frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
    @endif
    <br><br>
    <br><br><br>
    <div class="container">

        <br>
        <section class="gallery-block cards-gallery-fanart">
            <div class="row">
                @foreach ($images as $item)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="wrap-img-cover-tercero rounded headline">
                            <a class="lightbox" href="{{ $item->image }}"><img class="img-cover-tercero"
                                    src="{{ $item->image }}" alt="First slide"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    <script src="{{ url('/js/scrollreveal.js') }}"></script>
    @include('components.footer')
@endsection

@section('personal-script')
    <script src="{{ url('/js/particles.js') }}"></script>
    <script src="{{ url('/js/particulas.js') }}"></script>
    <script>
        var swiper = new Swiper('.swiper-2', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            loop: true,
        });

        ScrollReveal({
            reset: true
        });
        ScrollReveal().reveal('.headline');

        baguetteBox.run('.cards-gallery-fanart', {
            animation: 'slideIn'
        });

        $(document).ready(function() {
            $("#tag1").click(function() {
                $('html, body').animate({
                    scrollTop: $("#section1").offset().top
                }, 2000);
            });
        });

    </script>
@endsection
