<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    protected $data = [];
    public function index() {

        //return count departments
        $this->data['departments'] = Department::count();

        //count courses
        $this->data['courses'] = Course::count();

        //count students
        $this->data['students'] = Student::count();

        //count registered users
        $this->data['users'] = User::count();
        return view('dashboards.admin.admin_dashboard', $this->data);
    }
}
