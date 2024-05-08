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

    //see department view page
    public function view_add_department() {
        return view('dashboards.admin.add_department');
    }

    public function store(Request $request)
    {
        $request->validate([
            'departmentName' => 'required|string',
            'description' => 'required|string',
        ]);

        Department::create([
            'departmentName' => $request->departmentName,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.view_add_department')->with('success', 'Department created successfully.');
    }
}
