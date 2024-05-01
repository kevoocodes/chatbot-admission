<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentAcademicInformation;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    //
    protected $data = [];
    public function index() {

        $this->data['courses'] =  Course::All();
        return view('dashboards.students.admission', $this->data);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'phoneNumber' => 'nullable|string|max:255',
            'nidaNumber' => 'nullable|string|max:255',
            'nacteNumber' => 'nullable|string|max:255|unique:students',
            'email' => 'required|string|email|max:255',
            'address' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'postalCode' => 'required|string|max:255',
            'dateOfBirth' => 'required|date',
            'gender' => 'required|string|max:255',
            'parent' => 'nullable|string|max:255',
            'parentPhonenumber' => 'nullable|string|max:255',
            'nationality' => 'required|string|max:255',
            'session_name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'secondary_school_name' => 'nullable|string|max:255',
            'secondary_school_location' => 'nullable|string|max:255',
            'secondary_school_certificate' => 'nullable|file',
            'high_school_name' => 'nullable|string|max:255',
            'high_school_location' => 'nullable|string|max:255',
            'diploma_course' => 'nullable|string|max:255',
            'diploma_university' => 'nullable|string|max:255',
            'university_certificate' => 'nullable|file',
        ]);

        // Create a new student record
        $student = Student::create([
            'firstName' => $request->firstname,
            'middleName' => $request->middlename,
            'lastName' => $request->lastname,
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

        // Create a new application record
        $application = Application::create([
            'student_id' => $student->id,
            'course_id' => $request->course_id,
            'applicationDate' => now(),
            'session_name' => $request->session_name,
            'status' => 'pending', // Default status
        ]);

        // Create a new student academic information record
        $academicInfo = StudentAcademicInformation::create([
            'secondary_school_name' => $request->secondary_school_name,
            'secondary_school_location' => $request->secondary_school_location,
            'secondary_school_certificate' => $request->file('secondary_school_certificate')->store('certificates'),
            'high_school_name' => $request->high_school_name,
            'high_school_location' => $request->high_school_location,
            'diploma_course' => $request->diploma_course,
            'diploma_university' => $request->diploma_university,
            'university_certificate' => $request->file('university_certificate')->store('certificates'),
        ]);

        // Redirect or return response
        return redirect()->route('student.admission')->with('success', 'Student information saved successfully.');
    }
}
