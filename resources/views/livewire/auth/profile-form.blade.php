<div>
    <style>
        label {
            color: white;
        }

    </style>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('nombre') }}</label>
                        <input wire:model="nombre" type="text" class="form-control" id="" placeholder="{{ translate('nombre') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('apellidos') }}</label>
                        <input wire:model="apellidos" type="text" class="form-control" id="" placeholder="{{ translate('apellidos') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('fecha_nacimiento') }}</label>
                        <input wire:model="fecha" type="date" class="form-control" id="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('telefono_mobil') }}</label>
                        <input wire:model="mobil" type="text" class="form-control" id="" placeholder="{{ translate('telefono_mobil') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('telefono_fijo') }}</label>
                        <input wire:model="fijo" type="text" class="form-control" id="" placeholder="{{ translate('telefono_fijo') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('nom_emergencia') }}</label>
                        <input wire:model="nombreEmergencia" type="text" class="form-control" id="" placeholder="{{ translate('nombre_emer_place') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('numero_emergencia') }}</label>
                        <input wire:model="numero1Emergencia" type="text" class="form-control" id="" placeholder="{{ translate('numero_emergencia_place') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('segundo_num_emer') }}</label>
                        <input wire:model="numero2Emergencia" type="text" class="form-control" id=""
                            placeholder="{{ translate('segundo_num_emer_place') }}">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-danger"><strong>{{ translate('guardar_cambios') }}</strong></button>
        </div>
    </form>
</div>
<script>
    window.addEventListener('alertProfile', event => {
        toastr.options.closeButton = true;
        toastr.success(event.detail.message);
    })

</script>