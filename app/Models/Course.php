<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['courseName', 'description', 'duration', 'fees'];

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'course__departments');
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
