<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['departmentName', 'description'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course__departments');
    }
}
