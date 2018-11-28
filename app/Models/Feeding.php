<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feeding extends Model
{


  protected $fillable = [
    'employer_id','user_id','branch_id','cost','city_id','feeding_type_id','identifier','count','tax','discount',
  ];
  protected $dates = ['created_at','updated_at',];
}
