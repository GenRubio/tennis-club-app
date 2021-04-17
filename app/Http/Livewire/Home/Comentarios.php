<?php

namespace App\Http\Livewire\Home;

use App\Models\NoticiaComentario;
use Livewire\Component;

class Comentarios extends Component
{
    public $noticia;
    public $amount = 5;
    public $totalComentarios;

    public $message;

    public function render()
    {
        $comentarios = NoticiaComentario::where('activo', 1)
        ->where('noticia_id', $this->noticia)
        ->orderBy('id', 'DESC')
        ->take($this->amount)->get();

        $this->totalComentarios = NoticiaComentario::where('activo', 1)
        ->where('noticia_id', $this->noticia)
        ->get();

        return view('livewire.home.comentarios', compact('comentarios'));
    }

    protected $rules = [
        'message' => ['required', 'max:150'],
    ];
    
    public function submit(){
        $this->validate();

        $comentario = new NoticiaComentario();
        $comentario->user_id = auth()->user()->id;
        $comentario->noticia_id = $this->noticia;
        $comentario->comentario = $this->message;
        $comentario->save();

        $this->resetForm();
    }

    public function resetForm(){
        $this->message = "";
    }

    public function load(){
        $this->amount += 5;
    }
}
