<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscribeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subscribe;
    public function __construct($data)
    {
        $this->subscribe = $data;
    }
    public function build()
    {       
        return $this->from('demo@gmail.com',env('COMPANY_NAME'))
        ->subject('Thanks For Writting Us | '.env('COMPANY_NAME'))
            ->view('emails.subscribe_mail');
    }
}
