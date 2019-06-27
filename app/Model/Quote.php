<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Quote extends Model{
   
    protected $dates=['created_at','updated_at'];
    protected $table = 'quotes';
    protected $fillable = [
        'contact_person','email','contact_number','product_budget','project_start_date','product_urgency','product','attachment'
    ];
  
   
}
