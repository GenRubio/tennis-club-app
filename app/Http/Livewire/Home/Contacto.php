<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Contacto extends Component
{
    public $nombre;
    public $telefono;
    public $email;
    public $comentario;
    public $validacion;
    public function render()
    {
        return view('livewire.home.contacto');
    }
    protected $rules = [
        'nombre' => ['required'],
        'email' => ['required'],
        'telefono' => ['required', 'min:1'],
        'email' => ['required', 'email'],
        'comentario' => ['required'],
        'validacion' => 'accepted',
    ];

    protected $messages = [
        'email.required' => 'Campo email no puede estar vacio.',
        'email.email' => 'El formato de email es incorrecto.',
    ];
    public function send(){
        $this->validate();

        //Envio de email por el mailchimp
        $this->resetForm();
    }
    public function resetForm()
    {
        $this->nombre = "";
        $this->telefono = "";
        $this->email = "";
        $this->comentario = "";
        $this->validacion = "";
    }
}
