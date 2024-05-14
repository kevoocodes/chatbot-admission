<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Nacte;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentRegistrationController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'nacteNumber' => 'required|unique:users',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|min:5|confirmed',
        ]);
    
        // Check if the validation fails
        if ($validator->fails()) {
            return view('auth.register', ['errors' => $validator->errors()->all()]);
        }
    
        // Check if the user exists in the nactes table
        $nacteUser = Nacte::where('student_number', $request->nacteNumber)->first();
    
        if (!$nacteUser) {
            return view('auth.register', ['error' => 'Student does not exist in NACTE records']);
        }
    
        // Hash the password before saving it
        $hashedPassword = Hash::make($request->password);
    
        // Create the user
        $user = new User();
        $user->nacteid = $nacteUser->id; // Set the nacteid
        $user->nacteNumber = $request->nacteNumber;
        $user->email = $request->email;
        $user->password = $hashedPassword; // Assign the hashed password
        $user->save();
    
        return redirect()->route('student.dashboard')->with('success', 'Registration successful!');
    }
    
}
