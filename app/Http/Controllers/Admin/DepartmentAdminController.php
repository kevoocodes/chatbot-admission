<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentAdminController extends Controller
{
    //
    protected $data =  [];
    public function index() {
         //return all courses
         $this->data['departments'] =  Department::All();
        return view('dashboards.admin.all_department', $this->data);
    }
}
