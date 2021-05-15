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
                <label for="nombre">{{ translate('nombre') }}</label>
                <input wire:model="nombre" type="text" class="form-control inputs-style" id="nombre" placeholder="{{ translate('nombre') }}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">{{ translate('email') }}</label>
                <input wire:model="email" type="email" class="form-control inputs-style" id="email" placeholder="{{ translate('email') }}"
                    required>
            </div>
        </div>
        <div class="form-group">
            <label for="mensaje">{{ translate('mensaje') }}</label>
            <textarea wire:model="mensaje" class="form-control inputs-style" id="mensaje" rows="11" placeholder="{{ translate('mensaje') }}"
                required></textarea>
        </div>
        <button type="submit" class="btn btn-danger"><strong>{{ translate('enviar') }}</strong></button>
    </form>
</div>
<script>
    window.addEventListener('alert', event => {
        toastr.options.closeButton = true;
        toastr.success(event.detail.message);
    })

</script>