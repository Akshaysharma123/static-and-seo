<?php

namespace App\Events;

use App\User;
use Illuminate\Queue\SerializesModels;
use Request;

class LoginHistory
{
    use SerializesModels;

    public $user;

    public function __construct()
    {      
       
    }
}