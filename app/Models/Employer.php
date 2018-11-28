<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable
{
    use Notifiable;



    protected $fillable = [
      'name', 'email', 'password','image','phone','position','management','branch_id','gender','salary','shift_id','shift_from','shift_to','special_needs','hosting','hosting_end','nationality','education','medical_insurance','medical_insurance_end','hiring_date','firebase','notify',
    ];
    protected $hidden = ['password', 'remember_token',];
    protected $dates = ['created_at','updated_at',];
}
