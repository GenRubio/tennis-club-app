<div>
    <style>
        @media screen and (min-width: 676px) {
            .modal-dialog {
                max-width: 800px;
            }
        }

    </style>
    <div wire:ignore.self class="modal fade" id="datos-cliente" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @if ($progress == 1)
                        <h5 class="modal-title" id="exampleModalLabel">{{ translate('nueva_alta') }} - <strong>{{ translate('personales') }}</strong></h5>
                    @elseif ($progress == 2)
                        <h5 class="modal-title" id="exampleModalLabel">{{ translate('nueva_alta') }} - <strong>{{ translate('adresa') }}</strong></h5>
                    @elseif ($progress == 3)
                        <h5 class="modal-title" id="exampleModalLabel">{{ translate('nueva_alta') }} - <strong>{{ translate('emergencia') }}</strong></h5>
                    @elseif ($progress == 4)
                        <h5 class="modal-title" id="exampleModalLabel">{{ translate('nueva_alta') }} - <strong>{{ translate('hijos') }}</strong></h5>
                    @endif
                    <button wire:click="logout" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="min-height: 540px;">
                    @if ($progress == 1)
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('nombre') }} <span style="color: red">*</span></label>
                                @error('errorNombre') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="nombre" type="text" class="form-control" placeholder="{{ translate('nombre') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('apellidos') }} <span style="color: red">*</span></label>
                                @error('errorApellidos') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="apellidos" type="text" class="form-control" placeholder="{{ translate('apellidos') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('fecha_nacimiento') }} <span style="color: red">*</span></label>

                                @error('errorDataNacimiento') <span style="color: red">{{ $message }}</span>
                                @enderror

                                <input wire:model="dataNacimiento" type="date" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('sexe') }} <span style="color: red">*</span></label>

                                @error('errorSexe') <span style="color: red">{{ $message }}</span> @enderror

                                <select wire:model="sexe" class="form-control">
                                    <option selected value="-1">---</option>
                                    <option value="0">{{ translate('hombre') }}</option>
                                    <option value="1">{{ translate('mujer') }}</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('identificador') }} <span style="color: red">*</span></label>
                                <select wire:model="tipoIdentificador" class="form-control">
                                    <option value="1">{{ translate('dni') }}</option>
                                    <option value="2">{{ translate('cif') }}</option>
                                    <option value="3">{{ translate('pasaporte') }}</option>
                                    <option value="4">{{ translate('nie') }}</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('numero_identificador') }} <span style="color: red">*</span></label>
                                @error('errorIdentificador') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="identificador" type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('nacionalidad') }} <span style="color: red">*</span></label>
                                @error('errorNacionalidad') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <select wire:model="nacionalidad" class="form-control">
                                    @include('components.nacionalidades')
                                </select>
                            </div>
                            <div class="col-md-6 mb-3"></div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('targeta_sanitaria') }}</label>
                                <input wire:model="tagetaSanitaria" type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('cuenta_bancaria') }}</label>
                                <input wire:model="cuentaBancaria" type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('mobil') }} <span style="color: red">*</span></label>
                                @error('errorMobil') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="telefonoContacto1" type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('telefono') }} </label>
                                <input wire:model="telefonoContacto2" type="text" class="form-control">
                            </div>
                        </div>
                    @elseif ($progress == 2)
                        <p>{{ translate('datos_adresa') }}</p>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('codigo_postal') }} <span style="color: red">*</span></label>
                                @error('errorCodigoPostal') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="codigoPostal" type="text" class="form-control"
                                    placeholder="{{ translate('codigo_postal') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('direccion') }} <span style="color: red">*</span></label>
                                @error('errorDireccion') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="direccion" type="text" class="form-control" placeholder="{{ translate('direccion') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('poblacion') }} <span style="color: red">*</span></label>
                                @error('errorPoblacion') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="poblacion" type="text" class="form-control" placeholder="{{ translate('poblacion') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('provincia') }} <span style="color: red">*</span></label>
                                @error('errorProvincia') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="provincia" type="text" class="form-control" placeholder="{{ translate('provincia') }}">
                            </div>
                        </div>
                    @elseif($progress == 3)
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('nom_emergencia') }}</label>
                                @error('errorNombreEmergencia') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="nombreEmergencia" type="text" class="form-control"
                                    placeholder="{{ translate('nom_emergencia') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('mobil_emergencia') }}</label>
                                @error('errorTelefonoEmergencia') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="telefonoEmergencia" type="text" class="form-control"
                                    placeholder="{{ translate('mobil_emergencia') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ translate('telefono_emergencia') }}</label>
                                @error('errorMobilEmergencia') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="mobilEmergencia" type="text" class="form-control"
                                    placeholder="{{ translate('telefono_emergencia') }}">
                            </div>
                        </div>
                    @elseif($progress == 4)
                        <p style="margin: 0px;">{{ translate('casi_terminado') }}</p>
                        <p>{{ translate('tienes_hijos') }}
                            <br>{{ translate('mensaje_contrario') }}
                        </p>
                        <hr>
                        @if ($familiaresForm == true)
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>{{ translate('nombre') }} <span style="color: red">*</span></label>
                                    @error('errorNombre') <span style="color: red">{{ $message }}</span> @enderror
                                    <input wire:model="nombreF" type="text" class="form-control" placeholder="{{ translate('nombre') }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>{{ translate('apellidos') }} <span style="color: red">*</span></label>
                                    @error('errorApellidos') <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <input wire:model="apellidosF" type="text" class="form-control"
                                        placeholder="{{ translate('apellidos') }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>{{ translate('fecha_nacimiento') }} <span style="color: red">*</span></label>

                                    @error('errorDataNacimiento') <span style="color: red">{{ $message }}</span>
                                    @enderror

                                    <input wire:model="dataNacimientoF" type="date" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>{{ translate('sexe') }} <span style="color: red">*</span></label>

                                    @error('errorSexe') <span style="color: red">{{ $message }}</span> @enderror

                                    <select wire:model="sexeF" class="form-control">
                                        <option selected value="-1">---</option>
                                        <option value="0">{{ translate('niño') }}</option>
                                        <option value="1">{{ translate('niña') }}</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>{{ translate('targeta_sanitaria') }} <span style="color: red">*</span></label>
                                    @error('errorTargeta') <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <input wire:model="tagetaSanitariaF" type="text" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>{{ translate('nacionalidad') }} <span style="color: red">*</span></label>
                                    @error('errorNacionalidadF') <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <select wire:model="nacionalidadF" class="form-control">
                                        @include('components.nacionalidades')
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="mr-2">
                                    <button wire:click="cancelFormFamiliar" class="btn btn-danger">{{ translate('cancel') }}</button>
                                </div>
                                <div>
                                    @if ($updateFamiliar == true)
                                        <button wire:click="updateFamiliar" class="btn btn-success"><i
                                                class="fas fa-plus"></i>
                                            {{ translate('actualizar') }}</button>
                                    @else
                                        <button wire:click="addFamiliar" class="btn btn-success"><i
                                                class="fas fa-plus"></i>
                                            {{ translate('añadir') }}</button>
                                    @endif
                                </div>
                            </div>
                        @else
                            @if (count($familiares) > 0)
                                @foreach ($familiares as $familiar)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <p style="font-size: 17px;"><strong>{{ translate('nueva_alta') }}:</strong>
                                                    {{ $familiar['nombre'] }}
                                                    {{ $familiar['apellidos'] }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-end">
                                                <button wire:click="updateFamiliarForm({{ $familiar['id'] }})"
                                                    class="btn btn-primary mr-2">{{ translate('editar') }}</button>
                                                <button wire:click="deleteFamiliar({{ $familiar['id'] }})"
                                                    class="btn btn-danger">{{ translate('eliminar') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                                <hr>
                            @endif
                            <button wire:click="addFormFamiliar" class="btn btn-success"><i class="fas fa-plus"></i>
                                {{ translate('añadir') }}</button>
                        @endif
                    @endif
                </div>
                <div class="modal-footer">
                    @if ($progress > 1)
                        <button wire:click="atras" type="button" class="btn btn-danger"><i
                                class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i> {{ translate('atras') }}</button>
                    @endif
                    @if ($progress == 4)
                        <button wire:click="finalizar" class="btn btn-primary"><i class="fas fa-check"></i> {{ translate('finalizar') }}</button>
                    @else
                        <button wire:click="siguente" class="btn btn-primary">{{ translate('siguente') }} <i
                                class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#datos-cliente').modal({
                backdrop: 'static',
                keyboard: false
            });
            $('#datos-cliente').modal('show');
        })

    </script>
</div>
