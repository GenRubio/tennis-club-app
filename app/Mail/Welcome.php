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

    public function __construct($userName)
    {
        $this->userName = $userName;
        $this->url = route('home');
    }

    public function build()
    {
        return $this->subject('Bienvenido a TennisPadel')
        ->markdown('emails.welcome')
        ->with($this->url, $this->userName);
    }
}
