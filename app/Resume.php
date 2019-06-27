<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Resume extends Model{
   
    protected $dates=['created_at','updated_at'];
    protected $table = 'send_resumes';
    protected $fillable = [
        'name','email','total_experience','current_ctc','expected_ctc','resume','message','post'
    ];
  
   
}
