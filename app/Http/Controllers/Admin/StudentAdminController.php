<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentAdminController extends Controller
{
    //
    protected $data = [];
    public function index() {
        $this->data['students'] = Student::all();
        return view('dashboards.admin.all_students', $this->data);
    }
}
