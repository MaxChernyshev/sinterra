<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    protected $formData = [];

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->view('front.contact.contact_data')->with($this->formData)->from(env('MAIL_FROM'));
    }
}
