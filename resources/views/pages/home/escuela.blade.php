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
                    <div style="color: whitesmoke">
                        {!! $vista->descripcion !!}
                    </div>
                    @if (count($vista->activePdfs) > 0)
                        <br>
                        <hr class="featurette-divider">
                        <br>
                        <p class="color-red"
                            style="font-weight: bold;
                                                                                                          font-size: 20px;">
                            Mas informacion aqui:
                        </p>
                        @foreach ($vista->activePdfs as $key => $pdf)
                            <a class="color-red" style="font-weight: bold;font-size: 15px; text-decoration:none"
                                href="{{ url($pdf->url) }}" target="_black">{{ $key + 1 }}.
                                {{ $pdf->titulo }}.pdf</a>

                        @endforeach
                    @endif
                    <br><br>
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
                                        <h5 class="modal-title" id="exampleModalLongTitle">Inscripcion:
                                            {{ $vista->slug == 'escuela-tenis' ? 'Escuela tenis' : 'Escuela padel' }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div style="min-height: 300px;">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Escuela</label>
                                                    <select class="form-control" name="actividad">
                                                        @foreach ($actividades as $actividad)
                                                            <option>{{ $actividad->titulo }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div id="opciones-infantil">
                                                        <br>
                                                         @include('components.opciones-formulario', ['actividad' => $infantil])
                                                    </div>
                                                    <div id="opciones-adulto" class="d-none">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" id="siguente">Inscribirse</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <div class="col-5 d-xl-block d-lg-block d-none">
                    <div>
                        <div class="div-image">
                            <img src="{{ url($vista->image) }}" class="img-auto-width">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('personal-script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '#siguente', function() {

            })
        });

    </script>
@endsection
