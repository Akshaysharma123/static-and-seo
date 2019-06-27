<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;
use Sofa\Eloquence\Eloquence;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
 
  use Notifiable;
	protected $date = [
		'created_at',
		'updated_at',
	];
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'username',  'password'];


  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];
  

}
