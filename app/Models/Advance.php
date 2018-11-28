<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{

  protected $fillable = [
    'employer_id','amount','remains',
  ];
  protected $dates = ['created_at','updated_at',];
}
