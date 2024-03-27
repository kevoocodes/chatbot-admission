<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
        $validator = Validator::make($request->all(), [
            'nacte_no' => 'required|unique:users',
            'useremail' => 'required|email|string|unique:users',
            'password' => 'required|min:5|confirmed',
            'customSwitchSuccess' => 'accepted',
        ]);


        // Hash the password before saving it
        $hashedPassword = Hash::make($request->password);

        // Check if the nacte_no or email already exists in the database
        $existingUser = User::where('nidaNumber', $request->nacte_no)
            ->orWhere('email', $request->useremail)
            ->first();

        if ($existingUser) {
            if ($existingUser->nidaNumber === $request->nacte_no) {
                return redirect()->back()->with('error', 'Nacte number already exists!')->withInput();
            } else {
                return redirect()->back()->with('error', 'Email already exists!')->withInput();
            }
        }

        // Create the user
        $user = new User();
        $user->nidaNumber = $request->nacte_no;
        $user->email = $request->useremail;
        $user->password = $hashedPassword; // Assign the hashed password
        $user->save();

        return redirect()->route('student.dashboard')->with('success', 'Registration successful!');
    }
}
