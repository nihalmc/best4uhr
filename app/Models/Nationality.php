<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory;
    protected $table = 'nationalities'; // Specify the table name if different

    protected $fillable = ['name']; // Define the fillable attributes


}
