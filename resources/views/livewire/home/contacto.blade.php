<div>
    <form wire:submit.prevent="send">
        @if ($errors->has('nombre') || $errors->has('email') || $errors->has('mensaje'))
            <div class="alert alert-danger" role="alert">
                @error('nombre') {{ $message }} <br>@enderror
                @error('email') {{ $message }} <br>@enderror
                @error('mensaje') {{ $message }} <br>@enderror
            </div>
        @endif
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input wire:model="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">Correo electrónico</label>
                <input wire:model="email" type="email" class="form-control" id="email" placeholder="Correo electrónico"
                    required>
            </div>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea wire:model="mensaje" class="form-control" id="mensaje" rows="11" placeholder="Mensaje"
                required></textarea>
        </div>
        <button type="submit" class="btn btn-danger"><strong>ENVIAR</strong></button>
    </form>
</div>
<script>
    window.addEventListener('alert', event => {
        toastr.options.closeButton = true;
        toastr.success(event.detail.message);
    })

</script>