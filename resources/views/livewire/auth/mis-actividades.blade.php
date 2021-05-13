<div>
    @if (count($inscripciones) > 0)
        <h1 class="color-red" style="font-weight: bold;">
            Mis actividades
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
                                <small class="text-muted">Publicado:
                                    {{ $inscripcion->actividad->created_at->translatedFormat('jS F Y') }}</small>
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
                                    <strong style="font-size: 18px;">Ficha de inscripcion</strong><br>
                                    <hr>
                                    <p style="font-size: 18px;">Cliente:
                                        <strong>{{ $inscripcion->cliente->full_name }}</strong>
                                    </p>
                                    @php
                                        $opciones = json_decode($inscripcion->opciones);
                                    @endphp
                                    @foreach ($opciones as $key => $values)
                                        @if ($key == 'extras')
                                            <div style="font-weight: bold; font-size:19px;">
                                                Extras
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
                                                Categorias
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
                                    @if ($inscripcion->pagado == false)
                                        <hr>
                                        <button class="btn btn-danger"
                                            wire:click="cancel({{ $inscripcion->id }})"><strong>Cancelar
                                                inscripcion</strong></button>
                                    @endif
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{--@if (count($totalInscripciones) > $count)
            <br>
            <div class="d-flex justify-content-center">
                <button wire:click="load" class="btn btn-danger btn-lg">
                    <strong><i class="far fa-newspaper"></i> Ver mas inscripciones</strong>
                </button>
            </div>
            <br>
        @endif
        --}}
    @endif
</div>
<script>
    window.addEventListener('alert', event => {
        $('.modal').modal('hide').data('bs.modal', null);
        $('.modal').remove();
        $('.modal-backdrop').remove();
        $('body').removeClass('modal-open');
        $('body').removeAttr('style');

         toastr.options.closeButton = true;
         toastr.success(event.detail.message);

    })

</script>
