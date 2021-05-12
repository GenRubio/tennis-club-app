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
                        <label for="">Nombre</label>
                        <input wire:model="nombre" type="text" class="form-control" id="" placeholder="Nombre">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input wire:model="apellidos" type="text" class="form-control" id="" placeholder="Apellidos">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">Fecha de nacimineto</label>
                        <input wire:model="fecha" type="date" class="form-control" id="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">Telefono mobil</label>
                        <input wire:model="mobil" type="text" class="form-control" id="" placeholder="Telefono mobil">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">Telefono fijo</label>
                        <input wire:model="fijo" type="text" class="form-control" id="" placeholder="Telefono fijo">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">Nombre emergencia</label>
                        <input wire:model="nombreEmergencia" type="text" class="form-control" id="" placeholder="Nombre de contacto de emergencia">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">Numero emergencia</label>
                        <input wire:model="numero1Emergencia" type="text" class="form-control" id="" placeholder="Numero de contacto de emergencia">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">Segundo numero emergencia</label>
                        <input wire:model="numero2Emergencia" type="text" class="form-control" id=""
                            placeholder="Segundo numero de contacto de emergencia">
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
    window.addEventListener('alertProfile', event => {
        toastr.options.closeButton = true;
        toastr.success(event.detail.message);
    })

</script>