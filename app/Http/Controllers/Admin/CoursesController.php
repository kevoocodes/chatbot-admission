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

    
}
