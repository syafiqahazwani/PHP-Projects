<?php

namespace App\Http\Controllers\Frontend_Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;

class AboutController extends Controller
{
    //START Backend About Page
    public function AboutAdd()
    {
        $aboutpage = AboutPage::find(1);
        return view('Backend.Admin.about_page', compact('aboutpage'));
    }

    public function AboutUpdate(Request $request)
    {

        $pid = $request->id;

        $aboutpage = AboutPage::find($pid);

        $aboutpage->about_title = $request->input('about_title');
        $aboutpage->about_short_description = $request->input('about_short_description');
        $aboutpage->about_long_description = $request->input('about_long_description');

        if ($request->file('about_image')){
            $file = $request->file('about_image');
            @unlink(public_path('Images/About_Page/'.$aboutpage->about_image));//replace the image and delete old image
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/About_Page'), $filename);
            $aboutpage['about_image'] = $filename;
        }

        $aboutpage->save();

        return redirect()->route('about.add')->with('message', 'Success - Data Successfully Updated.');
    }
    //END Backend About Page

    //START Frontend About Page
    public function AboutMain()
    {
        $aboutpage = AboutPage::find(1);
        return view('Frontend.Admin.about_page_front', compact('aboutpage'));
    }
    //END Frontend About Page

}
