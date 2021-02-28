@extends('layouts.app')

@section('personal-style')
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <style>
        .icons-home {
            font-size: 70px;
            color: red;
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

        .featurette-divider {
            background-color: red;
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
            height: 370px;
            width: auto;
        }

        .lms-carusel-content {
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






        :root {
            --marquee-width: 100%;
            --marquee-height: 20vh;
            /* --marquee-elements: 12; */
            /* defined with JavaScript */
            --marquee-elements-displayed: 5;
            --marquee-element-width: calc(var(--marquee-width) / var(--marquee-elements-displayed));
            --marquee-animation-duration: calc(var(--marquee-elements) * 3s);
        }

        .marquee {
            width: var(--marquee-width);
            height: var(--marquee-height);
            background-color: #111;
            color: #eee;
            overflow: hidden;
            position: relative;
        }

        .marquee:before,
        .marquee:after {
            position: absolute;
            top: 0;
            width: 10rem;
            height: 100%;
            content: "";
            z-index: 1;
        }

        .marquee:before {
            left: 0;
            background: linear-gradient(to right, #111 0%, transparent 100%);
        }

        .marquee:after {
            right: 0;
            background: linear-gradient(to left, #111 0%, transparent 100%);
        }

        .marquee-content {
            list-style: none;
            height: 100%;
            display: flex;
            animation: scrolling var(--marquee-animation-duration) linear infinite;
        }

        /* .marquee-content:hover {
          animation-play-state: paused;
        } */
        @keyframes scrolling {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-1 * var(--marquee-element-width) * var(--marquee-elements)));
            }
        }

        .marquee-content li {
            display: flex;
            justify-content: center;
            align-items: center;
            /* text-align: center; */
            flex-shrink: 0;
            width: var(--marquee-element-width);
            max-height: 100%;
            font-size: calc(var(--marquee-height)*3/4);
            /* 5rem; */
            white-space: nowrap;
        }

        .marquee-content li img {
            width: 100%;
            height: 100%;
            border: 1px solid red;
        }

        @media (max-width: 600px) {
            html {
                font-size: 12px;
            }

            :root {
                --marquee-width: 100vw;
                --marquee-height: 16vh;
                --marquee-elements-displayed: 3;
            }

            .marquee:before,
            .marquee:after {
                width: 5rem;
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
            <div class="col-md-4">
                <div class="card mb-4 box-shadow border-0 instalaciones">
                    <img style="height: 250px;"
                        src="{{ url('/images/instalaciones/tennis-court-hard-cover-tennis-concepts-3d-tennis-stadium.jpg') }}"
                        class="card-img-top" alt="..." />
                    <div class="card-body" style="background-color: #434956; color:whitesmoke">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title"><strong>PISTAS DE TENNIS</strong></h5>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow border-0 instalaciones">
                    <img style="height: 250px;" src="{{ url('/images/instalaciones/nueva_557.jpg') }}"
                        class="card-img-top" alt="..." />
                    <div class="card-body" style="background-color: #434956; color:whitesmoke">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title"><strong>PISTAS DE PADEL</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow border-0 instalaciones">
                    <img style="height: 250px;" src="{{ url('/images/instalaciones/unnamed.jpg') }}" class="card-img-top"
                        alt="..." />
                    <div class="card-body" style="background-color: #434956; color:whitesmoke">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title"><strong>PISCINA</strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow border-0 instalaciones">
                    <img style="height: 250px;" src="{{ url('/images/instalaciones/450_1000.jpeg') }}"
                        class="card-img-top" alt="..." />
                    <div class="card-body" style="background-color: #434956; color:whitesmoke">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title"><strong>SALA FITNESS</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow border-0 instalaciones">
                    <img style="height: 250px;" src="{{ url('/images/instalaciones/42699526--624x383.jpg') }}"
                        class="card-img-top" alt="..." />
                    <div class="card-body" style="background-color: #434956; color:whitesmoke">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title"><strong>AREA DE JUEGOS</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow border-0 instalaciones">
                    <img style="height: 250px;"
                        src="{{ url('/images/instalaciones/f4b132a349db60de299dd4d1e4fa1a57.jpg') }}"
                        class="card-img-top" alt="..." />
                    <div class="card-body" style="background-color: #434956; color:whitesmoke">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title"><strong>ZONA BARBACOA</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <br>
    <br>
    <div class="marquee">
        <ul class="marquee-content">
            <li><img src="{{ url('/images/home/caruselFooter/234324.jpg') }}"></li>
            <li><img src="{{ url('/images/home/caruselFooter/780473.jpg') }}"></li>
            <li><img src="{{ url('/images/home/caruselFooter/descarga.jpg') }}"></li>
            <li><img src="{{ url('/images/home/caruselFooter/images.jpg') }}"></li>
            <li><img src="{{ url('/images/home/caruselFooter/tennis-wallpaper-4.jpg') }}"></li>
            <li><img src="{{ url('/images/home/caruselFooter/WS-42467_WP.jpg') }}"></li>
        </ul>
    </div>
    @include('components.footer')
@endsection

@section('personal-script')
    <script src="{{ url('/js/particles.js') }}"></script>
    <script src="{{ url('/js/particulas.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            const root = document.documentElement;
            const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue(
            "--marquee-elements-displayed");
            const marqueeContent = document.querySelector("ul.marquee-content");

            root.style.setProperty("--marquee-elements", marqueeContent.children.length);

            for (let i = 0; i < marqueeElementsDisplayed; i++) {
                marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
            }


            $('.fc-daygrid-event-dot').remove();

            $("#tag1").click(function() {
                $('html, body').animate({
                    scrollTop: $("#section1").offset().top
                }, 1000);
            });
            $("#tag2").click(function() {
                $('html, body').animate({
                    scrollTop: $("#particles-js").offset().top
                }, 1000);
            });
            $("#tag3").click(function() {
                $('html, body').animate({
                    scrollTop: $("#section34").offset().top
                }, 1000);
            });
            $("#tag4").click(function() {
                $('html, body').animate({
                    scrollTop: $("#instalaciones").offset().top
                }, 1000);
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
                    breakpoint: 740,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    </script>
@endsection
