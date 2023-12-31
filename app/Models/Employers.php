<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Employers extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'employer';
    protected $fillable = [
        'company_name',
        'contact_person',
        'address',
        'contact_email',
        'mobile',
        'username',
        'password',
        'file_path',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function job()
{
    return $this->hasMany(Jobs::class, 'employer_id');
}


public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }


}
