<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use App\LoginHistory;

class LogoutHistory
{
    use SerializesModels;

    public $user;

    public function __construct($session_id)
    {  

       $this->user=$this->LoginDetails($session_id);
    }
    public function LoginDetails($session_id)
    {  $obj=LoginHistory::where('session_id','=',$session_id)->first();
        return $obj?$obj:null;
      
    }
}