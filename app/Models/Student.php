<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'firstName',
        'middleName',
        'lastName',
        'phoneNumber',
        'nidaNumber',
        'nacteNumber',
        'email',
        'address',
        'region',
        'postalCode',
        'dateOfBirth',
        'gender',
        'parent',
        'parentPhonenumber',
        'nationality',
        // Add all the other attributes you want to be fillable here
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
