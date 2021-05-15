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
        'email.required' => "translate('error_email')",
        'email.email' => "translate('error_email_2')",
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
            
        } else {
            $newsletterCheck->delete();

            $newsletter = new Newsletter();
            $newsletter->email = $this->email;
            $newsletter->token = md5(uniqid(mt_rand(), false));
            $newsletter->activo = 1;
            $newsletter->save();
        }

        $this->dispatchBrowserEvent(
            'alertNewsletter',
            ['message' => translate('newsletter_message')]
        );
        $this->resetForm();
    }
    public function resetForm()
    {
        $this->email = "";
        $this->terminos = "";
    }
}
