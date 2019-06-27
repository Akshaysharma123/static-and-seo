<?php

namespace App\Events;
use Illuminate\Queue\SerializesModels;

class ContactUsEvent
{
    use SerializesModels;
    public $contact;
    public function __construct($data)
    { 
       $this->contact=$data;
    }
   
}