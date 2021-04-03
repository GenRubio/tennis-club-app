<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.auth.login-form');
    }
    protected $rules = [
        'email' => ['required' , 'email'],
        'password' => ['required'],
    ];

    protected $messages = [
        'email.required' => 'Campo email no puede estar vacio.',
        'email.email' => 'El formato de email es incorrecto.',
    ];
    public function login(){
        $this->validate();

        $credentials = ['email' => $this->email, 'password' => $this->password, 'email_validate' => 1];

        if (Auth::attempt($credentials, true)){

            redirect()->route('me');
        }
        else{
            session()->flash('error', 'Email o contraseña incorrectos.');
        }

        $this->resetForm();
    }
    public function resetForm(){
        $this->email = "";
        $this->password = "";
    }
}
