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
    protected $data = [];

    /**
     * Display the admission form.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        $this->data['courses'] = Course::all();
        $this->data['user'] = Auth::user();
        $this->data['nactes'] = User::with('nacte')->find(auth()->id());
        
        return view('dashboards.students.admission', $this->data);
    }

    /**
     * Retrieve all admissions for the currently logged-in user.
     *
     * @return \Illuminate\View\View
     */
    public function get_all_admissions() {
        $this->data['user'] = Auth::user();
        $this->data['admissions'] = Application::where('user_id', $this->data['user']->id)->get();
        
        return view('dashboards.students.student_all_admission', $this->data);
    }

    /**
     * Store the admission form data.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        $user = Auth::user();
        $fullName = $user->nacte->full_name;

        $student = $this->createStudent($request, $fullName);
        $this->createApplication($request, $student->id, $user->id); // Pass user ID here
        $this->createAcademicInformation($request, $student->id);

        return redirect()->route('student.admission')->with('success', 'Student information saved successfully.');
    }

    /**
     * Create a new student record.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $fullName
     * @return \App\Models\Student
     */
    private function createStudent(Request $request, string $fullName) {
        return Student::create([
            'student_id' => Auth::id(),
            'fullname' => $fullName,
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
    }

    /**
     * Create a new application record.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $studentId
     * @param int $userId
     * @return void
     */
    private function createApplication(Request $request, int $studentId, int $userId) {
        Application::create([
            'user_id' => $userId, // Ensure user_id is set
            'student_id' => $studentId,
            'course_id' => $request->course_id,
            'applicationDate' => now(),
            'session_name' => $request->session_name,
            'amount' => 10000.00,
            'status' => 'pending', // Default status
        ]);
    }

    /**
     * Create a new student academic information record.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $studentId
     * @return void
     */
    private function createAcademicInformation(Request $request, int $studentId) {
        $secondarySchoolCertificateFile = $request->file('secondary_school_certificate');
        $universityCertificateFile = $request->file('university_certificate');

        StudentAcademicInformation::create([
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
    }
}
