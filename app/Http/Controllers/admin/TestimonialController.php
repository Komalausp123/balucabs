<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;


class TestimonialController extends Controller
{
    public function index()
    {
        $tests = Testimonial::orderBy('id', 'asc')->get();
        return view('admin.testimonial.index', compact('tests'));
    }

    //get testimonial create page
    public function create()
    {
        return view('admin.testimonial.create');
    }

    // Store testimonial
    public function store(Request $request)
    {

        // dd($request->all());
        $tests = new Testimonial;
        $tests->name = $request->name;
        $tests->location = $request->location;
        $tests->content = $request->content;
        $tests->status = $request->status;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'storage/testimonial/' . $filename;
            $file->move(public_path('storage/testimonial'), $filePath);
            $tests->image = $filename;
        }


        // dd($tests);
        if ($tests->save()) {
            return redirect()->route('testimonial-index')->with('status', 'testimonial Created Successfully');
        } else {
            return back()->withInput()->with('error', 'testimonial not Stored');
        }
    }

    // get edit page
    public function edit(Request $request)
    {
        {
            $id = request('id');
            $tests = Testimonial::find($id);
            return view('admin.testimonial.edit', compact('tests'));
        }
    }

    // Update testimonial
    public function update(Request $request)
    {
        $id = $request->id;
        $tests = Testimonial::find($id);
        $tests->name = $request->name;
        $tests->location = $request->location;
        $tests->content = $request->content;
        $tests->status = $request->status;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'storage/testimonial/' . $filename;
            $file->move(public_path('storage/testimonial'), $filePath);
            $tests->image = $filename;
        }



        $tests->save();
        return redirect()->route('testimonial-index')->with('status', 'testimonial updated successfully');
    }


    // Delete testimonial
    public function destroy(Request $request)
    {
        $id = $request->id;
        $tests = Testimonial::find($id);
        @unlink('storage/testimonial' . $tests->image);
        $tests->delete();
        return back()->with('flash_success', 'testimonial Deleted  Successfully!');
    }
}
