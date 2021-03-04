<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RecoverPasswordVelidateController extends Component
{
    public $password;
    public $password_repeat;
    public $idUser;
    public $tokenUser;
    public function render()
    {
        return view('livewire.auth.recover-password-velidate-controller');
    }
    protected $rules = [
        'password' => ['required', 'regex:/^(?=(?:.*[0-9]){1})(?=(?:.*[A-Z]){1})(?=(?:.*[a-z]){2})\S{8,}$/'],
        'password_repeat' => ['required', 'required_with:password', 'same:password'],
    ];

    protected $messages = [
        'email.required' => 'Campo email no puede estar vacio.',
        'email.email' => 'El formato de email es incorrecto.',
    ];
    public function change(){
        $this->validate();

        User::where('id', decrypt($this->idUser))
        ->where('token_recover_email', $this->tokenUser)
        ->update([
            'password' => Hash::make($this->password),
            'token_recover_email' => '',
            'active_token_email' => 0
        ]);

        //Redirect to user dashboard

        $this->resetForm();
    }
    public function resetForm(){
        $this->password = "";
        $this->password_repeat = "";
    } 
}
