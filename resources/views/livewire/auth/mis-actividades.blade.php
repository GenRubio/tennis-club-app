<div>
    <style>
        .header-cart-my {
            position: absolute;
            display: flex;
            background-color: #000000b5;
            width: 100%;
            color: whitesmoke !important;
            font-weight: bold;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .user-name-inscription {
            margin-left: 12px;
        }

    </style>
    @if (count($inscripciones) > 0)
        <h1 class="color-red" style="font-weight: bold;">
            {{ translate('mis_actividades') }}
        </h1>
        <hr class="featurette-divider">
        <br>
        <div class="row">
            @foreach ($inscripciones as $inscripcion)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <a href="" class="text-actividad" data-toggle="modal"
                        data-target="#inscripcion{{ $inscripcion->id }}">
                        <div class="card ronded card-effect border-0">
                            <div class="card-div">
                                <img class="card-img-top"
                                    src="{{ url($inscripcion->actividad->imagen ? $inscripcion->actividad->imagen : '') }}"
                                    alt="Card image cap">
                            </div>
                            <div class="card-body border-top card-body-style">
                                {{ $inscripcion->actividad->titulo }}
                            </div>
                            <div class="card-footer border-0 card-title-color">
                                @php
                                    setlocale(LC_TIME, 'French');
                                @endphp
                                <small class="text-muted">{{ translate('publicado') }}:
                                    {{ $inscripcion->actividad->created_at->translatedFormat('jS F Y') }}</small>
                            </div>
                            <div class="header-cart-my">
                                <div class="user-name-inscription">
                                    {{ $inscripcion->cliente->full_name }}
                                </div>
                            </div>
                        </div>

                    </a>
                    <div wire:ignore.self class="modal fade" id="inscripcion{{ $inscripcion->id }}" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <strong
                                            style="font-size: 20px;">{{ $inscripcion->actividad->titulo }}</strong>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <strong style="font-size: 18px;">{{ translate('ficha_inscripcion') }}</strong><br>
                                    <hr>
                                    <p style="font-size: 18px;">{{ translate('cliente') }}:
                                        <strong>{{ $inscripcion->cliente->full_name }}</strong>
                                    </p>
                                    @php
                                        $opciones = json_decode($inscripcion->opciones);
                                    @endphp
                                    @foreach ($opciones as $key => $values)
                                        @if ($key == 'extras')
                                            <div style="font-weight: bold; font-size:19px;">
                                                {{ translate('extras') }}
                                            </div>
                                            @foreach ($values as $value)
                                                <div>
                                                    - {{ $value }}
                                                </div>
                                            @endforeach
                                        @elseif ($key == 'grupo-extras')
                                            @foreach ($values as $value)
                                                <div>
                                                    - {{ $value }}
                                                </div>
                                            @endforeach
                                        @elseif ($key == 'extra-grupos')
                                            <div style="font-weight: bold; font-size:19px;">
                                                {{ translate('categorias') }}
                                            </div>
                                            @foreach ($values as $key2 => $value)
                                                <div>
                                                    {{ $key2 }} - {{ $value }}
                                                </div>
                                            @endforeach
                                        @else
                                            <div style="font-weight: bold; font-size:19px;">
                                                {{ $key }}
                                            </div>
                                            @foreach ($values as $value)
                                                <div>
                                                    - {{ $value }}
                                                </div>
                                            @endforeach
                                        @endif
                                    @endforeach
                                    {{-- @if ($inscripcion->pagado == false)
                                        <hr>
                                        <button class="btn btn-danger"
                                            wire:click="cancel({{ $inscripcion->id }})"><strong>Cancelar
                                                inscripcion</strong></button>
                                    @endif --}}
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if (count($totalInscripciones) > $count)
            <br>
            <div class="d-flex justify-content-center">
                <button wire:click="load" class="btn btn-danger btn-lg">
                    <strong><i class="far fa-newspaper"></i> {{ translate('mas_inscripcion') }}</strong>
                </button>
            </div>
            <br>
        @endif

    @endif
</div>
