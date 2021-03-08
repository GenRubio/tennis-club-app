@extends('layouts.app')

@section('personal-style')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <style>
        .icons-home {
            font-size: 70px;
            color: #e3342f;
            margin-top: 23px;
        }

        .circle-home {
            height: 120px;
            width: 120px;
            border-radius: 50%;
            background-color: black;
        }

        .button-see-more {
            background-color: black !important;
        }

        .text-color-white {
            color: whitesmoke !important;
        }

        h2 {
            color: whitesmoke;
        }

        .texto-blanco {
            color: whitesmoke;
        }

        .img-noticias {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            width: 100%;
        }

        .color-red {
            color: red;
        }

        .torneos {
            width: 90%;
            margin: 0px auto;
            backface-visibility: visible;
        }

        .slick-slide {
            margin: 10px
        }

        .slick-slide img {
            width: 100%;
            border: 0px solid #fff
        }

        .lms-carusel-text {
            position: absolute;
        }

        .lms-carusel-img {
            min-height: 370px;
            height: 370px;
            width: auto;
        }

        .lms-carusel-content {
            min-height: 370px;
            height: 370px;
            width: auto;
            position: relative;
            transition: transform 2s;
        }

        .lms-carusel-content:hover {
            transform: scale(1.1);
        }

        .lms-carusel-title {
            font-size: 18px;
            font-weight: bold;
            letter-spacing: -0.18px;
            margin-bottom: 1px;
        }

        .lms-carusel-body {
            margin-bottom: 1px;
            letter-spacing: -0.14px;
            font-size: 14px;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 530px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
        }

        .cristal-effect {
            --transition-duration: 500ms;
            --transition-easing: ease-out;
            transition: transform var(--transition-duration) var(--transition-easing);
            overflow: hidden;
        }

        .cristal-effect::before {
            content: '';
            background: rgba(255, 255, 255, 0.4);
            width: 60%;
            height: 100%;
            top: 0%;
            left: -125%;
            transform: skew(45deg);
            position: absolute;
            transition: left var(--transition-duration) var(--transition-easing);
        }

        .cristal-effect:hover::before {
            left: 150%;
        }


        .b-game-card__cover {
            z-index: 1;
            max-width: 100%;
            height: 90%;
            overflow: hidden;
            background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            background-size: cover;
            perspective-origin: 50% 50%;
            transform-style: preserve-3d;
            transform-origin: top center;
            will-change: transform;
            transform: skewX(0.001deg);
            transition: transform 0.35s ease-in-out;
        }

        .b-game-card__cover::after {

            z-index: 100;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(226deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.4) 35%, rgba(255, 255, 255, 0.2) 42%, rgba(255, 255, 255, 0) 60%);
            transform: translateY(-20%);
            will-change: transform;
            transition: transform 0.65s cubic-bezier(0.18, 0.9, 0.58, 1);
        }

        .b-game-card:hover .b-game-card__cover {
            transform: rotateX(7deg) translateY(-6px);
        }

        .b-game-card:hover .b-game-card__cover::after {
            transform: translateY(0%);
        }

        .b-game-card::before {

            top: 5%;
            left: 5%;
            width: 90%;
            height: 90%;
            background: rgba(0, 0, 0, 0.5);
            box-shadow: 0 6px 12px 12px rgba(0, 0, 0, 0.4);
            will-change: opacity;
            transform-origin: top center;
            transform: skewX(0.001deg);
            transition: transform 0.35s ease-in-out, opacity 0.5s ease-in-out;
        }

        .b-game-card:hover::before {
            opacity: 0.6;
            transform: rotateX(7deg) translateY(-6px) scale(1.05);
        }

        .url-instalaciones:hover {
            text-decoration: none;
        }

        @media (max-width: 540px) {
            .lms-carusel-img {
                min-height: 370px;
                height: 370px;
                width: auto;
            }

            .lms-carusel-content {
                min-height: 370px;
                height: 370px;
                width: auto;
                position: relative;
                transition: transform 2s;
            }
        }

    </style>
