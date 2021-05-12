@extends('layouts.app')
@section('personal-style')
    <style>
        .color-red {
            color: #e3342f;
        }

        .nav-bar-second {
            color: #e3342f;
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
        }

        .nav-noticia {
            color: #e3342f;

        }

        .nav-noticia:hover {
            color: whitesmoke !important;
            text-decoration: none;
        }

        .color-whitesmoke {
            color: whitesmoke;
        }

        .img-auto-width {
            height: 100%;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
            max-width: none;
            width: auto;
        }

        .div-image {
            position: relative;
            width: 100%;
            height: 450px;
            overflow: hidden;
            border-radius: 2%;
        }

        .card-effect {
            border: 0;
            border-radius: 5.5px;
            box-shadow: 0 10px 30px 0 rgba(255, 0, 0, 0.43);
            overflow: hidden;
        }

    </style>
@endsection
@section('content')
    @if ($all)
        <div class="container">
            <h1 class="color-red" style="font-weight: bold;">
                Actividades
            </h1>
            <div style="font-size: 18px;color:whitesmoke;">
                Descubre y participa en nuestras actividades. Estaremos encantados de verte.
            </div>
            <hr class="featurette-divider">
            <br>
            <livewire:home.actividades-wiev :actividades="$actividades" />
        </div>
    @else
        <div class="container-fluid" style="margin-top: -50px;">
            <div class="row border-bottom border-dark p-2">
                <div class="col">
                    <div class="container nav-bar-second">
                        <div class="width-ellipse">
                            <span style="font-size: 18px;">
                                <i class="far fa-newspaper"></i>
                                <a href="{{ route('actividades') }}"
                                    class="sm-font-size text-danger nav-noticia">Actividades</a>
                            </span>
                            <i class="fas fa-angle-right"></i>
                            <span style="font-size: 16px;">
                                <span class="sm-font-size">{{ $actividad->titulo }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                @if ($actividad->imagen)
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="color-whitesmoke">
                            <h2><strong class="color-whitesmoke">{!! $actividad->titulo !!}</strong></h2>
                            <p style="font-size: 18px;">Publicado:
                                {{ $actividad->created_at->translatedFormat('jS F Y') }}</p>
                            <hr class="featurette-divider" id="section34">
                            <br>
                            <div style="font-size: 18px;">
                                {!! $actividad->descripcion !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 d-xl-block d-lg-block d-none">
                        <div class="div-image card-effect">
                            <img class="img-auto-width" src="{{ url($actividad->imagen) }}">
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="color-whitesmoke">
                            <h2><strong class="color-whitesmoke">{!! $actividad->titulo !!}</strong></h2>
                            <p style="font-size: 18px;">Publicado:
                                {{ $actividad->created_at->translatedFormat('jS F Y') }}</p>
                            <hr class="featurette-divider" id="section34">
                            <br>
                            <div style="font-size: 18px;">
                                {!! $actividad->descripcion !!}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            @if (count($actividad->actividadPdfs) > 0)
                <br>
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-12">
                        <hr class="featurette-divider">
                        <br>
                        <p class="color-red" style="font-weight: bold; font-size: 20px;">
                            Mas informacion aqui:
                        </p>
                        @foreach ($actividad->actividadPdfs as $key => $pdf)
                            <div class="mb-2">
                                <a class="color-red" style="font-weight: bold;font-size: 18px; text-decoration:none"
                                    href="{{ url($pdf->url) }}" target="_black"><i class="far fa-file"></i>
                                    {{ $pdf->titulo }}.pdf</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if (count($actividad->activeExtras) > 0 || count($actividad->activeGrupoExtras) > 0 || count($actividad->activeGrupoOpciones) > 0)
                <br><br>
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-12">
                        @auth
                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#inscripcion">
                                    <strong>
                                        <i class="far fa-file-alt"></i> Inscribirse YA!
                                    </strong>
                                </a>
                            </div>
                            <div class="modal fade" id="inscripcion" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                Inscripcion: {{ $actividad->titulo }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="min-height: 300px;">
                                                <div class="form-group">
                                                    <div id="actividadForm"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $(document).ready(function() {
                                    loadFormActividad('{{ $actividad->slug }}');

                                    function loadFormActividad(actividad) {
                                        $.ajax({
                                            url: "{{ route('load.form') }}",
                                            method: "POST",
                                            data: {
                                                '_token': '{{ csrf_token() }}',
                                                slug: actividad
                                            },
                                            success: function(data) {
                                                $("#actividadForm").html(data.content);
                                            }
                                        })
                                    }

                                    $(document).on('submit', '#inscriptionForm', function(event) {
                                        event.preventDefault();

                                        $.ajax({
                                            url: "{{ route('inscripcion.actividad') }}",
                                            method: "POST",
                                            data: $(this).serialize(),
                                            success: function(data) {
                                                toastr.options.closeButton = true;
                                                toastr.success(
                                                    'Gracias por inscribirse nos ponremos en contacto con tigo en breve.'
                                                );
                                                $('#inscripcion').modal('hide');

                                                loadFormActividad('{{ $actividad->slug }}');
                                            }
                                        })
                                    })

                                    $(document).on('submit', '#getFamiliar', function(event) {
                                        event.preventDefault();

                                        $.ajax({
                                            url: "{{ route('load.form') }}",
                                            method: "POST",
                                            data: $(this).serialize(),
                                            success: function(data) {
                                                $("#actividadForm").html(data.content);
                                            }
                                        })
                                    })

                                    $(document).on('click', '.cancelar-inscripcion', function(event) {
                                        loadFormActividad('{{ $actividad->slug }}');
                                    })
                                });

                            </script>
                        @else
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('login') }}" class="btn btn-danger btn-lg">
                                    <strong>
                                        <i class="far fa-file-alt"></i> Inscribirse YA!
                                    </strong>
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            @endif
        </div>
    @endif
@endsection
