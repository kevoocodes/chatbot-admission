<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentAcademicInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmissionController extends Controller
{
    //
    protected $data = [];
    public function index() {

        $this->data['courses'] =  Course::All();
        $this->data['user'] = Auth::User();

        $userId = auth()->id();
        $this->data['nactes']=  User::with('nacte')->find($userId);
        return view('dashboards.students.admission', $this->data);
    }

    public function get_all_admissions()
    {
        $user_id = Auth::User();
        // Retrieve all admissions for the currently logged-in user
        $this->data['admissions'] = Application::where('user_id', $user_id)->get();

        // Redirect to the all_admission view, passing the admissions data
        return view('dashboards.students.student_all_admission', $this->data);
    }

    public function store(Request $request)
    {
       
        // Validate the request data
        // $request->validate([
        //     'firstname' => 'required',
        //     'middlename' => 'required',
        //     'lastname' => 'required',
        //     'phoneNumber' => 'required',
        //     'nidaNumber' => 'required',
        //     'nacteNumber' => 'required',
        //     'email' => 'required|email',
        //     'address' => 'required',
        //     'region' => 'required',
        //     'postalCode' => 'required',
        //     'dateOfBirth' => 'required',
        //     'gender' => 'required',
        //     'parent' => 'required',
        //     'parentPhonenumber' => 'required',
        //     'nationality' => 'required',
        //     'session_name' => 'required',
        //     'course_id' => 'required',
        //     'secondary_school_name' => 'required',
        //     'secondary_school_location' => 'required',
        //     'secondary_school_certificate' => 'required|file',
        //     'high_school_name' => 'required',
        //     'high_school_location' => 'required',
        //     'diploma_course' => 'required',
        //     'diploma_university' => 'required',
        //     'university_certificate' => 'required|file',
        // ]);

       $amount = 10000.00;

       $userId = auth()->id();
       $nactes=  User::with('nacte')->find($userId);
       $fullname = $nactes->full_name();


        // Create a new student record
        $student = Student::create([
            'student_id' => Auth::id(),
            'fullname' => $fullname,
            'phoneNumber' => $request->phoneNumber,
            'nidaNumber' => $request->nidaNumber,
            'nacteNumber' => $request->nacteNumber,
            'email' => $request->email,
            'address' => $request->address,
            'region' => $request->region,
            'postalCode' => $request->postalCode,
            'dateOfBirth' => $request->dateOfBirth,
            'gender' => $request->gender,
            'parent' => $request->parent,
            'parentPhonenumber' => $request->parentPhonenumber,
            'nationality' => $request->nationality,
        ]);

        $studentId = $student->id;

        // Create a new application record
        $application = Application::create([
            'student_id' => $studentId,
            'course_id' => $request->course_id,
            'applicationDate' => now(),
            'session_name' => $request->session_name,
            'amount' => $amount,
            'status' => 'pending', // Default status
        ]);

        // Create a new student academic information record
        $secondarySchoolCertificateFile = $request->file('secondary_school_certificate');
        $universityCertificateFile = $request->file('university_certificate');
        
        $academicInfo = StudentAcademicInformation::create([
            'student_id' => $studentId,
            'secondary_school_name' => $request->secondary_school_name,
            'secondary_school_location' => $request->secondary_school_location,
            'secondary_school_certificate' => $secondarySchoolCertificateFile ? file_get_contents($secondarySchoolCertificateFile->getRealPath()) : null,
            'high_school_name' => $request->high_school_name,
            'high_school_location' => $request->high_school_location,
            'diploma_course' => $request->diploma_course,
            'diploma_university' => $request->diploma_university,
            'university_certificate' => $universityCertificateFile ? file_get_contents($universityCertificateFile->getRealPath()) : null,
        ]);
        
       

        // Redirect or return response
        return redirect()->route('student.admission')->with('success', 'Student information saved successfully.');
    }
}
