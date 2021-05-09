<a href="" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modalOpciones"><i
        class="fa fa-eye"></i>Opciones escogidas</a>

@php
use App\Models\Client;
use App\Models\ActividadInscripcione;

$actividadId = Route::current()->parameter('actividad_id');
$clienteId = $entry->getKey();

$cliente = Client::where('id', $clienteId)->first();
$inscripcion = ActividadInscripcione::where('cliente_id', $clienteId)
    ->where('actividad_id', $actividadId)
    ->first();
$data = json_decode($inscripcion->opciones);

@endphp
<div class="modal fade" id="modalOpciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $cliente->full_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach ($data as $key => $values)
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
                <br>
                <hr>
                <div>
                    <div class="d-flex">
                        <div style="font-weight: bold">
                            Pago realizado:
                        </div>
                        <div class="ml-2">
                            <div id="estado">
                                @if ($inscripcion->pagado == 1)
                                    <button class="btn btn-primary" style="width: 70px;"
                                        id="aceptar{{ $clienteId }}">
                                        Si
                                    </button>
                                @else
                                    <button class="btn btn-danger" style="width: 70px;" id="denegar{{ $clienteId }}">
                                        No
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('show.bs.modal', '.modal', function() {
        $(this).appendTo('body');
    });

    $(document).on('click', '#denegar{{ $clienteId }}', function(event) {
        $.ajax({
            url: "{{ route('aceptar.pago') }}",
            method: "POST",
            data: {
                '_token': "{{ csrf_token() }}",
                cliente: "{{ $clienteId }}",
                actividad: "{{ $actividadId }}",
            },
            success: function(data) {
                $("#estado").html(`
                <button class="btn btn-primary" style="width: 70px;" id="aceptar">
                                        Si
                                    </button>
                `)
            }
        })
    });

    $(document).on('click', '#aceptar{{ $clienteId }}', function(event) {
        $.ajax({
            url: "{{ route('cancelar.pago') }}",
            method: "POST",
            data: {
                '_token': "{{ csrf_token() }}",
                cliente: "{{ $clienteId }}",
                actividad: "{{ $actividadId }}",
            },
            success: function(data) {
                $("#estado").html(`
                <button class="btn btn-danger" style="width: 70px;" id="aceptar">
                                        No
                                    </button>
                `)
            }
        })
    });

</script>
