<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{

  protected $fillable = [
    'employer_id','user_id','visit_type_id','cost','branch_id','discount','city_id','horse_id','identifier',
  ];
  protected $dates = ['created_at','updated_at',];
}
