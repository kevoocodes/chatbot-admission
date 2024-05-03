<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentProfileController extends Controller
{
    //
    protected $data = [];
    public function index() {

        $this->data['user'] = Auth::User();
        return view('dashboards.students.student_profile', $this->data);
    }
}
