<?php

namespace App\Http\Livewire\Home;

use App\Models\Newsletter;
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

        $newsletterCheck = Newsletter::where('email', $this->email)->first();
        if (!$newsletterCheck){
            $newsletter = new Newsletter();
            $newsletter->email = $this->email;
            $newsletter->save();
        }
      
        $this->dispatchBrowserEvent(
            'alertNewsletter',
            ['message' => 'Gracias por suscribirse a nuestro newsletter.']
        );
        $this->resetForm();
    }
    public function resetForm()
    {
        $this->email = "";
        $this->terminos = "";
    }
}
