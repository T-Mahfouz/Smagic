<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
  

  protected $fillable = [
    'employer_id','horse_id','place_id','cost','discount','image','tax','treatment_type_id','branch_id','city_id',
  ];
  protected $dates = ['created_at','updated_at',];
}
