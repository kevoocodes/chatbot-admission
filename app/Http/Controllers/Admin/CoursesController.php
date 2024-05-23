<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //
    protected $data =  [];
    public function index() {
         //return all courses
         $this->data['courses'] =  Course::All();
        return view('dashboards.admin.all_courses', $this->data);
    }

    public function view_add_course() {
        return view('dashboards.admin.add_course');
    }


    public function store(Request $request)
    {
        $request->validate([
            'courseName' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'duration' => 'required|integer',
            'fees' => 'required|numeric',
        ]);
    
        if ($request->has('course_id')) {
            // Update existing course
            $course = Course::findOrFail($request->course_id);
            $course->update([
                'courseName' => $request->courseName,
                'description' => $request->description,
                'duration' => $request->duration,
                'fees' => $request->fees,
            ]);
    
            return redirect()->route('admin.all_courses')->with('success', 'Course updated successfully.');
        } else {
            // Create new course
            Course::create([
                'courseName' => $request->courseName,
                'description' => $request->description,
                'duration' => $request->duration,
                'fees' => $request->fees,
            ]);
    
            return redirect()->route('admin.view_add_course')->with('success', 'Course created successfully.');
        }
    }
    

      // View to edit an existing course
      public function viewEditCourse($id)
      {
          $this->data['course'] = Course::find($id);
          return view('dashboards.admin.edit_course',  $this->data);
      }
  
      // Delete an existing course
      public function destroy($id)
      {
          $course = Course::find($id);
          $course->delete();
  
          return redirect()->route('admin.all_courses')->with('success', 'Course deleted successfully.');
      }
    
}
