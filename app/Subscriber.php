<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model{
   
    protected $dates=['created_at','updated_at'];
    protected $table = 'subscribers';
    protected $fillable = [
        'email','status'
    ];
   
  
   
}
