<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Course;
use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        //return all students
        //$this->data['allstudents'] = Student::all();
        $this->data['applications'] = DB::table('students')
        ->join('nactes', 'students.nacteNumber', '=', 'nactes.student_number')
        ->join('applications', 'students.id', '=', 'applications.student_id')
        ->join('student_academic_information', 'students.id', '=', 'student_academic_information.student_id')
        ->select(
            'students.fullname as student_name',
            'students.phoneNumber',
            'students.nidaNumber',
            'students.nacteNumber',
            'students.email',
            'students.address',
            'students.region',
            'students.postalCode',
            'students.dateOfBirth',
            'students.gender',
            'students.parent',
            'students.parentPhonenumber',
            'students.nationality',
            'applications.*',
            'student_academic_information.*'
        )
        ->get();
        $this->data['sumofamount'] =  Application::sum('amount'); //return sum of people who do application

        //count registered users
        $this->data['users'] = User::count();
        return view('dashboards.admin.admin_dashboard', $this->data);
    }
}




