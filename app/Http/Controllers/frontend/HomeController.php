<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\TermsandCondition;
use App\Models\PrivacyPolicy;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('frontend.index',compact('blogs'));
    }

    public function about()
    {
        $about = About::orderBy('id','desc')->first();
        return view('frontend.about-us',compact('about'));
    }

    public function airport()
    {
        return view('frontend.airport');
    }

    public function outstation()
    {
        return view('frontend.outstation');
    }

    public function oneway()
    {
        return view('frontend.oneway');
    }


    public function local()
    {
        return view('frontend.local');
    }

    public function contact()
    {
        return view('frontend.contact-us');
    }


    public function privacy()
    {
        $privacy = PrivacyPolicy::orderBy('id','desc')->first();
        return view('frontend.privacy-policy',compact('privacy'));
    }

    public function terms()
    {
        $terms = TermsandCondition::orderBy('id','desc')->first();
        return view('frontend.terms-condition',compact('terms'));
    }

    public function airport_form()
    {
        return view('frontend.airport-form');
    }

    public function local_form()
    {
        return view('frontend.local-form');
    }

    public function oneway_form()
    {
        return view('frontend.oneway-form');
    }


    public function outstation_form()
    {
        return view('frontend.outstation-form');
    }
    public function blog(){
        $blogs = Blog::all();
        return view('frontend.blog',compact('blogs'));
    }
    public function blog_details($slug){
        $blog = Blog::where('slug',$slug)->first();
        return view('frontend.blog-details',compact('blog'));

    }
}
