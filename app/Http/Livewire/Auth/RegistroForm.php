<?php

namespace App\Http\Livewire\Auth;

use App\Mail\Welcome;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class RegistroForm extends Component
{
    public $first_name;
    public $second_name;
    public $email;
    public $password;
    public $password_repeat;
    public $newsletter;
    public $terminos;
    public function render()
    {
        return view('livewire.auth.registro-form');
    }
    protected $rules = [
        'email' => ['required', 'email', 'unique:users,email'],
        'first_name' => ['required', 'min:1'],
        'second_name' => ['required', 'min:1'],
        'password' => ['required', 'regex:/^(?=(?:.*[0-9]){1})(?=(?:.*[A-Z]){1})(?=(?:.*[a-z]){2})\S{8,}$/'],
        'password_repeat' => ['required', 'required_with:password', 'same:password'],
        'terminos' => 'accepted',
    ];

    protected $messages = [
        'email.required' => 'Campo email no puede estar vacio.',
        'email.email' => 'El formato de email es incorrecto.',
    ];

    public function create()
    {
        $this->validate();

        $user = User::create([
            'first_name' => $this->first_name,
            'second_name' => $this->second_name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'newsletter' => $this->newsletter != "1" ? "0" : $this->newsletter,
        ]);
        //Enviar email de bienvenida

        Mail::to($user->email)->send(
            new Welcome($user->first_name . ', ' . $user->second_name));

        //********************************************** */
        ////Sistema de login redireccionar a dashboard
        redirect()->route('me');

        $this->resetForm();
    }
    public function newsletterCheck()
    {
        if ($this->newsletter) {
            $this->newsletter = "1";
        } else {
            $this->newsletter = 0;
        }
    }
    public function resetForm()
    {
        $this->first_name = "";
        $this->second_name = "";
        $this->email = "";
        $this->password = "";
        $this->password_repeat = "";
        $this->newsletter = "";
        $this->terminos = "";
    }
}
