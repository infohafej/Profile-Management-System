<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email','phone','designation','father_name',
        'mother_name','present_address','permanent_address',
        'date_of_birth','religion','gender','marital_status',
        'image','career_objective'
    ];
}
