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
    public function index() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'nacte_no' => 'required|string|unique:users,nidaNumber',
            'useremail' => 'required|email|string|unique:users',
            'password' => 'required|min:5|comfirmed',
            'customSwitchSuccess' => 'accepted',
        ]);

      
         // Hash the password before saving it
         $hashedPassword = Hash::make($request->password);

         // Create the user
         $user = new User();
         $user->nidaNumber = $request->nacte_no;
         $user->email = $request->useremail;
         $user->password = $hashedPassword; // Assign the hashed password
         $user->save();

        return redirect()->route('student.dashboard')->with('success', 'Registration successful!');
    }


}
