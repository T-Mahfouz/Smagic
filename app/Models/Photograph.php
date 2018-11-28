<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photograph extends Model
{

  protected $fillable = [
    'employer_id','user_id','city_id','cost','branch_id','tax','count','discount',
  ];
  protected $dates = ['created_at','updated_at',];
}
