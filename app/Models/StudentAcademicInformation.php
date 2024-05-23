<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAcademicInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'user_id',
        'secondary_school_name',
        'secondary_school_location',
        'secondary_school_certificate',
        'high_school_name',
        'high_school_location',
        'diploma_course',
        'diploma_university',
        'university_certificate',
        // Add all other attributes you want to be fillable here
    ];
}
