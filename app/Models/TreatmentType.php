<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreatmentType extends Model
{
  protected $fillable = [
    'name',
  ];
  protected $dates = ['created_at','updated_at',];
}
