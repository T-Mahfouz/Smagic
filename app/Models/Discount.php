<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
  protected $fillable = [
    'amount',
  ];
  protected $dates = ['created_at','updated_at',];
}
