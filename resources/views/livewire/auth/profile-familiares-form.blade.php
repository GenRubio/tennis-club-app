<div>
    <style>
        .familiar-div {
            height: 67px;
            color: whitesmoke;
            font-size: 17px;
            font-weight: bold;
        }

        .bold {
            font-weight: bold;
        }

        .btn-cancel {
            background-color: #efefef !important;
            color: rgb(104, 104, 104) !important;
            border: 1px solid #efefef !important;
        }

        .titulo-advertencia {
            color: black;
            font-weight: bold;
            font-size: 28px;
            margin-top: -33px;
        }

        .subtitulo-advertencia {
            font-size: 16px;
            color: rgba(0, 0, 0, .64);
        }

        @media screen and (min-width: 676px) {
            .modal-dialog {
                max-width: 700px;
            }
        }

    </style>
    @if (count($user->cliente()->familiares()) > 0)
        @foreach ($user->cliente()->familiares() as $familiar)
            <div class="rounded mb-2 border p-3 familiar-div">
                <div class="d-flex justify-content-between">
                    <div>
                        {{ $familiar->full_name }}
                    </div>
                    <div>
                       {{--  <button class="btn btn-danger bold" data-toggle="modal"
                            data-target="#deletePerson{{ $familiar->id }}">Eliminar</button>--}}
                        <button wire:click="updateForm({{ $familiar->id }})" class="btn btn-primary bold"
                            data-toggle="modal" data-target="#updateFamiliar{{ $familiar->id }}">Editar</button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="deletePerson{{ $familiar->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="d-flex justify-content-center">
                                <span style="font-size: 125px; color:#f8be86;"><i
                                        class="fas fa-exclamation-circle"></i></span>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="titulo-advertencia">
                                    Advertencia
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="subtitulo-advertencia">
                                    ¿Está seguro que desea eliminar esta persona?
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-cancel"
                                data-dismiss="modal">Cancelar</button>
                            <button type="button" id="complete" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div wire:ignore.self class="modal fade" id="updateFamiliar{{ $familiar->id }}" tabindex="-1"
                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">{{ translate('actualizar_familiar') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label style="color: black">{{ translate('nombre') }} <span style="color: red">*</span></label>
                                        @error('errorNombre') <span style="color: red">{{ $message }}</span>
                                        @enderror
                                        <input wire:model="nombreU" type="text" class="form-control"
                                            placeholder="{{ translate('nombre') }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label style="color: black">{{ translate('apellidos') }} <span style="color: red">*</span></label>
                                        @error('errorApellidos') <span style="color: red">{{ $message }}</span>
                                        @enderror
                                        <input wire:model="apellidosU" type="text" class="form-control"
                                            placeholder="{{ translate('apellidos') }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label style="color: black">{{ translate('fecha_nacimiento') }} <span
                                                style="color: red">*</span></label>
                                        @error('errorDataNacimiento') <span
                                                style="color: red">{{ $message }}</span>
                                        @enderror
                                        <input wire:model="dataU" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label style="color: black">{{ translate('sexe') }} <span style="color: red">*</span></label>
                                        @error('errorSexeU') <span style="color: red">{{ $message }}</span>
                                        @enderror
                                        <select wire:model="sexeU" class="form-control">
                                            <option selected value="-1">---</option>
                                            <option value="0">{{ translate('niño') }}</option>
                                            <option value="1">{{ translate('niña') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label style="color: black">{{ translate('targeta_sanitaria') }} <span
                                                style="color: red">*</span></label>
                                        @error('errorTargeta') <span style="color: red">{{ $message }}</span>
                                        @enderror
                                        <input wire:model="targetaU" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-cancel"
                                data-dismiss="modal">{{ translate('cancel') }}</button>
                            <button wire:click="updateF({{ $familiar->id }})" type="button"
                                class="btn btn-danger">{{ translate('guardar') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <br>
        <button class="btn btn-success bold" data-toggle="modal" data-target="#addFamiliar">
            <i class="fas fa-plus"></i>
            {{ translate('añadir') }}
        </button>
    @else
        <div style="color: whitesmoke; 67px">
            {{ translate('no_hijos_actual') }}
        </div>
        <br>
        <button class="btn btn-success bold" data-toggle="modal" data-target="#addFamiliar">
            <i class="fas fa-plus"></i>
            {{ translate('añadir') }}
        </button>
    @endif
    <div wire:ignore.self class="modal fade" id="addFamiliar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ translate('add_familiar') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label style="color: black;">{{ translate('nombre') }} <span style="color: red">*</span></label>
                            @error('errorNombreFAdd') <span style="color: red">{{ $message }}</span> @enderror
                            <input wire:model="nombreFAdd" type="text" class="form-control" placeholder="{{ translate('nombre') }} ">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label style="color: black;">{{ translate('apellidos') }}  <span style="color: red">*</span></label>
                            @error('errorApellidosFAdd') <span style="color: red">{{ $message }}</span>
                            @enderror
                            <input wire:model="apellidosFAdd" type="text" class="form-control" placeholder="{{ translate('apellidos') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label  style="color: black;">{{ translate('fecha_nacimiento') }} <span style="color: red">*</span></label>

                            @error('errorDataNacimientoFAdd') <span style="color: red">{{ $message }}</span>
                            @enderror

                            <input wire:model="dataNacimientoFAdd" type="date" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label  style="color: black;">{{ translate('sexe') }} <span style="color: red">*</span></label>
                            @error('errorSexeFAdd') <span style="color: red">{{ $message }}</span> @enderror
                            <select wire:model="sexeFAdd" class="form-control">
                                <option selected value="-1">---</option>
                                <option value="0">{{ translate('niño') }}</option>
                                <option value="1">{{ translate('niña') }}</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label  style="color: black;">{{ translate('targeta_sanitaria') }} <span style="color: red">*</span></label>
                            @error('errorTargetaFAdd') <span style="color: red">{{ $message }}</span>
                            @enderror
                            <input wire:model="tagetaSanitariaFAdd" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label  style="color: black;">{{ translate('nacionalidad') }} <span style="color: red">*</span></label>
                            @error('errorNacionalidadFAdd') <span style="color: red">{{ $message }}</span>
                            @enderror
                            <select wire:model="nacionalidadFAdd" class="form-control">
                                @include('components.nacionalidades')
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-dismiss="modal">{{ translate('cancel') }}</button>
                    <button wire:click="createFormF" type="button" class="btn btn-primary">{{ translate('guardar_cambios') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('alertFamiliar', event => {
        $('#addFamiliar').modal('hide');
        toastr.options.closeButton = true;
        toastr.success(event.detail.message);
         
    })

</script>
