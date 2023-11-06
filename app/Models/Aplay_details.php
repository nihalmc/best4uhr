<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplay_details extends Model
{
    use HasFactory;
      protected $fillable = [
        'job_id',
        'name',
        'email',
        'mobile',
        'cover_letter',
        'resume',

    ];

    // Define relationships with other models
    public function job()
    {
        return $this->belongsTo(Jobs::class, 'job_id');
    }

}
