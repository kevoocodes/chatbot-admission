<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionAdminController extends Controller
{
    //
    protected $data =  [];
    public function all_admission() {
        // Get all applications along with their associated students
        $this->data['all_admissions'] = Application::with('student')->get();
        $this->data['all_admissions'] = DB::table('students')
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
    
        return view('dashboards.admin.all_admission', $this->data);
    }
    

    public function today_admission() {
        // Get today's date
        $today = date('Y-m-d');
    
        // Query the admissions for today along with associated students                                       // Get today's date
        $today = Carbon::today()->toDateString();

        $this->data['today_admissions'] = DB::table('applications')
            ->join('students', 'applications.student_id', '=', 'students.id')
            ->join('nactes', 'students.nacteNumber', '=', 'nactes.student_number')
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
                'applications.applicationDate',
                'applications.amount',
                'applications.session_name',
                'applications.status',
                'student_academic_information.secondary_school_name',
                'student_academic_information.secondary_school_location',
                'student_academic_information.high_school_name',
                'student_academic_information.high_school_location',
                'student_academic_information.diploma_course',
                'student_academic_information.diploma_university'
            )
            ->whereDate('applications.applicationDate', $today)
            ->get();
    
        return view('dashboards.admin.today_admission', $this->data);
    }
    
    
}
