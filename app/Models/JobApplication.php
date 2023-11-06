<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

     protected $fillable = [
        'job_id',
        'candidate_id',
        'cover_letter',
        'resume',
        'employer_id',
       'details_id',
        // Add other fields as needed
    ];

    // Define relationships with other models
    public function job()
    {
        return $this->belongsTo(Jobs::class, 'job_id');
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

     public function employer()
{
    return $this->belongsTo(Employers::class, 'employer_id');
}

public function candidateDetail()
{
    return $this->belongsTo(CandidateDetail::class, 'details_id');
}

// public function candidateDetail()
// {
//     return $this->hasMany(CandidateDetail::class, 'job_id');
// }

}

