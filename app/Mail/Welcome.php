<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;
    public $userName;
    public $url;
    public $validateEmail;

    public function __construct($userName, $urlValidateEmail)
    {
        $this->userName = $userName;
        $this->url = route('login');
        $this->validateEmail = $urlValidateEmail;
    }

    public function build()
    {
        return $this->subject('Bienvenido a Club Tennis i Pàdel Blanes')
        ->view('emails.welcome')
        ->with($this->url, $this->userName, $this->validateEmail);
    }
}
