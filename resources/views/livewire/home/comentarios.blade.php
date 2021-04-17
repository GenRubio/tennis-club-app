<div>
    <h4>
        <strong class="color-red">Respuestas {{ count($totalComentarios) }}</strong>
        <span id="countComments" style="color: #e7e0e0;font-size: 16px;"></span>
    </h4>
    <hr class="featurette-divider">
    @auth
        <form wire:submit.prevent="submit">
            <div class="form-group">
                <textarea wire:model="message" class="form-control" placeholder="Escribe tu comentario aquí..." rows="5"
                    name="comentario" required></textarea>
            </div>
            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-outline-danger mr-3"><strong>Cancelar</strong></button>
                <button type="submit" class="btn btn-danger"><strong>Publicar comentario</strong></button>
            </div>
        </form>
        <br> <br>
    @endauth
    @if (Auth::check() == false)
        <form>
            <div class="d-flex justify-content-end">
                <a href="{{ route('login') }}" class="login-link" style="text-decoration: none;">
                    <i class="far fa-bell"></i> Iniciar sesión
                </a>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="editor" placeholder="Escribe tu comentario aquí..." rows="5"
                    disabled></textarea>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('registro') }}" class="btn btn-danger"><strong>Registrarse</strong></a>
            </div>
        </form>
        <br> <br>
    @endif
    @if (count($comentarios) == 0)
        <div class="p-4 border-bottom border-top border-dark">
            <div class="d-flex justify-content-center" style="color:whitesmoke;">
                SE EL PRIMERO EN COMENTAR
            </div>
        </div>
    @else
        @foreach ($comentarios as $comment)
            <div class="row border-bottom border-dark m-0 mb-4">
                <div class="mr-2 flex-shrink-0">
                    <img src="{{ $comment->user->image ? url($comment->user->image) : url('/images/default.jpg') }}"
                        alt="" width="40" height="40" class="rounded-circle">
                </div>

                <div class="col">
                    <div style="color: whitesmoke;">
                        <h5 class="link-font mb-1"><strong>{{ $comment->user->user_name }}</strong></h5>
                        <p class="link-font text-justify text-secondary">
                            {{ $comment->created_at->translatedFormat('jS F Y') }}</p>
                        <p class="link-font text-justify">{{ $comment->comentario }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        @if (count($totalComentarios) >= $amount + 1)
            <div class="d-flex justify-content-center">
                <button wire:click="load" type="button" class="btn btn-danger" class="link-font">
                    <strong>Mostrar más comentarios</strong>
                </button>
            </div>
        @endif
    @endif
</div>
