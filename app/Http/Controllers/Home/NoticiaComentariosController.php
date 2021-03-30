<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\NoticiaComentario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NoticiaComentariosController extends Controller
{
    public function index(Request $request)
    {
        $noticia = Noticia::where('id', $request->noticia)->first();

        if ($request->id > 0) {
            $comments = NoticiaComentario::where('id', '<', $request->id)
                ->where('noticia_id', '=', $request->noticia)
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();
        } else {
            $comments = NoticiaComentario::where('noticia_id', '=', $request->noticia)
                ->orderBy('id', 'desc')
                ->limit(4)
                ->get();
        }

        $content = view('components.comentarios', compact('comments', 'noticia'))->render();

        return response()->json([
            'content' => $content,
            'count' => count(NoticiaComentario::where('noticia_id', $request->noticia)->get()),
        ], Response::HTTP_CREATED);
    }
    public function store(Request $request)
    {
        $request->validate([
            'comentario' => 'required',
        ]);

        $comment = new NoticiaComentario();
        $comment->comentario = $request->comentario;
        $comment->user_id = auth()->user()->id;
        $comment->noticia_id = $request->noticia_id;
        $comment->save();

        return response()->json([], Response::HTTP_CREATED);
    }
    public function refresh(Request $request)
    {
        $comments = NoticiaComentario::where('noticia_id', $request->id)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        $noticia = Noticia::where('id', $request->id)->first();

        return response()->json([
            'content' => view('components.comentarios', compact('comments', 'noticia'))->render(),
            'count' => count(NoticiaComentario::where('noticia_id', $request->id)->get()),
        ], Response::HTTP_CREATED);
    }
}
