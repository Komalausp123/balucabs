<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function login_post(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin_dashboard');
        }
        return back()->with([
            'flash_error' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin_login')->with('flash_success', "Logout Successfully.");
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
