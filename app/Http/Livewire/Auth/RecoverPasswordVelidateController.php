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
        'password' => ['required', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/'],
        'password_repeat' => ['required', 'required_with:password', 'same:password'],
    ];

    protected $messages = [
        'email.required' => "translate('error_email')",
        'email.email' => "translate('error_email_2')",
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
        return redirect()->route('login');

        $this->resetForm();
    }
    public function resetForm(){
        $this->password = "";
        $this->password_repeat = "";
    } 
}
