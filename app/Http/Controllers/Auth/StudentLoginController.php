<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentLoginController extends Controller
{
    //all function associated with login
    public function index() {
        return view('auth.login');
    }
}
