<?php

namespace App\Http\Livewire\Home;

use App\Mail\ContactarNosotros;
use Illuminate\Support\Facades\Mail;
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
        'email.required' => "translate('error_email')",
        'email.email' => "translate('error_email_2')",
    ];
    public function send()
    {
        $this->validate();

        $data = [
            'name' => $this->nombre,
            'email' => $this->email,
            'subject' => $this->mensaje
        ];

        Mail::to('burbianio@gmail.com')->send(new ContactarNosotros($data));

        $this->dispatchBrowserEvent(
            'alert',
            ['message' => translate('contact_message')]
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
