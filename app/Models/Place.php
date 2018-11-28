<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{



  protected $fillable = [
    'number','branch_id','city_id',
  ];
  protected $dates = ['created_at','updated_at',];
}
