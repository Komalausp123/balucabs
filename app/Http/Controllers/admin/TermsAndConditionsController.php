<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TermsandCondition;


class TermsAndConditionsController extends Controller
{
    public function index()
    {
        return view('admin.termsandcondition.add-termsandcondition');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'heading' => 'required',
            'status' => 'required',
        ]);
        $slug = str_replace(['/', ' ', '\\', ','], '-', strtolower($request->heading));
        $slug = preg_replace('/-+/', '-', $slug);
        $terms = new TermsandCondition;
        $terms->heading = $request->heading;
        $terms->content = $request->content;
        $terms->slug = $slug;
        $terms->status = $request->status;
        $checkSlug = $terms->whereSlug($slug)->exists();
        if (!$checkSlug) {
            $terms->save();
            return redirect()->route('view-termsandcondition')->with('flash_success', 'Uploaded successfully..');
        } else {
            return back()->withInput()->with('flash_error', 'Already Terms & Condition Exists');
        }
    }

    public function view()
    {
        $datas = TermsandCondition::orderBy('id')->paginate(10);
        return view('admin.termsandcondition.view-termsandcondition', compact('datas'));
    }

    public function edit($slug)
    {
        $data = TermsandCondition::where('slug', $slug)->first();
        // dd($data);
        return view('admin.termsandcondition.edit-termsandcondition', compact('data'));
    }
    public function update(Request $request, $slug)
    {
        $slug = str_replace(['/', ' ', '\\', ','], '-', strtolower($request->heading));
        $slug = preg_replace('/-+/', '-', $slug);
        $terms = TermsandCondition::where('slug',$slug)->first();
        // dd($terms);

        $terms->heading = $request->heading;
        $terms->content = $request->content;
        $terms->status = $request->status;
       

           if( $terms->save()){
            return redirect()->route('view-termsandcondition')->with('flash_success', 'Terms & Condition Updated Successfully');
        } else {
            return back()->withInput()->with('flash_error', 'Error Has Occured');
        }
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $terms = TermsandCondition::find($id);
        $terms->delete();
        return back()->with('flash_success', 'Terms & Condition Deleted  Successfully!');
    }
}
