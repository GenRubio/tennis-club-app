@extends('layouts.app')

@section('content')
    <style>
        .img-cover {
            height: 100%;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
            max-width: none;
            width: auto;
        }

        .img-cover:hover {
            opacity: 0.7;
            cursor: pointer;
        }

        .wrap-img-cover {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

    </style>
    <br> <br> <br> <br>

    <div class="container">
        <h3 style="color: white">{{ $instalacion->titulo }}- INSTAL·LACIONS ESPORTIVES</h3>
        <hr class="featurette-divider">
        @foreach ($instalaciones as $item)
            @if ($item->slug == $instalacion->slug)
                <a href="{{ route('instalacion', $item->slug) }}" class="btn btn-danger mr-2 mb-2"><strong>{{ $item->titulo }}</strong></a>
            @else 
                <a href="{{ route('instalacion', $item->slug) }}" class="btn btn-outline-danger mr-2 mb-2"><strong>{{ $item->titulo }}</strong></a>
            @endif
        @endforeach
        <br>
        <br><br>
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-12">
                <div style="color: white">
                    <h4 style="color: #e3342f;font-weight: bold;">{{ $instalacion->titulo }}</h4>
                </div>
                @if ($instalacion->subtitulo || $instalacion->subtitulo != '')
                    <div style="color: #e3342f;font-weight: bold;">
                        {{ $instalacion->subtitulo }}
                    </div>
                    <br>
                @endif
                <div style="color: white;">
                    {!! $instalacion->descripcion !!}
                </div>
                <br>
                @if ($instalacion->video != '')
                    <div class="embed-responsive embed-responsive-21by9" style="height: 250px">
                        <iframe class="embed-responsive-item" src="{{ $instalacion->video }}"></iframe>
                    </div>
                @endif
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="row">
                    @foreach ($instalacion->instalacionImages() as $image)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 mb-5">
                            <div class="wrap-img-cover">
                                <a class="lightbox" href="{{ url($image->image) }}">
                                    <img class="img-cover" src="{{ url($image->image) }}" alt="{{ url($image->image) }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <br> <br> <br> <br>
    <br> <br>
    @include('components.footer')
@endsection


