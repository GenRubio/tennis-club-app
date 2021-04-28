<div>
    <form wire:submit.prevent="login">
        <div class="form-group">
            <a href="{{ route('google.login') }}" class="google btn btn-block btn-secondary shadow-sm bg-white">
                <div>
                    <i><img src="{{ url('/images/home/login/google-icon.svg') }}" height="20" , width="20"></i>
                    <span class="ml-2"> Continuar con Google</span>
                </div>
            </a>
        </div>
        <hr style="border: 1px solid #e3342f">
        @if (session()->has('error'))
            <span class="error" style="color: red;">{{ session('error') }}</span>
        @endif
        <div class="form-group">
            <input wire:model="email" type="email" name="email" id="email" class="form-control inputs-style"
                placeholder="Email">
        </div>
        <div class="form-group mb-4">
            <input wire:model="password" type="password" name="password" id="password" class="form-control inputs-style"
                placeholder="Contraseña">
        </div>
        <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Entrar">
    </form>
</div>
