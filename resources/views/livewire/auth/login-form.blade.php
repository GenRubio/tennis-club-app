<div>
    <form>
        <div class="form-group">
            <a href="#" class="google btn btn-block btn-secondary shadow-sm bg-white">
                <div>
                    <i><img src="{{ url('/images/home/login/google-icon.svg') }}" height="20" , width="20"></i>
                    <span class="ml-2"> Continuar con Google</span>
                </div>
            </a>
        </div>
        <div class="form-group">
            <a href="#" class="facebook btn btn-block btn-dark shadow-sm bg-white">
                <div>
                    <i><img src="{{ url('/images/home/login/facebook-2.svg') }}" height="20" , width="20"></i>
                    <span class="ml-2"> Continuar con Facebook</span>
                </div>
            </a>
        </div>
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control inputs-style" placeholder="Email">
        </div>
        <div class="form-group mb-4">
            <input type="password" name="password" id="password" class="form-control inputs-style"
                placeholder="Contraseña">
        </div>
        <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Entrar">
    </form>
</div>
