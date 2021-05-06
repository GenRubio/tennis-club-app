@foreach ($actividad->formGrupoOpciones as $opcion)
    <div class="form-group">
        <p style="font-weight: bold">{{ $opcion->titulo }}
            <span style="font-weight: 500;">{{ $opcion->descripcion }}
            </span>
        </p>
        @foreach ($opcion->opciones as $key => $item)
            <div class="d-flex justify-content-between">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            {{ $item->titulo }}
                        </label>
                    </div>
                </div>
                <div style="font-weight: bold">
                    {{ $item->precio_normal }} €
                </div>
            </div>
        @endforeach
        @foreach ($opcion->extras as $extra)
            <div class="d-flex justify-content-between">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            {{ $extra->titulo }}
                        </label>
                    </div>
                </div>
                <div style="font-weight: bold">
                    {{ $extra->precio_normal }} €
                </div>
            </div>
        @endforeach
    </div>
@endforeach
@if (count($actividad->formGrupoExtras) > 0)
    <hr>
    @foreach ($actividad->formGrupoExtras as $opcion)
        <div class="form-group">
            <p style="font-weight: bold">{{ $opcion->titulo }}
                <span style="font-weight: 500;">{{ $opcion->descripcion }}
                </span>
            </p>
            @foreach ($opcion->opciones as $key => $item)
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="extraOpcion{{ $opcion->id }}"
                            id="extraOpcion{{ $opcion->id }}" value="option1">
                        <label class="form-check-label" for="extraOpcion{{ $opcion->id }}">
                            {{ $item->titulo }}
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endif
