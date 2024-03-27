<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    //all function associated with login
    public function index() {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nidaNumber' => 'required',
            'password' => 'required'
        ]);

       // dd($credentials);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('student.dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'nidaNumber' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('nidaNumber');

    } 
}
