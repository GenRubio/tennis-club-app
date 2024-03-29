<div>
    <form wire:submit.prevent="create">
        <div class="form-group">
            @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <input wire:model="email" type="email" ¡ class="form-control inputs-style" placeholder="{{ translate('email') }}" required>
        </div>
        <div class="form-group mb-4">
            @error('password') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <input wire:model="password" type="password" class="form-control inputs-style" placeholder="{{ translate('contraseña') }}" required>
            <small id="emailHelp" class="form-text text-muted"
                style="margin-top: -15px; color:rgb(195, 195, 195) !important;">
                {{ translate('password_rules') }}
            </small>
        </div>
        <div class="form-group mb-4">
            @error('password_repeat') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <input wire:model="password_repeat" type="password" class="form-control inputs-style"
                placeholder="{{ translate('repeat_password') }}" required>
        </div>
        <div class="form-check">
            <input wire:model="newsletter" wire:click="newsletterCheck" type="checkbox" class="form-check-input"
                id="newsletter">
            <label class="form-check-label color-whitesmoke" for="newsletter">
                {{ translate('recibir_noticias') }}
            </label>
        </div>
        <br>
        @error('terminos') <span class="error" style="color: red;">{{ $message }}</span>
        @enderror
        <div class="form-check">
            <input wire:model="terminos" type="checkbox" class="form-check-input" id="terminos">
            <label class="form-check-label color-whitesmoke" for="terminos">
                {{ translate('terminos') }}
            </label>
        </div>
        <br>
        <input type="submit" name="login" id="login" class="btn btn-block login-btn mb-4" type="button"
            value="{{ translate('registrarse') }}">
    </form>
</div>

