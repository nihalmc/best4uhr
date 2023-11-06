<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freedetails extends Model
{
    use HasFactory;
      protected $fillable = [
        'name','email','mobile','job_position','experience_region','experience_years','resume',

    ];
}
