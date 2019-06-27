<?php

namespace App\Events;
use Illuminate\Queue\SerializesModels;

class SubscribeEvent
{
    use SerializesModels;
    public $subscribe;
    public function __construct($data)
    { 
      
       $this->subscribe=$data;
    }
   
}