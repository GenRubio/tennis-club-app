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
        //Eliminar usuario que no tiene verificado el email
        $userOld = User::where('email_validate', 0)
        ->where('email', $this->email)
        ->first();
        if ($userOld){
            $userOld->delete();
        }

        $this->validate();

        $user = new User();
        $user->first_name = $this->first_name;
        $user->second_name = $this->second_name;
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
        session()->flash('status', 'Hemos enviado correo electrónico de verificación a tu bandeja de entrada.');
        return redirect(route('login'));

        $this->resetForm();
    }
    public function newsletter(){
        if (($this->newsletter != "1" ? "0" : $this->newsletter) == "1"){
            $newsletter = new Newsletter();
            $newsletter->email = $this->email;
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
        $this->first_name = "";
        $this->second_name = "";
        $this->email = "";
        $this->password = "";
        $this->password_repeat = "";
        $this->newsletter = "";
        $this->terminos = "";
    }
}
