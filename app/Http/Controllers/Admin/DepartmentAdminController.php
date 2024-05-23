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
            'departmentName' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
    
        if ($request->has('department_id')) {
            // Update existing department
            $department = Department::findOrFail($request->department_id);
            $department->update([
                'departmentName' => $request->departmentName,
                'description' => $request->description,
            ]);
    
            return redirect()->route('admin.all_departments')->with('success', 'Department updated successfully.');
        } else {
            // Create new department
            Department::create([
                'departmentName' => $request->departmentName,
                'description' => $request->description,
            ]);
    
            return redirect()->route('admin.view_add_department')->with('success', 'Department created successfully.');
        }
    }
    

      // View to edit an existing course
      public function viewEditDepartment($id)
      {
          $this->data['department'] = Department::find($id);
          return view('dashboards.admin.edit_department',  $this->data);
      }
  
      // Delete an existing course
      public function destroy($id)
      {
          $department = Department::find($id);
          $department->delete();
  
          return redirect()->route('admin.all_departments')->with('success', 'Department deleted successfully.');
      }
}