@endsection
@section('content')
    <br> <br> <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="d-flex justify-content-center">
                    <div class="circle-home">
                        <!--Icono--->
                        <div class="d-flex justify-content-center h-100">
                            <i class="far fa-newspaper icons-home"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <h2 class="text-color-white">Noticias</h2>
                </div>
                <p class="text-color-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi alias nam
                    similique aut cum doloremque
                    eaque, rerum non error ipsum numquam consequuntur voluptatum sint libero molestias earum consectetur
                    cupiditate voluptatibus.</p>

                <div class="d-flex justify-content-center">
                    <button id="tag1" class="btn btn-secondary mb-2 button-see-more">
                        <strong>Read more</strong></button>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="d-flex justify-content-center">
                    <div class="circle-home">
                        <!--Icono--->
                        <div class="d-flex justify-content-center h-100">
                            <i class="fas fa-trophy icons-home"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <h2 class="text-color-white">Troneos</h2>
                </div>
                <p class="text-color-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum quam expedita
                    soluta fugiat dolor
                    natus. Labore architecto, consequuntur vel modi temporibus, nesciunt, repellendus minus repudiandae
                    aperiam doloribus ipsum. Reiciendis, atque.</p>
                <div class="d-flex justify-content-center">
                    <button id="tag2" class="btn btn-secondary mb-2 button-see-more">
                        <strong>Read more</strong>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="d-flex justify-content-center">
                    <div class="circle-home">
                        <!--Icono--->
                        <div class="d-flex justify-content-center h-100">
                            <i class="far fa-calendar-alt icons-home"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="my-auto">
                        <h2 class="text-color-white">Eventos</h2>
                    </div>
                </div>
                <p class="text-color-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem modi illo
                    inventore similique
                    facilis, ipsum eaque iste ipsa, atque consectetur adipisci exercitationem ab debitis. Eaque magnam
                    perferendis ducimus ea corrupti.</p>

                <div class="d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                        <button id="tag3" class="btn btn-secondary mb-2 button-see-more">
                            <strong>Read more</strong>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="d-flex justify-content-center">
                    <div class="circle-home">
                        <!--Icono--->
                        <div class="d-flex justify-content-center h-100">
                            <i class="fas fa-home icons-home"></i>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="my-auto">
                        <h2 class="text-color-white">Instalaciones</h2>
                    </div>
                </div>
                <p class="text-color-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem modi illo
                    inventore similique
                    facilis, ipsum eaque iste ipsa, atque consectetur adipisci exercitationem ab debitis. Eaque magnam
                    perferendis ducimus ea corrupti.</p>

                <div class="d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                        <button id="tag4" class="btn btn-secondary mb-2 button-see-more">
                            <strong>Read more</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- START THE FEATURETTES -->
        <br>
        <h3 class="color-red">Ultimas noticias</h3>
        <hr class="featurette-divider" id="section1">
        <br>
        <div class="row featurette">
            <div class="col-md-7">
                <p class="text-color-white">Publicat el 4 juny, 2020</p>
                <h2 class="featurette-heading text-color-white">CURS TENNIS ó PADEL 2020-2021</h2>
                <p class="lead text-color-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta iure
                    laborum minima quis,
                    dolores laboriosam nulla, perferendis facilis ipsa praesentium adipisci, aliquid voluptatum maiores.
                    Sint quia itaque aliquam quam asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                    totam quisquam tenetur dicta laudantium ipsam, quam optio consectetur necessitatibus sapiente,
                    recusandae eaque enim. Rem voluptatibus deleniti sapiente, nemo deserunt iure?</p>
            </div>
            <div class="col-md-5">
                <div class="shadow">
                    <img src="{{ url('/images/home/noticias/unnamed.jpg') }}" class="img-noticias">
                </div>
            </div>
        </div>
        <br>
        <hr class="featurette-divider">
        <br>
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <p class="text-color-white">Publicat el 4 juny, 2020</p>
                <h2 class="featurette-heading">CASAL D’ESTIU 2020</span></h2>
                <p class="lead text-color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptas quae
                    aliquam dolore
                    natus corporis deserunt, cumque commodi eaque soluta unde assumenda tenetur alias est, dignissimos
                    inventore expedita fugit rerum?
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam vero repellendus, ullam, aspernatur
                    molestias omnis sequi optio dolore necessitatibus molestiae culpa alias quisquam perspiciatis beatae at
                    eius accusamus voluptates perferendis.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="shadow">
                    <img src="{{ url('/images/home/noticias/Roger_Federer_2012_Indian_Wells.jpg') }}"
                        class="img-noticias">
                </div>
            </div>
        </div>
        <br>
        <hr class="featurette-divider" id="section3">
        <br>
        <div class="row featurette">
            <div class="col-md-7">
                <p class="text-color-white">Publicat el 4 juny, 2020</p>
                <h2 class="featurette-heading">CASAL D’ESTIU 2020: EL CARTELL + MESURES CONTRA COVID-19</span></h2>
                <p class="lead text-color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, alias
                    consequuntur, est
                    sit quod praesentium voluptates aspernatur fugiat dicta in omnis? Voluptas distinctio officiis
                    temporibus consequatur similique dolore fugiat maxime!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa quidem quos voluptatem modi. Dolore
                    minus, ipsa assumenda molestias, reiciendis sunt nulla facere iure fugiat id sit corrupti illo,
                    voluptatibus temporibus.</p>
            </div>
            <div class="col-md-5">
                <div class="shadow">
                    <img src="{{ url('/images/home/noticias/Tecnologia-en-el-Deporte-3.jpg') }}" class="img-noticias">
                </div>
            </div>
        </div>
        <hr class="featurette-divider" id="section4">
        <br>
        <div class="d-flex justify-content-center">
            <button class="btn btn-danger btn-lg"><strong><i class="far fa-newspaper"></i> Ver mas
                    noticias</strong></button>
        </div>
        <br>
        <br>
        <br>
    </div>
    <div id="particles-js"></div>
    <div class="container-fluid" style="background-color: black">
        <div class="container">
            <br><br>
            <h1 class="color-red" style="font-weight: bold; z-index:999;">Nuestros torneos</h1>
        </div>
        <div class="torneos">
            <a href="#">
                <div class="d-flex align-items-end lms-carusel-content cristal-effect">
                    <img class="lms-carusel-img"
                        src="{{ url('/images/home/torneos/actualidad_526710657_162107073_855x1140.jpg') }}">
                </div>
            </a>
            <a href="#">
                <div class="d-flex align-items-end lms-carusel-content cristal-effect">
                    <img class="lms-carusel-img"
                        src="{{ url('/images/home/torneos/C0BFD825-DD3B-493B-B6B9-5ED502469E23-540x750.jpeg') }}">
                </div>
            </a>
            <a href="#">
                <div class="d-flex align-items-end lms-carusel-content cristal-effect">
                    <img class="lms-carusel-img"
                        src="{{ url('/images/home/torneos/Grand-Slam-Tenis-Portada-274_Abril-2020.jpg') }}">
                </div>
            </a>
            <a href="#">
                <div class="d-flex align-items-end lms-carusel-content cristal-effect">
                    <img class="lms-carusel-img"
                        src="{{ url('/images/home/torneos/Grand-Slam-Tenis-Portada-274_Abril-2020.jpg') }}">
                </div>
            </a>
            <a href="#">
                <div class="d-flex align-items-end lms-carusel-content cristal-effect">
                    <img class="lms-carusel-img"
                        src="{{ url('/images/home/torneos/Grand-Slam-Tenis-Portada-274_Abril-2020.jpg') }}">
                </div>
            </a>
            <a href="#">
                <div class="d-flex align-items-end lms-carusel-content cristal-effect">
                    <img class="lms-carusel-img"
                        src="{{ url('/images/home/torneos/Grand-Slam-Tenis-Portada-274_Abril-2020.jpg') }}">
                </div>
            </a>
            <a href="#">
                <div class="d-flex align-items-end lms-carusel-content cristal-effect">
                    <img class="lms-carusel-img"
                        src="{{ url('/images/home/torneos/Grand-Slam-Tenis-Portada-274_Abril-2020.jpg') }}">
                </div>
            </a>
        </div>
        <br>
    </div>
    <br>
    <div class="container">
        <br><br>
        <hr class="featurette-divider" id="section34">
        <br>
        <div class="row featurette">
            <div class="col-md-5">
                <h2 class="featurette-heading">CALENDARIO DE EVENTOS</h2>
                <p class="lead text-color-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta iure
                    laborum minima quis,
                    dolores laboriosam nulla, perferendis facilis ipsa praesentium adipisci, aliquid voluptatum maiores.
                    Sint quia itaque aliquam quam asperiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                    totam quisquam tenetur dicta laudantium ipsam, quam optio consectetur necessitatibus sapiente,
                    recusandae eaque enim. Rem voluptatibus deleniti sapiente, nemo deserunt iure?</p>
            </div>
            <div class="col-md-7">
                @include('components.calendar')
            </div>
        </div>
        <br>
        <hr class="featurette-divider" id="instalaciones">
        <br>
        <br>
        <h1 class="color-red" style="font-weight: bold; z-index:999;">Instalaciones</h1>
        <br>
        <div class="row">
            @foreach ($instalaciones as $instalacion)
                <div class="col-lx-4 col-lg-4 col-md-6 col-sm-12 col-12 b-game-card">
                    <a href="{{ route('instalacion', $instalacion->slug) }}" class="url-instalaciones">
                        <div class="card mb-4 box-shadow border-0 instalaciones b-game-card__cover ">
                            <img style="height: 250px;"
                                src="{{ $instalacion->image }}"
                                class="card-img-top" alt="..." />
                            <div class="card-body" style="background-color: #434956; color:whitesmoke">
                                <div class="d-flex justify-content-center">
                                    <h5 class="card-title"><strong>{{ $instalacion->titulo }}</strong></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <br>
        <br>
    </div>
    <br>
    <br>
    @include('components.carusel-footer')
    @include('components.footer')
@endsection

@section('personal-script')
    <script src="{{ url('/js/particles.js') }}"></script>
    <script src="{{ url('/js/particulas.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
           
            $("#tag1").click(function() {
                $('html, body').animate({
                    scrollTop: $("#section1").offset().top
                }, 1000);
            });
            $("#tag2").click(function() {
                $('html, body').animate({
                    scrollTop: $("#particles-js").offset().top
                }, 2000);
            });
            $("#tag3").click(function() {
                $('html, body').animate({
                    scrollTop: $("#section34").offset().top
                }, 2000);
            });
            $("#tag4").click(function() {
                $('html, body').animate({
                    scrollTop: $("#instalaciones").offset().top
                }, 2000);
            });
        });
        $('.torneos').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [{
                    breakpoint: 1440,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 1160,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 920,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 540,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    </script>
@endsection
