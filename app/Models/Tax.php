<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{

  protected $fillable = [
    'number','amount','discount_id',
  ];
  protected $dates = ['created_at','updated_at',];
}
