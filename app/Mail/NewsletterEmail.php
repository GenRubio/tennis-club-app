<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $noticia;
    public function __construct($data)
    {
        $this->noticia = $data;
    }

    public function build()
    {
        return $this->view('emails.newsletter-email', ['noticia' => $this->noticia]);
    }
}
