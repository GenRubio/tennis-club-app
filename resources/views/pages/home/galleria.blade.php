@extends('layouts.app')

@section('content')
    <style>
        .row {
            display: flex !important;
            flex-wrap: wrap !important;
            padding: 0 4px !important;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            flex: 25% !important;
            max-width: 25% !important;
            padding: 0 4px !important;
        }

        .column img {
            margin-top: 8px !important;
            vertical-align: middle !important;
            width: 100% !important;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
            .column {
                flex: 50% !important;
                max-width: 50% !important;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                flex: 100% !important;
                max-width: 100% !important;
            }
        }

    </style>
    <br> <br> <br> <br>
    <div class="container">
        <div class="d-flex justify-content-center">
            <h1 style="color: whitesmoke">Nuestra galleria de imagenes</h1>
        </div>
        <div class="row">
            @foreach ($images as $item)
                <div class="column">
                    <img class="img-auto-height" src="{{ $item->image }}">
                </div>
            @endforeach
        </div>
        <br><br><br><br>
    </div>
    @include('components.carusel-footer')
    @include('components.footer')
@endsection
