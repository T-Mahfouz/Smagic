<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
  
  protected $fillable = [
    'employer_id','branch_id','user_id','city_id','identifier','tax','count','cost','discount',
  ];
  protected $dates = ['created_at','updated_at',];
}
