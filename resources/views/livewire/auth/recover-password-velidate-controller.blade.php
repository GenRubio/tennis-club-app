<div>
    <form wire:submit.prevent="change">
        <div class="form-group mb-4">
            @error('password') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <input wire:model="password" id="password" type="password" class="form-control inputs-style"
                placeholder="{{ translate('new_password') }}">
            <small id="emailHelp" class="form-text text-muted"
                style="margin-top: -15px; color:rgb(195, 195, 195) !important;">
                {{ translate('password_rules') }}
            </small>
        </div>
        <div class="form-group mb-4">
            @error('password_repeat') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <input wire:model="password_repeat" type="password" class="form-control inputs-style"
                placeholder="{{ translate('repeat_password_message') }}">
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('login') }}" type="button"
                class="btn btn-outline-danger mr-2 mt-1"><strong>{{ translate('cancel') }}<strong></a>
            <button type="submit" class="btn btn-danger mr-2 mt-1">{{ translate('siguente') }}</button>

        </div>
    </form>
</div>
