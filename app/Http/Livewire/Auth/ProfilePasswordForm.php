<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProfilePasswordForm extends Component
{
    public $user;
    public $passwordOld;
    public $password;
    public $passwordRepeat;

    public function render()
    {
        return view('livewire.auth.profile-password-form');
    }
    protected $rules = [
        'password' => ['required', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/'],
        'passwordRepeat' => ['required', 'required_with:password', 'same:password'],
    ];

    public function save(){
        $this->validate();
        if ($this->validateCurrentPassword()){
            User::where('id', $this->user->id)->update([
                'password' => Hash::make($this->password),
            ]);
            
        }
    }

    private function validateCurrentPassword(){
        if (Hash::check($this->passwordOld, $this->user->password)) {
            return true;
        }
        return false;
    }
}
