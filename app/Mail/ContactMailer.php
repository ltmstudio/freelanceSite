<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        return $this->from('a.ahmedova@ltm.studio') // Укажите отправителя
                    ->to('a.ahmedova@ltm.studio')
                    ->subject('New Contact Form Submission')
                    ->view('emails.contact');
    }
}

