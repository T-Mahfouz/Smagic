<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stable extends Model
{

  protected $fillable = [
    'employer_id','stable_type_id','user_id','branch_id','city_id','count','cost','tax','new_user',
  ];
  protected $dates = ['created_at','updated_at',];
}
