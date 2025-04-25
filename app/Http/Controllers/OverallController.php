<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Overall;

class OverallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function OverallPage()
    {
        $overall = Overall::all();
        return view('Backend_Studio.User_Page.dashboard_page', compact('overall'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function OverallAdd()
    {
        return view('Backend_Studio.User_Page.add_page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function OverallStore(Request $request)
    {
        //Validation
        $request->validate([
            'digimon_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'digimon_name' => 'required',
        ]);

        $overall = new Overall();

        $overall->digimon_name = $request->input('digimon_name');

        if ($request->file('digimon_logo')){
            $file = $request->file('digimon_logo');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Logo'), $filename);
            $overall['digimon_logo'] = $filename;
        }

            $overall->save();

            return redirect()->route('overall.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function OverallShow($id)
    {
        $digimonShow = Overall::findOrFail($id);
        return view('Backend_Studio.User_Page.view_page', compact('digimonShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function OverallEdit($id)
    {
        $digimonEdit = Overall::findOrFail($id);
        return view('Backend_Studio.User_Page.edit_page', compact('digimonEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function OverallUpdate(Request $request)
    {
        //Validation
        $request->validate([
            'digimon_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'digimon_name' => 'required',
        ]);

        $pid = $request->id;

        $digimonEdit = Overall::find($pid);

        $digimonEdit->digimon_name = $request->input('digimon_name');

        if ($request->file('digimon_logo')){
            $file = $request->file('digimon_logo');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Logo'), $filename);
            $digimonEdit['digimon_logo'] = $filename;
        }

        $digimonEdit->save();

        return redirect()->route('overall.page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function OverallDelete($id)
    {
        $digimonDelete = Overall::find($id);
        $digimonDelete->delete();
        return redirect()->back();
    }
}
