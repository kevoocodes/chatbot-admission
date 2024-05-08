<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class AdmissionAdminController extends Controller
{
    //
    protected $data =  [];
    public function all_admission() {
        // Get all applications along with their associated students
        $this->data['all_admissions'] = Application::with('student')->get();
    
        return view('dashboards.admin.all_admission', $this->data);
    }
    

    public function today_admission() {
        // Get today's date
        $today = date('Y-m-d');
    
        // Query the admissions for today along with associated students
        $this->data['today_admissions'] = Application::whereDate('created_at', $today)
                                                    ->with('student')
                                                    ->get();
    
        return view('dashboards.admin.today_admission', $this->data);
    }
    
    
}
