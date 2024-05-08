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


    public function store(Request $request) {
        $request->validate([
            'courseName' => 'required|string',
            'description' => 'required|string',
            'duration' => 'required|integer',
            'fees' => 'required|numeric',
        ]);

        Course::create([
            'courseName' => $request->courseName,
            'description' => $request->description,
            'duration' => $request->duration,
            'fees' => $request->fees,
        ]);

        return redirect()->route('admin.view_add_course')->with('success', 'Course created successfully.');
    }
    
}
