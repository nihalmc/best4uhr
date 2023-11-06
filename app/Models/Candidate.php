<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Candidate extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'candidates';
    protected $guard = 'candidate';

    protected $fillable = [
        'name',
        'contact_email',
        'username',
        'mobile',
        'registration_number',
        'password',
        'status', // Add 'status' to the fillable array
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $attributes = [
        'status' => 'pending', // Set the default value for 'status'
    ];

    public function candidateDetail()
    {
        return $this->hasOne(CandidateDetail::class);
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }
}


