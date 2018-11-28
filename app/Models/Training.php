<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{

  protected $fillable = [
    'employer_id','trainer_id','user_id','training_type_id','cost','insurance','discount','tax_amount','tax_percentage','image',
  ];
  protected $dates = ['created_at','updated_at',];
}
