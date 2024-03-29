@extends('layouts.app')

@section('content')
    <style>
        .color-red {
            color: #e3342f;
        }

        .ver-mas-button {
            color: #e3342f;
            font-size: 18px;
            -webkit-transition: all .3s linear;
            -o-transition: all .3s linear;
            transition: all .3s linear
        }

        .ver-mas-button:hover {
            color: white !important;
            font-weight: bold !important;
        }

        .card-div {
            position: relative;
            width: 100%;
            max-width: none;
            height: 280px;
            ;
            overflow: hidden;
        }

        .card-img-top {
            height: 100%;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
            max-width: none;
            width: auto;
        }

        .card-body-style {
            height: 114px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            background-color: black;
        }

        .text-actividad {
            color: #e3342f;
            font-size: 18px;
            font-weight: bold;
            transition: all 1s ease;
        }

        .text-actividad:hover {
            text-decoration: none;
            color: whitesmoke;

        }

        .card-effect {
            border: 0;
            border-radius: 5.5px;
            box-shadow: 0 10px 30px 0 rgba(255, 0, 0, 0.43);
            overflow: hidden;
        }


        .card-title-color {
            background-color: #000000d9;
        }

        .fc-toolbar-title {
            color: #e3342f !important;
        }

    </style>
    <div class="container">
        <h1 class="color-red" style="font-weight: bold;">
            {{ translate('ultimas_actividades') }}
            <span style="font-size: 14px;">
                <a href="{{ route('actividades') }}" class="ver-mas-button"
                    style="text-decoration: none;font-size: 18px;">{{ translate('ver_mas') }} <i class="fas fa-arrow-right"></i></a>
            </span>
        </h1>
        @include('components.actividades.actividades', ['actividades' => $actividades])
        <br><br><br>
        <livewire:auth.mis-actividades />
        <br><br><br>
        <h1 class="color-red" style="font-weight: bold;">
            {{ translate('calendario_actividades') }}
        </h1>
        <hr class="featurette-divider">
        <br>
        @include('components.calendar')

    </div>

@endsection
