<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about-us');
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
        return view('frontend.privacy-policy');
    }

    public function terms()
    {
        return view('frontend.terms-condition');
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
}
