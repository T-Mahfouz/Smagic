<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{



  protected $fillable = [
    'employer_id','horse_id','place_id','cost','tax','image','buyer_id','seller_id','seller_nationalID',
  ];
  protected $dates = ['created_at','updated_at',];
}
