<?php

namespace App\Http\Livewire\Auth;

use App\Mail\Welcome;
use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class RegistroForm extends Component
{
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
        'password' => ['required', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/'],
        'password_repeat' => ['required', 'required_with:password', 'same:password'],
        'terminos' => 'accepted',
    ];

    protected $messages = [
        'email.required' => "translate('error_email')",
        'email.email' => "translate('error_email_2')",
    ];

    public function create()
    {
        //Eliminar usuario que no tiene verificado el email
        $userOld = User::where('email_validate', 0)
        ->where('email', $this->email)
        ->first();
        if ($userOld){
            $userOld->delete();
        }

        $this->validate();

        $user = new User();
        $user->email = $this->email;
        $user->password =  Hash::make($this->password);
        $user->token_validate_email = md5(uniqid(mt_rand(), false));
        $user->save();
        //Enviar email de verficacion de correo electronico

        $this->sendEmailValidate($user);

        //********************************************** */
         
        //Suscribir usuario a newsletter

        $this->newsletter();

        //********************************************** */
        session()->flash('status', translate('email_validation'));
        return redirect(route('login'));

        $this->resetForm();
    }
    public function newsletter(){
        if (($this->newsletter != "1" ? "0" : $this->newsletter) == "1"){
            $newsletter = new Newsletter();
            $newsletter->email = $this->email;
            $newsletter->activo = $this->newsletter != "1" ? "0" : $this->newsletter;
            $newsletter->save();
        }
    }
    public function sendEmailValidate($user){
        $urlValidateEmail = route('email.validate') . "?id=" . encrypt($user->id) . "&token=" . $user->token_validate_email;
        $fullName = $user->first_name . ' ' . $user->second_name;
        Mail::to($user->email)->send(
            new Welcome($fullName, $urlValidateEmail));
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
        $this->email = "";
        $this->password = "";
        $this->password_repeat = "";
        $this->newsletter = "";
        $this->terminos = "";
    }
}
