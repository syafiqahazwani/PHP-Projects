<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DigimonXrosWars;

class DigimonXrosWarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $digimonxroswars = DigimonXrosWars::all();
        return view('Backend_Studio.Digimon_Main_Page_6.Main_Page', compact('digimonxroswars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend_Studio.Digimon_Main_Page_6.Add_Page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $request->validate([
            'character_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'character_name' => 'required',
            'digivise_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'digivise_name' => 'required',
            'teamlogo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'teamlogo_name' => 'required',
            'child_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'child_evo_name' => 'required',
            'ultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimate_evo_name' => 'required',
            'xros1_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros1_evo_name' => 'required',
            'xros2_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros2_evo_name' => 'required',
            'xros3_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros3_evo_name' => 'required',
            'xros4_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros4_evo_name' => 'required',
            'xros5_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros5_evo_name' => 'required',
            'xros6_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros6_evo_name' => 'required',
            'xros7_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros7_evo_name' => 'required',
        ]);

        $digimonxroswars = new DigimonXrosWars();

        $digimonxroswars->character_name = $request->input('character_name');
        $digimonxroswars->digivise_name = $request->input('digivise_name');
        $digimonxroswars->teamlogo_name = $request->input('teamlogo_name');
        $digimonxroswars->child_evo_name = $request->input('child_evo_name');
        $digimonxroswars->ultimate_evo_name = $request->input('ultimate_evo_name');
        $digimonxroswars->xros1_evo_name = $request->input('xros1_evo_name');
        $digimonxroswars->xros2_evo_name = $request->input('xros2_evo_name');
        $digimonxroswars->xros3_evo_name = $request->input('xros3_evo_name');
        $digimonxroswars->xros4_evo_name = $request->input('xros4_evo_name');
        $digimonxroswars->xros5_evo_name = $request->input('xros5_evo_name');
        $digimonxroswars->xros6_evo_name = $request->input('xros6_evo_name');
        $digimonxroswars->xros7_evo_name = $request->input('xros7_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['digivise_img'] = $filename;
        }
        if ($request->file('teamlogo_img')){
            $file = $request->file('teamlogo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['teamlogo_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['child_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['ultimate_evo_img'] = $filename;
        }
        if ($request->file('xros1_evo_img')){
            $file = $request->file('xros1_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['xros1_evo_img'] = $filename;
        }
        if ($request->file('xros2_evo_img')){
            $file = $request->file('xros2_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['xros2_evo_img'] = $filename;
        }
        if ($request->file('xros3_evo_img')){
            $file = $request->file('xros3_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['xros3_evo_img'] = $filename;
        }
        if ($request->file('xros4_evo_img')){
            $file = $request->file('xros4_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['xros4_evo_img'] = $filename;
        }
        if ($request->file('xros5_evo_img')){
            $file = $request->file('xros5_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['xros5_evo_img'] = $filename;
        }
        if ($request->file('xros6_evo_img')){
            $file = $request->file('xros6_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['xros6_evo_img'] = $filename;
        }
        if ($request->file('xros7_evo_img')){
            $file = $request->file('xros7_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswars['xros7_evo_img'] = $filename;
        }

            $digimonxroswars->save();

            return redirect()->route('digimonxroswars.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $digimonxroswarsShow = DigimonXrosWars::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_6.Show_Page', compact('digimonxroswarsShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $digimonxroswarsEdit = DigimonXrosWars::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_6.Edit_Page', compact('digimonxroswarsEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Validation
        $request->validate([
            'character_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'character_name' => 'required',
            'digivise_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'digivise_name' => 'required',
            'teamlogo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'teamlogo_name' => 'required',
            'child_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'child_evo_name' => 'required',
            'ultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimate_evo_name' => 'required',
            'xros1_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros1_evo_name' => 'required',
            'xros2_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros2_evo_name' => 'required',
            'xros3_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros3_evo_name' => 'required',
            'xros4_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros4_evo_name' => 'required',
            'xros5_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros5_evo_name' => 'required',
            'xros6_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros6_evo_name' => 'required',
            'xros7_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'xros7_evo_name' => 'required',
        ]);

        $pid = $request->id;

        $digimonxroswarsEdit = DigimonXroswars::find($pid);

        $digimonxroswarsEdit->character_name = $request->input('character_name');
        $digimonxroswarsEdit->digivise_name = $request->input('digivise_name');
        $digimonxroswarsEdit->teamlogo_name = $request->input('teamlogo_name');
        $digimonxroswarsEdit->child_evo_name = $request->input('child_evo_name');
        $digimonxroswarsEdit->ultimate_evo_name = $request->input('ultimate_evo_name');
        $digimonxroswarsEdit->xros1_evo_name = $request->input('xros1_evo_name');
        $digimonxroswarsEdit->xros2_evo_name = $request->input('xros2_evo_name');
        $digimonxroswarsEdit->xros3_evo_name = $request->input('xros3_evo_name');
        $digimonxroswarsEdit->xros4_evo_name = $request->input('xros4_evo_name');
        $digimonxroswarsEdit->xros5_evo_name = $request->input('xros5_evo_name');
        $digimonxroswarsEdit->xros6_evo_name = $request->input('xros6_evo_name');
        $digimonxroswarsEdit->xros7_evo_name = $request->input('xros7_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['digivise_img'] = $filename;
        }
        if ($request->file('teamlogo_img')){
            $file = $request->file('teamlogo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['teamlogo_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['child_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['ultimate_evo_img'] = $filename;
        }
        if ($request->file('xros1_evo_img')){
            $file = $request->file('xros1_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['xros1_evo_img'] = $filename;
        }
        if ($request->file('xros2_evo_img')){
            $file = $request->file('xros2_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['xros2_evo_img'] = $filename;
        }
        if ($request->file('xros3_evo_img')){
            $file = $request->file('xros3_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['xros3_evo_img'] = $filename;
        }
        if ($request->file('xros4_evo_img')){
            $file = $request->file('xros4_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['xros4_evo_img'] = $filename;
        }
        if ($request->file('xros5_evo_img')){
            $file = $request->file('xros5_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['xros5_evo_img'] = $filename;
        }
        if ($request->file('xros6_evo_img')){
            $file = $request->file('xros6_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['xros6_evo_img'] = $filename;
        }
        if ($request->file('xros7_evo_img')){
            $file = $request->file('xros7_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Xros_Wars'), $filename);
            $digimonxroswarsEdit['xros7_evo_img'] = $filename;
        }

            $digimonxroswarsEdit->save();

            return redirect()->route('digimonxroswars.page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $digimonxroswarssDelete = DigimonXroswarss::find($id);
        $digimonfxroswarssDelete->delete();
        return redirect()->back();
    }
}
