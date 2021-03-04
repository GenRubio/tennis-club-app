<div>
    <form wire:submit.prevent="search">
        <p style="color:rgb(195, 195, 195) !important;" class="form-text text-muted">
            Introduce el correo electrónico para buscar tu cuenta.</p>
        <div class="form-group">
            @if (session()->has('error'))
                <span class="error" style="color: red;">{{ session('error') }}</span>
            @endif
            @if (session()->has('success'))
                <span class="success" style="color: rgb(10, 190, 34);">{{ session('success') }}</span>
            @endif
            @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <input wire:model="email" type="email" name="email" id="email" class="form-control inputs-style"
                placeholder="Email">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit"
                class="btn btn-outline-danger mr-2 mt-1 d-none d-sm-block">Buscar</button>
            <a href="{{ route('login') }}" type="button"
                class="btn btn-outline-light mr-2 mt-1 d-none d-sm-block">Cancelar</a>
        </div>
    </form>
</div>
