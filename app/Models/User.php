<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
      'name', 'email', 'password','phone','address','nationalID','firebase','image','notify',
    ];
    protected $hidden = ['password', 'remember_token',];
    protected $dates = ['created_at','updated_at',];
}
