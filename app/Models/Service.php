<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{


  protected $fillable = [
    'name','description',
  ];
  protected $dates = ['created_at','updated_at',];
}
