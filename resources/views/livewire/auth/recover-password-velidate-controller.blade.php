<div>
    <form wire:submit.prevent="change">
        <div class="form-group mb-4">
            @error('password') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <input wire:model="password" id="password" type="password" class="form-control inputs-style"
                placeholder="Nueva contraseña">
            <small id="emailHelp" class="form-text text-muted"
                style="margin-top: -15px; color:rgb(195, 195, 195) !important;">
                La contraseña debe contener minimo 8 caracteres letra mayuscula, minuscula y un
                numero.
            </small>
        </div>
        <div class="form-group mb-4">
            @error('password_repeat') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <input wire:model="password_repeat" type="password" class="form-control inputs-style"
                placeholder="Vuelve a escribir la contraseña">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit"
                class="btn btn-outline-danger mr-2 mt-1 d-none d-sm-block">Siguente</button>
            <a href="{{ route('login') }}" type="button"
                class="btn btn-outline-light mr-2 mt-1 d-none d-sm-block">Cancelar</a>
        </div>
    </form>
</div>
