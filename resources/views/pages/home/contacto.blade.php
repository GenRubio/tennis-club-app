@extends('layouts.app')

@section('content')
    <style>
        .separador-blanco {
            background-color: white;
        }

        .color-red {
            color: #e3342f;
        }

        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 93%;
            margin-top: 31px;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        .contacto-div-internal {
            background-image: url("{{ url('/images/contact-us-banner-img.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 435px;
        }

        .container-img-contacto {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .img-contacto {
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
    <br> <br> <br> <br>
    <div class="container">
        <h1 class="color-red" style="font-weight: bold;">
            Contacto
        </h1>
        <hr class="featurette-divider">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div style="color: whitesmoke;">
                    Si deseas contactar con nosotros puedes hacerlo a través de los siguientes canales:
                    <br><br>
                    Servicio de Atención al Cliente en el teléfono {{ config('app.datos-contacto')['telefono'] }}
                    o a través de Whatsapp en el teléfono {{ config('app.datos-contacto')['whatsapp'] }}.<br>
                    Por email: {{ config('app.datos-contacto')['email'] }}<br>
                    Formulario de contacto que hay más abajo.<br>
                    Horario de Atención al Cliente
                    <br><br>
                    El horario de Atención Comercial es de Lunes a Viernes de
                    {{ config('app.datos-contacto')['horario-atencion'] }}
                    horas. En Verano, los sábados el
                    horario de atención comercial será de {{ config('app.datos-contacto')['horario-atencion'] }}
                    horas., ininterrumpidamente.
                    <br><br>
                    Fuera de ese horario, realiza tus consultas a través de nuestro correo electrónico
                    {{ config('app.datos-contacto')['email'] }}
                    y nos pondremos en contacto contigo lo antes posible.
                </div>

            </div>
            <div class="col-md-6">
                <div class="container-img-contacto">
                    <img src="{{ url('/images/home/registro/31-315324_wallpaper-hd-iphone-tennis-ball-tennis-wallpaper-iphone.jpg') }}"
                        alt="login" class="img-contacto">
                </div>
            </div>
        </div>
        <br> <br><br>
        <h3 class="color-red" style="font-weight: bold;">
            Envíanos tu consulta
        </h3>
        <hr class="featurette-divider">
        <br>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-12 col-sm-12 col-sm-12 col-xl-5 col-lg-6 ">
                        <div style="color: whitesmoke">
                            <livewire:home.contacto />
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 d-none d-lg-block">
                        <div class="contacto-div-internal"></div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>
    <div class="container-fluid" style="background-color: black">
        <div style="min-height: 288px;">
            <div class="container">
                <div>
                    <br>
                    <br> <br>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="mb-3" style="color: white;font-size: 28px;font-weight: bold;">
                                SUSCRÍBETE A NUESTRA NEWSLETTER
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <livewire:home.newsletter-form/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br><br>
        <div id="map-container-google-1" class="z-depth-1-half map-container google-maps">
            <iframe src="https://maps.google.com/maps?q=Diseminado+Club+Tenis,+1B&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <br><br>
    </div>
    @include('components.footer')
@endsection
