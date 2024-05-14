<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    //all function associated with login
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nacteNumber' => 'required',
            'password' => 'required'
        ]);

        // Add 'remember' key to the credentials array
        $remember = $request->has('remember'); // Check if remember checkbox is checked
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('student.dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'nacteNumber' => 'Your provided credentials do not match in our records.',
        ])->withInput($request->only('nacteNumber', 'remember'));
    }
}
