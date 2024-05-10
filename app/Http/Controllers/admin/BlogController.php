<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'asc')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    //get blog create page
    public function create()
    {
        return view('admin.blog.create');
    }

    // Store Blog
    public function store(Request $request)
    {

        $slug = str_replace(['/', ' ', '\\', ','], '-', strtolower($request->heading));
        $slug = preg_replace('/-+/', '-', $slug);
        // dd($request->all());

        $blogs = new Blog;
        $blogs->name = $request->name;
        $blogs->heading = $request->heading;
        $blogs->slug = $slug;
        $blogs->content = $request->content;
        $blogs->status = $request->status;


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'storage/blog/' . $filename;
            $file->move(public_path('storage/blog'), $filePath);
            $blogs->image = $filename;
        }




        // dd($blogs);
        if ($blogs->save()) {
            return redirect()->route('blog-index')->with('status', 'blog Created Successfully');
        } else {
            return back()->withInput()->with('error', 'blog not Stored');
        }
    }

    // get edit page
    public function edit(Request $request)
    {
        $id = request('id');
        $blogs = Blog::find($id);
        return view('admin.blog.edit', compact('blogs'));
    }

    // Update blog
    public function update(Request $request)
    {
        $slug = str_replace(['/', ' ', '\\', ','], '-', strtolower($request->heading));
        $slug = preg_replace('/-+/', '-', $slug);
        $id = $request->id;
        $blogs = Blog::find($id);
        $blogs->name = $request->name;
        $blogs->heading = $request->heading;
        $blogs->slug = $slug;
        $blogs->content = $request->content;
        $blogs->status = $request->status;


        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $filePath = 'storage/blog/' . $filename;
            $file->move(public_path('storage/blog'), $filePath);
            $blogs->image = $filename;
        }

        $blogs->save();
        return redirect()->route('blog-index')->with('status', 'blog updated successfully');
    }


    // Delete blog
    public function destroy(Request $request)
    {
        $id = $request->id;
        $blogs = Blog::find($id);
        @unlink('storage/blog' . $blogs->image);

        $blogs->delete();
        return back()->with('flash_success', 'Blog Deleted  Successfully!');
    }
}
