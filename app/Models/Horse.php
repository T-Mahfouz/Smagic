<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{




  protected $fillable = [
    'user_id','place_id','name','notify',
  ];
  protected $dates = ['created_at','updated_at',];
}
