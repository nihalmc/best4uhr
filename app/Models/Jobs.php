<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_position',
        'field_of_work',
        'location',
        'salary',
        'nationality',
        'gender',
        'requirements',
        'posted_date',
        'closing_date',
        'status',
        'job_code',
    ];

 public function employer()
{
    return $this->belongsTo(Employers::class, 'employer_id');
}

  public function candidate()
{
    return $this->belongsTo(Candidate::class, 'candidate_id');
}
public function candidateDetail()
{
    return $this->hasMany(CandidateDetail::class, 'job_id');
}
public function applications()
{
    return $this->hasMany(JobApplication::class);
}

public function nationalities()
    {
        return $this->belongsToMany(Nationality::class);
    }


}
