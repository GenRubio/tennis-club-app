<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecoverPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $url;
    public $nombre;
    public function __construct($url, $nombre)
    {
        $this->url = $url;
        $this->nombre = $nombre;
    }
    public function build()
    {
        return $this->subject('TennisPadel recuperar contraseña')
        ->markdown('emails.recover-password')
        ->with($this->url, $this->nombre);
    }
}
