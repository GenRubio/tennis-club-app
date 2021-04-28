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
                        <label for="">Contraseña actual</label>
                        <input wire:model="passwordOld" type="password" class="form-control" id="" placeholder="Contraseña actual">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">Nueva contraseña</label>
                        <input wire:model="password" type="password" class="form-control" id="" placeholder="Nueva actual">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">Repite contraseña</label>
                        <input wire:model="passwordRepeat" type="password" class="form-control" id="" placeholder="Repite nueva contraseña">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-danger"><strong>Guardar cambios</strong></button>
        </div>
    </form>
</div>
<script>
    window.addEventListener('alert', event => {
        toastr.options.closeButton = true;
        toastr.success(event.detail.message);
    })

</script>