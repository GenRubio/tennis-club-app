<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Contacto extends Component
{
    public $nombre;
    public $email;
    public $mensaje;
    public function render()
    {
        return view('livewire.home.contacto');
    }
    protected $rules = [
        'nombre' => ['required'],
        'email' => ['required'],
        'mensaje' => ['required', 'min:20'],
    ];


    protected $messages = [
        'email.required' => 'Campo email no puede estar vacio.',
        'email.email' => 'El formato de email es incorrecto.',
    ];
    public function send()
    {
        $this->validate();

        $this->dispatchBrowserEvent(
            'alert',
            ['message' => 'Gracias por contactar con nosotros. Nos pondremos en contacto contigo lo antes posible.']
        );

        $this->resetForm();
    }
    public function resetForm()
    {
        $this->nombre = "";
        $this->email = "";
        $this->mensaje = "";
    }
}
