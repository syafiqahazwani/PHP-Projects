<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DigimonTamers;

class DigimonTamersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $digimontamers = DigimonTamers::all();
        return view('Backend_Studio.Digimon_Main_Page_3.Main_Page', compact('digimontamers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend_Studio.Digimon_Main_Page_3.Add_Page');
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
            'child_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'child_evo_name' => 'required',
            'adult_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'adult_evo_name' => 'required',
            'perfect_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'perfect_evo_name' => 'required',
            'ultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimate_evo_name' => 'required',
        ]);

        $digimontamers = new DigimonTamers();

        $digimontamers->character_name = $request->input('character_name');
        $digimontamers->digivise_name = $request->input('digivise_name');
        $digimontamers->child_evo_name = $request->input('child_evo_name');
        $digimontamers->adult_evo_name = $request->input('adult_evo_name');
        $digimontamers->perfect_evo_name = $request->input('perfect_evo_name');
        $digimontamers->ultimate_evo_name = $request->input('ultimate_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamers['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamers['digivise_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamers['child_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamers['adult_evo_img'] = $filename;
        }
        if ($request->file('perfect_evo_img')){
            $file = $request->file('perfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamers['perfect_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamers['ultimate_evo_img'] = $filename;
        }

            $digimontamers->save();

            return redirect()->route('digimontamers.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $digimontamersShow = DigimonTamers::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_3.Show_Page', compact('digimontamersShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $digimontamersEdit = DigimonTamers::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_3.Edit_Page', compact('digimontamersEdit'));
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
            'child_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'child_evo_name' => 'required',
            'adult_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'adult_evo_name' => 'required',
            'perfect_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'perfect_evo_name' => 'required',
            'ultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimate_evo_name' => 'required',
        ]);

        $pid = $request->id;

        $digimontamersEdit = DigimonTamers::find($pid);

        $digimontamersEdit->character_name = $request->input('character_name');
        $digimontamersEdit->digivise_name = $request->input('digivise_name');
        $digimontamersEdit->child_evo_name = $request->input('child_evo_name');
        $digimontamersEdit->adult_evo_name = $request->input('adult_evo_name');
        $digimontamersEdit->perfect_evo_name = $request->input('perfect_evo_name');
        $digimontamersEdit->ultimate_evo_name = $request->input('ultimate_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamersEdit['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamersEdit['digivise_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamersEdit['child_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamersEdit['adult_evo_img'] = $filename;
        }
        if ($request->file('perfect_evo_img')){
            $file = $request->file('perfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamersEdit['perfect_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Tamers'), $filename);
            $digimontamersEdit['ultimate_evo_img'] = $filename;
        }

            $digimontamersEdit->save();

            return redirect()->route('digimontamers.page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $digimontamersDelete = DigimonTamers::find($id);
        $digimontamersDelete->delete();
        return redirect()->back();
    }
}
