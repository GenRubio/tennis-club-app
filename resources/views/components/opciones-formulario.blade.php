<style>
    .form-option-bold {
        font-weight: bold;
    }

    .form-opcion-font-500 {
        font-weight: 500;
    }

</style>

@if ($error)
    @if ($error == 'error_inscrito')
        <br><br>
        <div class="d-flex justify-content-center">
            <h4><strong>{{ translate('error_inscribirse_1') }}</strong></h4>
        </div>

    @elseif ($error == "error_not_found_familiares")
        <br><br>
        <div class="d-flex justify-content-center">
            <h4><strong>{{ translate('error_familiares_1') }}</strong></h4>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('profile') }}" class="btn btn-success" style="font-weight: bold;">{{ translate('add_familiar') }}</a>
        </div>

    @elseif ($error == "error_multiples_familiares")
        <br>
        @foreach (auth()->user()->cliente()->familiares()
    as $familiar)
            @if (!$familiar->inscritoActividad($actividad->id))
                <div class="border rounded p-2 mb-2 align-content-center">
                    <form id="getFamiliar">
                        @csrf
                        <input type="hidden" name="familiar" value="{{ $familiar->id }}">
                        <input type="hidden" name="slug" value="{{ $actividad->slug }}">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>{{ $familiar->full_name }}</strong>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">{{ translate('añadir') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
        @endforeach
    @elseif ($error == "error_multiples_clientes")
        <br>
        @foreach ($clientesPendientes as $cliente)
            @if (!$cliente->inscritoActividad($actividad->id))
                <div class="border rounded p-2 mb-2 align-content-center">
                    <form id="getCliente">
                        @csrf
                        <input type="hidden" name="clienteInscripcion" value="{{ $cliente->id }}">
                        <input type="hidden" name="slug" value="{{ $actividad->slug }}">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>{{ $cliente->full_name }}</strong>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">{{ translate('añadir') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
        @endforeach
    @elseif ($error == "error_0_options")
        <br><br>
        <div class="d-flex justify-content-center">
            <h4><strong>{{ translate('error_familiares_2') }}</strong></h4>
        </div>

    @elseif ($error == "error")
        <br><br>
        <div class="d-flex justify-content-center">
            <h4><strong>{{ translate('error') }}</strong></h4>
        </div>
    @endif
