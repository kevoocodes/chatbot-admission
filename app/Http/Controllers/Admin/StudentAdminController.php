<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentAdminController extends Controller
{
    //
    protected $data = [];
    public function index() {
        $this->data['students'] = User::all();
        return view('dashboards.admin.all_students', $this->data);
    }
}
