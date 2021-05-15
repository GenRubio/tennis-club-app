@extends('layouts.app')
@section('personal-style')
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
            border-radius: 5.5px;
            box-shadow: 0 10px 30px 0 rgba(255, 0, 0, 0.43);
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
@endsection
@section('content')
    <div class="container">
        <h1 class="color-red" style="font-weight: bold;">
            {{ translate('contacto') }}
        </h1>
        <hr class="featurette-divider">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div style="color: whitesmoke; font-size: 18px;">
                    {!! translate('contact_text') !!}
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
            {{ translate('send_consult') }}
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
                                {{ translate('inscrigete_newsletter') }}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <livewire:home.newsletter-form />
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
    </div>

@endsection
