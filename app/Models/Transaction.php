<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

  
  protected $fillable = [
    'employer_id','horse_id','place_id','cost','insurance','image','user_id','service_id','source_place','source_phone','source_address','moved_at','destination_place','destination_phone','destination_address','arrived_at','tax',
  ];
  protected $dates = ['created_at','updated_at',];
}
