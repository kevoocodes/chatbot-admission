<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    //
        //
        protected $data = [];
        public function index() {
            //return all courses
            $this->data['courses'] =  Course::All();

            //return all departments
            $this->data['departments'] = Department::All();

            //return user 
            $this->data['user'] = Auth::User();

            $userId = auth()->id();

            $this->data['nactes'] =  User::with('nacte')->find($userId);
            return view('dashboards.students.student_dashboard', $this->data);
        }
}
