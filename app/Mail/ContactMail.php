<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public function __construct($data)
    {
        $this->contact = $data;
    }
    public function build()
    {       
        return $this->from(env('COMPANY_EMAIL'),env('COMPANY_NAME'))
        ->subject('Thanks For Writting Us | '.env('COMPANY_NAME'))
            ->view('emails.contact_us');
    }
}
