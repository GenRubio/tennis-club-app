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
                        <h5 class="modal-title" id="exampleModalLabel">Nova alta - <strong>Personals</strong></h5>
                    @elseif ($progress == 2)
                        <h5 class="modal-title" id="exampleModalLabel">Nova alta - <strong>Adreça</strong></h5>
                    @elseif ($progress == 3)
                        <h5 class="modal-title" id="exampleModalLabel">Nova alta - <strong>Emergència</strong></h5>
                    @elseif ($progress == 4)
                        <h5 class="modal-title" id="exampleModalLabel">Nova alta - <strong>Hijos</strong></h5>
                    @endif
                    <button wire:click="logout" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="min-height: 540px;">
                    @if ($progress == 1)
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nombre <span style="color: red">*</span></label>
                                @error('errorNombre') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="nombre" type="text" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Apellidos <span style="color: red">*</span></label>
                                @error('errorApellidos') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="apellidos" type="text" class="form-control" placeholder="Apellidos">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Data naixement <span style="color: red">*</span></label>

                                @error('errorDataNacimiento') <span style="color: red">{{ $message }}</span>
                                @enderror

                                <input wire:model="dataNacimiento" type="date" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Sexe <span style="color: red">*</span></label>

                                @error('errorSexe') <span style="color: red">{{ $message }}</span> @enderror

                                <select wire:model="sexe" class="form-control">
                                    <option selected value="-1">---</option>
                                    <option value="0">Home</option>
                                    <option value="1">Dona</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Identificador <span style="color: red">*</span></label>
                                <select wire:model="tipoIdentificador" class="form-control">
                                    <option value="1">DNI</option>
                                    <option value="2">CIF</option>
                                    <option value="3">Passaport</option>
                                    <option value="4">NIE</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Numero identificador <span style="color: red">*</span></label>
                                @error('errorIdentificador') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="identificador" type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Nacionalitat <span style="color: red">*</span></label>
                                @error('errorNacionalidad') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <select wire:model="nacionalidad" class="form-control">
                                    @include('components.nacionalidades')
                                </select>
                            </div>
                            <div class="col-md-6 mb-3"></div>
                            <div class="col-md-6 mb-3">
                                <label>Targeta sanitaria</label>
                                <input wire:model="tagetaSanitaria" type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Nº cuenta bancaria</label>
                                <input wire:model="cuentaBancaria" type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Mòbil <span style="color: red">*</span></label>
                                @error('errorMobil') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="telefonoContacto1" type="text" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Telèfon </label>
                                <input wire:model="telefonoContacto2" type="text" class="form-control">
                            </div>
                        </div>
                    @elseif ($progress == 2)
                        <p>Introduce los datos de tu adreça</p>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Codigo postal <span style="color: red">*</span></label>
                                @error('errorCodigoPostal') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="codigoPostal" type="text" class="form-control"
                                    placeholder="Codigo postal">
                            </div>
                            <div class="col-md-6 mb-3">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Direccion <span style="color: red">*</span></label>
                                @error('errorDireccion') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="direccion" type="text" class="form-control" placeholder="Direccion">
                            </div>
                            <div class="col-md-6 mb-3">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Poblacion <span style="color: red">*</span></label>
                                @error('errorPoblacion') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="poblacion" type="text" class="form-control" placeholder="Poblacion">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Provincia <span style="color: red">*</span></label>
                                @error('errorProvincia') <span style="color: red">{{ $message }}</span> @enderror
                                <input wire:model="provincia" type="text" class="form-control" placeholder="Provincia">
                            </div>
                        </div>
                    @elseif($progress == 3)
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nom d'emergència</label>
                                @error('errorNombreEmergencia') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="nombreEmergencia" type="text" class="form-control"
                                    placeholder="Nom d'emergència">
                            </div>
                            <div class="col-md-6 mb-3">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Telèfon mòbil d'emergència</label>
                                @error('errorTelefonoEmergencia') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="telefonoEmergencia" type="text" class="form-control"
                                    placeholder="Telèfon mòbil d'emergència">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Telèfon d'emergència</label>
                                @error('errorMobilEmergencia') <span style="color: red">{{ $message }}</span>
                                @enderror
                                <input wire:model="mobilEmergencia" type="text" class="form-control"
                                    placeholder="Telèfon d'emergència">
                            </div>
                        </div>
                    @elseif($progress == 4)
                        <p style="margin: 0px;">Ya casi hemos terminado...</p>
                        <p>¿Tienes hijos y quieres darles de alta para inscribirlos a las actividades?
                            <br>En caso contrario siempre podras añadirlos mas adelante desde tu perfil
                        </p>
                        <hr>
                        @if ($familiaresForm == true)
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Nombre <span style="color: red">*</span></label>
                                    @error('errorNombre') <span style="color: red">{{ $message }}</span> @enderror
                                    <input wire:model="nombreF" type="text" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Apellidos <span style="color: red">*</span></label>
                                    @error('errorApellidos') <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <input wire:model="apellidosF" type="text" class="form-control"
                                        placeholder="Apellidos">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Data naixement <span style="color: red">*</span></label>

                                    @error('errorDataNacimiento') <span style="color: red">{{ $message }}</span>
                                    @enderror

                                    <input wire:model="dataNacimientoF" type="date" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Sexe <span style="color: red">*</span></label>

                                    @error('errorSexe') <span style="color: red">{{ $message }}</span> @enderror

                                    <select wire:model="sexeF" class="form-control">
                                        <option selected value="-1">---</option>
                                        <option value="0">Niño</option>
                                        <option value="1">Niña</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Targeta sanitaria <span style="color: red">*</span></label>
                                    <input wire:model="tagetaSanitariaF" type="text" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Nacionalitat <span style="color: red">*</span></label>
                                    @error('errorNacionalidadF') <span style="color: red">{{ $message }}</span>
                                    @enderror
                                    <select wire:model="nacionalidad" class="form-control">
                                        @include('components.nacionalidades')
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="mr-2">
                                    <button wire:click="cancelFormFamiliar" class="btn btn-danger">Cancelar</button>
                                </div>
                                <div>
                                    <button wire:click="addFamiliar" class="btn btn-success"><i class="fas fa-plus"></i>
                                        Añadir</button>
                                </div>
                            </div>
                        @else
                            @if (count($familiares) > 0)
                                @foreach ($familiares as $familiar)
                                   {{ $familiar }}
                                @endforeach
                                <hr>
                            @endif
                            <button wire:click="addFormFamiliar" class="btn btn-success"><i class="fas fa-plus"></i>
                                <strong>Añadir</strong></button>
                        @endif
                    @endif
                </div>
                <div class="modal-footer">
                    @if ($progress > 1)
                        <button wire:click="atras" type="button" class="btn btn-danger"><i
                                class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i> Atras</button>
                    @endif
                    <button wire:click="siguente" class="btn btn-primary">Siguente <i
                            class="fas fa-chevron-right"></i><i class="fas fa-chevron-right"></i></button>
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
