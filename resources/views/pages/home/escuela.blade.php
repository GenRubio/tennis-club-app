@extends('layouts.app')
@section('personal-style')
    <style>
        .color-red {
            color: #e3342f;
        }

        .img-auto-width {
            height: 105%;
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
            height: 570px;
            overflow: hidden;
            border-radius: 2%;
            border: 0;
            border-radius: 5.5px;
            box-shadow: 0 10px 30px 0 rgba(255, 0, 0, 0.43);
            overflow: hidden;
        }

        @media screen and (min-width: 676px) {
            .modal-dialog {
                max-width: 650px;
            }
        }

    </style>
@endsection
@section('content')

    <div class="container">
        <div>
            <h1 class="color-red" style="font-weight: bold;">
                {{ $vista->titulo }}
            </h1>
            <hr class="featurette-divider">
            <br>
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div style="color: whitesmoke;font-size: 18px;">
                        {!! $vista->descripcion !!}
                    </div>
                    @if (count($vista->activePdfs) > 0)
                        <br>
                        <hr class="featurette-divider">
                        <br>
                        <p class="color-red" style="font-weight: bold; font-size: 20px;">
                            {{ translate('ver_mas_info') }}:
                        </p>
                        @foreach ($vista->activePdfs as $key => $pdf)
                            <div class="mb-2">
                                <a class="color-red" style="font-weight: bold;font-size: 18px; text-decoration:none"
                                    href="{{ url($pdf->url) }}" target="_black"><i class="far fa-file"></i>
                                    {{ $pdf->titulo }}.pdf</a>
                            </div>
                        @endforeach
                    @endif
                    <br><br>
                    @auth
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#inscripcion">
                                <strong>
                                    <i class="far fa-file-alt"></i> {{ translate('inscribete') }}
                                </strong>
                            </a>
                        </div>
                        <div class="modal fade" id="inscripcion" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{ translate('inscripcion') }}:
                                            {{ $vista->slug == 'escuela-tenis' ? 'Escuela tenis' : 'Escuela padel' }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div style="min-height: 300px;">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">{{ translate('escuela') }}</label>
                                                <select class="form-control" id="option-actividad">
                                                    @foreach ($actividades as $actividad)
                                                        <option value="{{ $actividad->slug }}">
                                                            {{ $actividad->titulo }}</option>
                                                    @endforeach
                                                </select>
                                                <div id="actividadForm"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('login') }}" class="btn btn-danger btn-lg">
                                <strong>
                                    <i class="far fa-file-alt"></i> {{ translate('inscribete') }}
                                </strong>
                            </a>
                        </div>
                    @endauth

                </div>
                <div class="col-5 d-xl-block d-lg-block d-none">
                    <div>
                        <div class="div-image">
                            <img src="{{ url($vista->image) }}" class="img-auto-width">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <h1 class="color-red" style="font-weight: bold;font-size: 30px;" id="section2">
            {{ translate('ultimas_actividades') }}
            <span style="font-size: 14px;">
                <a href="{{ route('actividades') }}" class="ver-mas-button"
                    style="text-decoration: none;font-size: 18px;">{{ translate('ver_mas') }} <i class="fas fa-arrow-right"></i></a>
            </span>
        </h1>
        @include('components.ultimas-actividades', ['actividades' => $actividadesAll])
    </div>
@endsection

@section('personal-script')
    <script>
        $(document).ready(function() {
            loadFormActividad('escola-infantil-tennis');

            $("#option-actividad").change(function() {
                loadFormActividad($("#option-actividad").val());
            });


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

                        loadFormActividad('escola-infantil-tennis');
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
                loadFormActividad('escola-infantil-tennis');
            })
        });

    </script>
@endsection
