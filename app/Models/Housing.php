<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Housing extends Model
{

    protected $fillable = [
      'employer_id','horse_id','place_id','cost','insurance','image',
    ];
    protected $dates = ['created_at','updated_at',];

}
