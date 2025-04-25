<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Digimon02;

class Digimon02Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $digimon02 = Digimon02::all();
        return view('Backend_Studio.Digimon_Main_Page_2.Main_Page', compact('digimon02'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend_Studio.Digimon_Main_Page_2.Add_Page');
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
            'armoregg1_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'armoregg1_name' => 'required',
            'armoregg2_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'armoregg2_name' => 'required',
            'baby_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'baby_evo_name' => 'required',
            'child_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'child_evo_name' => 'required',
            'adult_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'adult_evo_name' => 'required',
            'armor1_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'armor1_evo_name' => 'required',
            'armor2_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'armor2_evo_name' => 'required',
            'dna_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'dna_evo_name' => 'required',
            'dnaperfect_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'dnaperfect_evo_name' => 'required',
            'dnaultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'dnaultimate_evo_name' => 'required',
        ]);

        $digimon02 = new Digimon02();

        $digimon02->character_name = $request->input('character_name');
        $digimon02->digivise_name = $request->input('digivise_name');
        $digimon02->armoregg1_name = $request->input('armoregg1_name');
        $digimon02->armoregg2_name = $request->input('armoregg2_name');
        $digimon02->baby_evo_name = $request->input('baby_evo_name');
        $digimon02->child_evo_name = $request->input('child_evo_name');
        $digimon02->adult_evo_name = $request->input('adult_evo_name');
        $digimon02->armor1_evo_name = $request->input('armor1_evo_name');
        $digimon02->armor2_evo_name = $request->input('armor2_evo_name');
        $digimon02->dna_evo_name = $request->input('dna_evo_name');
        $digimon02->dnaperfect_evo_name = $request->input('dnaperfect_evo_name');
        $digimon02->dnaultimate_evo_name = $request->input('dnaultimate_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['digivise_img'] = $filename;
        }
        if ($request->file('armoregg1_img')){
            $file = $request->file('armoregg1_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['armoregg1_img'] = $filename;
        }
        if ($request->file('armoregg2_img')){
            $file = $request->file('armoregg2_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['armoregg2_img'] = $filename;
        }
        if ($request->file('baby_evo_img')){
            $file = $request->file('baby_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['baby_evo_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['child_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['adult_evo_img'] = $filename;
        }
        if ($request->file('armor1_evo_img')){
            $file = $request->file('armor1_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['armor1_evo_img'] = $filename;
        }
        if ($request->file('armor2_evo_img')){
            $file = $request->file('armor2_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['armor2_evo_img'] = $filename;
        }
        if ($request->file('dna_evo_img')){
            $file = $request->file('dna_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['dna_evo_img'] = $filename;
        }
        if ($request->file('dnaperfect_evo_img')){
            $file = $request->file('dnaperfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['dnaperfect_evo_img'] = $filename;
        }
        if ($request->file('dnaultimate_evo_img')){
            $file = $request->file('dnaultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02['dnaultimate_evo_img'] = $filename;
        }

            $digimon02->save();

            return redirect()->route('digimon02.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $digimon02Show = Digimon02::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_2.Show_Page', compact('digimon02Show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $digimon02Edit = Digimon02::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_2.Edit_Page', compact('digimon02Edit'));
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
            'armoregg1_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'armoregg1_name' => 'required',
            'armoregg2_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'armoregg2_name' => 'required',
            'baby_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'baby_evo_name' => 'required',
            'child_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'child_evo_name' => 'required',
            'adult_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'adult_evo_name' => 'required',
            'armor1_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'armor1_evo_name' => 'required',
            'armor2_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'armor2_evo_name' => 'required',
            'dna_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'dna_evo_name' => 'required',
            'dnaperfect_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'dnaperfect_evo_name' => 'required',
            'dnaultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'dnaultimate_evo_name' => 'required',
        ]);

        $pid = $request->id;

        $digimon02Edit = Digimon02::find($pid);

        $digimon02Edit->character_name = $request->input('character_name');
        $digimon02Edit->digivise_name = $request->input('digivise_name');
        $digimon02Edit->armoregg1_name = $request->input('armoregg1_name');
        $digimon02Edit->armoregg2_name = $request->input('armoregg2_name');
        $digimon02Edit->baby_evo_name = $request->input('baby_evo_name');
        $digimon02Edit->child_evo_name = $request->input('child_evo_name');
        $digimon02Edit->adult_evo_name = $request->input('adult_evo_name');
        $digimon02Edit->armor1_evo_name = $request->input('armor1_evo_name');
        $digimon02Edit->armor2_evo_name = $request->input('armor2_evo_name');
        $digimon02Edit->dna_evo_name = $request->input('dna_evo_name');
        $digimon02Edit->dnaperfect_evo_name = $request->input('dnaperfect_evo_name');
        $digimon02Edit->dnaultimate_evo_name = $request->input('dnaultimate_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['digivise_img'] = $filename;
        }
        if ($request->file('armoregg1_img')){
            $file = $request->file('armoregg1_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['armoregg1_img'] = $filename;
        }
        if ($request->file('armoregg2_img')){
            $file = $request->file('armoregg2_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['armoregg2_img'] = $filename;
        }
        if ($request->file('baby_evo_img')){
            $file = $request->file('baby_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['baby_evo_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['child_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['adult_evo_img'] = $filename;
        }
        if ($request->file('armor1_evo_img')){
            $file = $request->file('armor1_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['armor1_evo_img'] = $filename;
        }
        if ($request->file('armor2_evo_img')){
            $file = $request->file('armor2_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['armor2_evo_img'] = $filename;
        }
        if ($request->file('dna_evo_img')){
            $file = $request->file('dna_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['dna_evo_img'] = $filename;
        }
        if ($request->file('dnaperfect_evo_img')){
            $file = $request->file('dnaperfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['dnaperfect_evo_img'] = $filename;
        }
        if ($request->file('dnaultimate_evo_img')){
            $file = $request->file('dnaultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_02'), $filename);
            $digimon02Edit['dnaultimate_evo_img'] = $filename;
        }

            $digimon02Edit->save();

            return redirect()->route('digimon02.page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $digimon02Delete = Digimon02::find($id);
        $digimon02Delete->delete();
        return redirect()->back();
    }
}
