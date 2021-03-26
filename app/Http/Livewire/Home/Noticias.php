<?php

namespace App\Http\Livewire\Home;

use App\Models\Noticia;
use Livewire\Component;

class Noticias extends Component
{
    public $amount = 3;
    public $totalNews;
    public function render()
    {
        $noticias = Noticia::where('activo', 1)->orderBy('id', 'DESC')->take($this->amount)->get();

        $this->totalNews = Noticia::where('activo', 1)->get();
        return view('livewire.home.noticias', compact('noticias'));
    }
    public function load(){
        $this->amount += 3;
    }
}
