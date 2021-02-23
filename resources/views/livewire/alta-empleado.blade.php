<div>
    <form wire:submit.prevent="add">
        <div class="form-group w-25" style="margin-bottom: 2px">
            <label for="inputState">Tipo empleado</label>
            <select wire:model="tipo" id="selectTipo" class="form-control">
                <option value="none" selected>Escoge...</option>
                <option value="C">Comun</option>
                <option value="E">Recepción</option>
                <option value="M">Moderador de Web</option>
                <option value="A">Administrador</option>
            </select>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Nombre</label>
                    <input wire:model="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre"
                        {{ $tipo != 'none' ? '' : 'disabled' }} required>
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input wire:model="apellido" id="apellido" type="text" class="form-control" placeholder="Apellidos"
                        {{ $tipo != 'none' ? '' : 'disabled' }} required>
                </div>
                <div class="form-grup">
                    <label>Sexe: </label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input wire:model="sexe" type="radio" id="customRadioInline1" name="sexe" value="M"
                            class="custom-control-input" {{ $tipo != 'none' ? '' : 'disabled' }}>
                        <label class="custom-control-label" for="customRadioInline1">Hombre</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input wire:model="sexe" type="radio" id="customRadioInline2" name="sexe" value="F"
                            class="custom-control-input" {{ $tipo != 'none' ? '' : 'disabled' }}>
                        <label class="custom-control-label" for="customRadioInline2">Mujer</label>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Fecha de nacimiento</label>
                    <input wire:model="fNacimiento" id="fNacimiento" type="date" class="form-control"
                        {{ $tipo != 'none' ? '' : 'disabled' }}>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>CIF/NIF</label>
                    <input wire:model="nif" id="nif" type="text" class="form-control" placeholder="CIF/NIF"
                        {{ $tipo != 'none' ? '' : 'disabled' }}>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Pais origen</label>
                    <input wire:model="paisOrigen" id="paisOrigen" type="text" class="form-control" value="Pais origen"
                        {{ $tipo != 'none' ? '' : 'disabled' }}>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label for="inputState">Estado civil</label>
                    <select wire:model="estadoCivil" id="estadoCivil" class="form-control"
                        {{ $tipo != 'none' ? '' : 'disabled' }}>
                        <option value="Soltero" selected>Soltero/a</option>
                        <option value="Casado">Casado/a</option>
                        <option value="Viudo">Viudo/a</option>
                        <option value="Divorciado">Divorciado/a</option>
                    </select>
                </div>

            </div>
            <div class="col-lg-4 border-right border-left">
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Dirección</label>
                    <textarea wire:model="direccion" id="direccion" class="form-control" rows="4"
                        {{ $tipo != 'none' ? '' : 'disabled' }}></textarea>
                </div>
                <div class="form-row" style="margin-bottom: 2px">
                    <div class="form-group col-md-12 col-lg-4" style="margin-bottom: 2px">
                        <label>Código postal</label>
                        <input wire:model="codigoPostal" id="codigoPostal" type="text" class="form-control"
                            {{ $tipo != 'none' ? '' : 'disabled' }}>
                    </div>
                    <div class="form-group col-md-12 col-lg-8" style="margin-bottom: 2px">
                        <label>Localidad</label>
                        <input wire:model="localidad" id="localidad" type="text" class="form-control"
                            placeholder="Localidad" {{ $tipo != 'none' ? '' : 'disabled' }}>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label for="inputState">Provincia</label>
                    <select wire:model="provincia" id="provincia" class="form-control"
                        {{ $tipo != 'none' ? '' : 'disabled' }}>
                        <option selected></option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Pais</label>
                    <input wire:model="pais" id="pais" type="text" class="form-control" value="España"
                        {{ $tipo != 'none' ? '' : 'disabled' }}>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Email</label>
                    <input wire:model="email" id="email" type="email" class="form-control" placeholder="Email"
                        {{ $tipo != 'none' ? '' : 'disabled' }}>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Telefono movil</label>
                    <input wire:model="telefonoMovil" id="telefonoMovil" type="text" class="form-control"
                        placeholder="Telefono movil" {{ $tipo != 'none' ? '' : 'disabled' }}>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Telefono fijo</label>
                    <input wire:model="telefonoFijo" id="telefonoFijo" type="text" class="form-control"
                        placeholder="Telefono fijo" {{ $tipo != 'none' ? '' : 'disabled' }}>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label class="text-primary">Email acceso web</label>
                    <input wire:model="emailWeb" id="emailWeb" type="email" class="form-control"
                        placeholder="Contraseña" required {{ $tipo != 'none' && $tipo != 'C' ? '' : 'disabled' }}>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label class="text-primary">Contraseña acceso web</label>
                    <input wire:model="passwordWeb" id="passwordWeb" type="password" class="form-control"
                        placeholder="Contraseña" required {{ $tipo != 'none' && $tipo != 'C' ? '' : 'disabled' }}>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-start">
            <button id="submit" type="submit" class="btn btn-success"
                {{ $tipo != 'none' ? '' : 'disabled' }}>Registrar</button>
        </div>
    </form>
</div>
