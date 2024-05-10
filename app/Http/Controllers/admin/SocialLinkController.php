<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialLink;

class SocialLinkController extends Controller
{
    public function social()
    {
        $social = SocialLink::first();
        return view('admin.social-media.create', compact('social'));
    }
    public function socialupdate(Request $request)
    {
        $social = SocialLink::updateOrCreate(
            ['id' => '1'],
            [
                'facebook' => $request->facebook ,
                'instagram' => $request->instagram ,
                'youtube' => $request->youtube ,
                'twitter' => $request->twitter ,
                'linkedin' => $request->linkedin ,
                'pinterest' => $request->pinterest ,
                'phone' => $request->phone ,
                'email' => $request->email ,
                'location' => $request->location ,
                'address' => $request->address,
                'footer_content' => $request->footer_content,
                'map' => $request->map,

            ]

        );

        return back()->with('flash_success', 'SocialMedia Updated Successfully');
    }
}
