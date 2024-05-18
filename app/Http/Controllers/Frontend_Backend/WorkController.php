<?php

namespace App\Http\Controllers\Frontend_Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkPage;

class WorkController extends Controller
{
    //START Frontend Work Page
    public function WorkPage()
    {
        $numberWork = WorkPage::count();
        $work = WorkPage::paginate(10);

        return view('Backend.Work_Page.work_page', compact('work', 'numberWork'));
    }

    public function WorkAdd()
    {
        return view('Backend.Work_Page.add_on_work');
    }

    public function WorkStore(Request $request)
    {
        //Validation
        $request->validate([
            'programming_name' => 'required',
            'use_programming' => 'required',
            'easy_hard' => 'required'
        ]);

        WorkPage::insert([
            'programming_name' => $request->programming_name,
            'use_programming' => $request->use_programming,
            'easy_hard' => $request->easy_hard,
        ]);

        return redirect()->route('work.page')->with('message', 'Success - Work Data Successfully Added.');
    }

    public function WorkEdit($id)
    {
        $work = WorkPage::findOrFail($id);

        return view('Backend.Work_Page.edit_page', compact('work'));
    }

    public function WorkUpdate(Request $request)
    {
        //Validation
        $request->validate([
            'programming_name' => 'required',
            'use_programming' => 'required',
            'easy_hard' => 'required'
        ]);

        $pid = $request->id;

        WorkPage::findOrFail($pid)->update([
            'programming_name' => $request->programming_name,
            'use_programming' => $request->use_programming,
            'easy_hard' => $request->easy_hard,
        ]);

        return redirect()->route('work.page')->with('message', 'Success - Work Data Successfully Updated.');

    }

    public function WorkDelete($id)
    {
        WorkPage::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Success - Work Data Successfully Deleted.');
    }
    //END Backend Work Page

    //START Frontend Work Page
    public function WorkMain()
    {
        $workMain = WorkPage::all();
        $numberWork = WorkPage::count();

        return view('Frontend.Work_Page.work_page_front',compact('workMain', 'numberWork'));
    }
    //END Frontend Work Page

}
