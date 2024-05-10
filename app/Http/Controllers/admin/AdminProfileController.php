<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\Admin;

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
    public function view_profile(){
        $admin = Auth::user();
        return view('admin.adminprofile.profile',compact('admin'));
    }
    public function profileupdate(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
     
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'storage/admins/' . $filename;
            $file->move(public_path('storage/admins/'),$filePath);
            if ($request->id) {
                if (File::exists('storage/admins/' . $admin->image)) {
                    File::delete('storage/admins/' . $admin->image);
                }
            }
            $admin->image = $filename;
        }
        $admin->save();
        return redirect()->back()->with('flash_success','Profile Updated Successfully');
    }
    public function changepassword(Request $request)
    {
        // dd($request->all());
        $admin = Auth::guard('admin')->user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);
        if (!Hash::check($request->old_password,$admin->password)) {
            return back()->with('old_password' , 'The Old password is incorrect');
        }
        $admin->password = Hash::make($request->new_password);
        $admin->passwordhint =$request->new_password;
        $admin->save();
        return back()->with('success', 'Your password has been changed.');
    }
}   
