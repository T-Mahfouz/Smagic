<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outlay extends Model
{


  protected $fillable = [
    'employer_id','amount',
  ];
  protected $dates = ['created_at','updated_at',];
}
