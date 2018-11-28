<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{


  protected $fillable = [
    'employer_id','horse_id','place_id','discount','insurance','image','tax','user_id','amount',
  ];
  protected $dates = ['created_at','updated_at',];
}
