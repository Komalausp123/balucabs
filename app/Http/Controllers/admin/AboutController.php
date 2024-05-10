<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::orderBy('id', 'asc')->get();
        return view('admin.about.index', compact('abouts'));
    }

    //get About create page
    public function create()
    {
        return view('admin.about.create');
    }

    // Store About
    public function store(Request $request)
    {
        // dd($request->all());

        $abouts = new About;
        $abouts->heading = $request->heading;
        $abouts->content = $request->content;
        $abouts->status = $request->status;

        if($request ->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'storage/about/' .$filename;
            $file->move(public_path('storage/about'),$filePath);
            $abouts->image= $filename;
        }

      


       // dd($abouts);
        if ($abouts->save()) {
            return redirect()->route('about-index')->with('status', 'About Created Successfully');
        } else {
            return back()->withInput()->with('error', 'about not Stored');
        }
    }

    // get edit page
    public function edit(Request $request)
    {
        $id = request('id');
        $abouts = About::find($id);
        return view('admin.about.edit', compact('abouts'));
    }

    // Update about
    public function update(Request $request)
    {
        $id = $request->id;
        $abouts = About::find($id);
        $abouts->heading = $request->heading;
        $abouts->content = $request->content;
        $abouts->status = $request->status;

        if($request ->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'storage/about/' .$filename;
            $file->move(public_path('storage/about'),$filePath);
            $abouts->image= $filename;
        }

        $abouts->save();
        return redirect()->route('about-index')->with('status', 'About updated successfully');
    }


    // Delete About
    public function destroy(Request $request)
    {
        $id = $request->id;
        $abouts = About::find($id);
        @unlink('storage/about' . $abouts->image);
       

        $abouts->delete();
        return back()->with('flash_success', 'About Deleted  Successfully!');
    }
}
