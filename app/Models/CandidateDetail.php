<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateDetail extends Model
{
    use HasFactory;
    protected $table = 'candidate_details';

    protected $fillable = [
        'home_country',
        'uae_status',
        'nationality',
        'languages_known',
         'qualification',
         'gender',
         'driving_licence',
         'driving_licence_expiry_date',
          'uae_status_expiry_date',
           'experience_region',
           'experience_years',
        'resume',
        'job_id',
        'job_position', // Add the 'job_position' field


    ];

    // Define the relationship with the User (Candidate) model
   public function candidate()
{
    return $this->belongsTo(Candidate::class, 'candidate_id');
}
public function job()
{
    return $this->belongsTo(Jobs::class, 'job_id');
}

  public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

}
