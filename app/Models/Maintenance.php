<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{

  protected $fillable = [
    'employer_id','city_id','branch_id','cost','description','maintenance_type_id',
  ];
  protected $dates = ['created_at','updated_at',];
}
