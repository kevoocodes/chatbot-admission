<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    //
    public function index() {
        return view('dashboards.students.student_profile');
    }
}
