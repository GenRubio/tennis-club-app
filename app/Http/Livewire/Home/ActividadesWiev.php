<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class ActividadesWiev extends Component
{
    public $actividades;
    public function render()
    {
        return view('livewire.home.actividades-wiev');
    }
}
