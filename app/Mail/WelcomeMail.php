<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Setting;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function build()
    {
        $setting = Setting::first();
        return $this->from($setting->company_email)
        ->subject('Welcome to | '.env('COMPANY_NAME'))
            ->view('emails.welcome');
    }

}