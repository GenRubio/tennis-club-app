<?php

namespace App\Http\Livewire\Home;

use App\Mail\NewsletterConfirmEmail;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class NewsletterForm extends Component
{
    public $email;
    public $terminos;
    public function render()
    {
        return view('livewire.home.newsletter-form');
    }
    protected $rules = [
        'email' => ['required', 'email'],
        'terminos' => 'accepted',
    ];

    protected $messages = [
        'email.required' => 'Campo email no puede estar vacio.',
        'email.email' => 'El formato de email es incorrecto.',
    ];

    public function create()
    {
        $this->validate();

        $newsletterCheck = Newsletter::where('email', $this->email)->where('activo', 0)->first();
        if (!$newsletterCheck) {
            $newsletter = new Newsletter();
            $newsletter->email = $this->email;
            $newsletter->token = md5(uniqid(mt_rand(), false));
            $newsletter->activo = 1;
            $newsletter->save();

            //Mail::to($this->email)->send(new NewsletterConfirmEmail);
        } else {
            $newsletterCheck->delete();

            $newsletter = new Newsletter();
            $newsletter->email = $this->email;
            $newsletter->token = md5(uniqid(mt_rand(), false));
            $newsletter->activo = 1;
            $newsletter->save();

            //Mail::to($this->email)->send(new NewsletterConfirmEmail);
        }

        $this->dispatchBrowserEvent(
            'alertNewsletter',
            ['message' => '¡GRACIAS POR SUSCRIBIRTE! ¡Te has suscrito correctamente! Pronto recibirás las novedades sobre nuestro club. Revisa tu correo electrónico para estar enterado de los próximas publicaciones.']
        );
        $this->resetForm();
    }
    public function resetForm()
    {
        $this->email = "";
        $this->terminos = "";
    }
}
