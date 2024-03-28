<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('dashboards/admin/admin_login');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->withSuccess('Authenticated Failed');
        }

        // Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'));

    }

    //Log out account user
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')
            ->withSuccess('You have logged out successfully!');;
    }
}
