<div>
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
            height: 180px;
            overflow: hidden;
        }

        .card-border-personal {
            box-shadow: 0 2px 18px 0 rgb(255 0 0 / 43%) !important;
        }

        .noticia-titulo {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
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
    </style>
    <div class="row">
        @foreach ($noticias as $noticia)
            <div class="col-xl-4 col-lg-4 col-md-6 mb-5">
                <a href="{{ route('noticias', $noticia->slug) }}" style="text-decoration: none; color:whitesmoke">
                    <div class="card border-0 rounded card-border-personal card-point">
                        <div class="div-image">
                            <img class="img-auto-width rounded"
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
    <br> <br>
    <div class="d-flex justify-content-center">
        @if (count($totalNews) >= $amount)
            <button wire:click="load" class="btn btn-danger btn-lg">
                <strong><i class="far fa-newspaper"></i> Ver mas noticias</strong>
            </button>
        @endif
    </div>
</div>
