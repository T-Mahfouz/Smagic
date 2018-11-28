<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{





  protected $fillable = [
    'employer_id','from','consumed','remains','absent',
  ];
  protected $dates = ['created_at','updated_at','from'];
}
