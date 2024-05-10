<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacies = PrivacyPolicy::orderBy('id', 'asc')->get();
        return view('admin.privacy.index', compact('privacies'));
    }

    //get privacy create page
    public function create()
    {
        return view('admin.privacy.create');
    }

    // Store privacy
    public function store(Request $request)
    {
        // dd($request->all());

        $privacies = new PrivacyPolicy;
        $privacies->heading = $request->heading;
        $privacies->content = $request->content;
        $privacies->status = $request->status;


        // dd($privacies);
        if ($privacies->save()) {
            return redirect()->route('privacy-index')->with('status', 'Privacy Policy Created Successfully');
        } else {
            return back()->withInput()->with('error', 'privacy not Stored');
        }
    }

    // get edit page
    public function edit(Request $request)
    {
        $id = request('id');
        $privacies = PrivacyPolicy::find($id);
        return view('admin.privacy.edit', compact('privacies'));
    }

    // Update privacy
    public function update(Request $request)
    {
        $id = $request->id;
        $privacies = PrivacyPolicy::find($id);
        $privacies->heading = $request->heading;
        $privacies->content = $request->content;
        $privacies->status = $request->status;






        $privacies->save();
        return redirect()->route('privacy-index')->with('status', 'Privacy Policy updated successfully');
    }


    // Delete privacy
    public function destroy(Request $request)
    {
        $id = $request->id;
        $privacies = PrivacyPolicy::find($id);
    
        $privacies->delete();
        return back()->with('flash_success', 'Privacy Policy Deleted  Successfully!');
    }
}