@else
    <form id="inscriptionForm">
        @csrf
        <br>
        <input type="hidden" name="cliente" value="{{ $cliente->id }}">
        <input type="hidden" name="actividad" value="{{ $actividad->slug }}">
        @foreach ($actividad->activeGrupoOpciones as $opcion)
            @if ($actividad->grupoPermitido($opcion, $cliente))
                <div class="form-group">
                    <p class="form-option-bold">{{ $opcion->titulo }}
                        <span class="form-opcion-font-500">
                            {{ $opcion->descripcion }}
                        </span>
                    </p>
                    @if ($opcion->tipo_respuestas == 0)
                        @foreach ($opcion->activeOpciones as $key => $item)
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answerGroup1[]"
                                            value="{{ $opcion->titulo }} @ {{ $item->titulo }}" required>
                                        <label class="form-check-label">
                                            {{ $item->titulo }}
                                        </label>
                                    </div>
                                </div>
                                <div class="form-option-bold">
                                    @if ($item->precio_socio && $cliente->quotaSocio)
                                        {{ $item->precio_socio }} €
                                        <span>
                                            {{ $item->precio_persona ? ' / pers.' : '' }}
                                        </span>
                                        <span>
                                            {{ $item->precio_mensual ? ' / MES' : '' }}
                                        </span>
                                    @elseif ($item->precio_normal)
                                        {{ $item->precio_normal }} €
                                        <span>
                                            {{ $item->precio_persona ? ' / pers.' : '' }}
                                        </span>
                                        <span>
                                            {{ $item->precio_mensual ? ' / MES' : '' }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="form-check form-group options">
                            @foreach ($opcion->activeOpciones as $key => $item)
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <input class="form-check-input" name="answerGroup1[]" type="checkbox"
                                            value="{{ $opcion->titulo }} @ {{ $item->titulo }}" required>
                                        <label class="form-check-label">
                                            {{ $item->titulo }}
                                        </label>
                                    </div>
                                    <div class="form-option-bold">
                                        @if ($item->precio_socio && $cliente->quotaSocio)
                                            {{ $item->precio_socio }} €
                                            <span>
                                                {{ $item->precio_persona ? ' / pers.' : '' }}
                                            </span>
                                            <span>
                                                {{ $item->precio_mensual ? ' / MES' : '' }}
                                            </span>
                                        @elseif ($item->precio_normal)
                                            {{ $item->precio_normal }} €
                                            <span>
                                                {{ $item->precio_persona ? ' / pers.' : '' }}
                                            </span>
                                            <span>
                                                {{ $item->precio_mensual ? ' / MES' : '' }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @foreach ($opcion->activeExtras as $extra)
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" name="extraGroup[]" type="checkbox"
                                        value="{{ $extra->titulo }}">
                                    <label class="form-check-label">
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
            @endif
        @endforeach
        @if (count($actividad->activeGrupoExtras) > 0)
            <hr>
            <div class="row">

                @foreach ($actividad->activeGrupoExtras as $opcion)
                    <div class="col-md-4">
                        <div class="form-group">
                            <p class="form-option-bold">{{ $opcion->titulo }}
                                <span class="form-opcion-font-500">
                                    {{ $opcion->descripcion }}
                                </span>
                                <span style="color: red">
                                    *
                                </span>
                            </p>
                            @foreach ($opcion->activeOpciones as $key => $item)
                                <div>
                                    @if ($opcion->tipo_respuestas == 0)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                name="answerGroup2[{{ $opcion->titulo }}]"
                                                value="{{ $item->titulo }}" required>
                                            <label class="form-check-label">
                                                {{ $item->titulo }}
                                            </label>
                                        </div>
                                    @else
                                        <div class="form-check checkbox-group required">
                                            <input class="form-check-input"
                                                name="answerGroup2[{{ $opcion->titulo }}]" type="checkbox"
                                                value="{{ $item->titulo }}">
                                            <label class="form-check-label">
                                                {{ $item->titulo }}
                                            </label>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>

                @endforeach

            </div>
        @endif
        @if (count($actividad->activeExtras) > 0)
            <hr>
            @foreach ($actividad->activeExtras as $extra)
                @if ($extra->precio_socio && !$cliente->quotaSocio)
                @else
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" name="answerGroup3[]" type="checkbox"
                                    value="{{ $extra->titulo }}">
                                <label class="form-check-label">
                                    {{ $extra->titulo }}
                                </label>
                            </div>
                        </div>
                        <div style="font-weight: bold">
                            @if ($extra->precio_socio && $cliente->quotaSocio)
                                {{ $extra->precio_socio }} €
                                <span>
                                    {{ $extra->precio_persona ? ' / pers.' : '' }}
                                </span>
                                <span>
                                    {{ $extra->precio_mensual ? ' / MES' : '' }}
                                </span>
                            @elseif ($extra->precio_normal)
                                {{ $extra->precio_normal }} €
                                <span>
                                    {{ $extra->precio_persona ? ' / pers.' : '' }}
                                </span>
                                <span>
                                    {{ $extra->precio_mensual ? ' / MES' : '' }}
                                </span>
                            @endif
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
        <br>
        <hr>
        <div class="d-flex justify-content-end">
            <div>
                <button class="btn btn-secondary cancelar-inscripcion">{{ translate('cancel') }}</button>
            </div>
            <div class="ml-2">
                <button type="submit" class="btn btn-danger" style="font-weight: bold;">{{ translate('inscribirse') }}</button>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            var requiredCheckboxes = $('.options :checkbox[required]');
            requiredCheckboxes.change(function() {
                if (requiredCheckboxes.is(':checked')) {
                    requiredCheckboxes.removeAttr('required');
                } else {
                    requiredCheckboxes.attr('required', 'required');
                }
            });
        });

    </script>
@endif
