@if (count($comments) == 0)

    <div class="p-4 border-bottom border-top border-dark">
        <div class="d-flex justify-content-center" style="color:whitesmoke;">
            SE EL PRIMERO EN COMENTAR
        </div>
    </div>
@else
    @foreach ($comments as $comment)
        <div class="row border-bottom border-dark m-0 mb-4">
            <div class="mr-2 flex-shrink-0">
                <img src="{{ $comment->user->image ? url($comment->user->image) : url('/images/default.jpg') }}" alt="" width="40" height="40"
                    class="rounded-circle">
            </div>

            <div class="col">
                <div style="color: whitesmoke;">
                    <h5 class="link-font mb-1"><strong>{{ $comment->user->full_name }}</strong></h5>
                    <p class="link-font text-justify text-secondary">{{ $comment->created_at->translatedFormat('jS F Y') }}</p>
                    <p class="link-font text-justify">{{ $comment->comentario }}</p>
                </div>
            </div>
        </div>
        @php
            $last_id = $comment->id;
        @endphp
    @endforeach
    @php
        $comentarios = \App\Models\NoticiaComentario::where('noticia_id', $noticia->id)
            ->orderBy('id', 'DESC')
            ->get();
        
        $comentariosId = [];
        foreach ($comentarios as $comentario) {
            array_push($comentariosId, $comentario->id);
        }
    @endphp
    @if (in_array($last_id - 1, $comentariosId))
        <div class="d-flex justify-content-center">
            <a type="button" class="btn btn-danger" id="load_more_button" data-id="{{ $last_id }}"
                class="link-font">
                <strong>Mostrar más comentarios</strong>
            </a>
        </div>

    @endif

@endif
