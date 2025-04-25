<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DigimonSavers;

class DigimonSaversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $digimonsavers = DigimonSavers::all();
        return view('Backend_Studio.Digimon_Main_Page_5.Main_Page', compact('digimonsavers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend_Studio.Digimon_Main_Page_5.Add_Page');
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
            'digivise1_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'digivise1_name' => 'required',
            'digivise2_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'digivise2_name' => 'required',
            'child_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'child_evo_name' => 'required',
            'adult_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'adult_evo_name' => 'required',
            'perfect_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'perfect_evo_name' => 'required',
            'ultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimate_evo_name' => 'required',
            'ultimateburst_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimateburst_evo_name' => 'required',
        ]);

        $digimonsavers = new DigimonSavers();

        $digimonsavers->character_name = $request->input('character_name');
        $digimonsavers->digivise1_name = $request->input('digivise1_name');
        $digimonsavers->digivise2_name = $request->input('digivise2_name');
        $digimonsavers->child_evo_name = $request->input('child_evo_name');
        $digimonsavers->adult_evo_name = $request->input('adult_evo_name');
        $digimonsavers->perfect_evo_name = $request->input('perfect_evo_name');
        $digimonsavers->ultimate_evo_name = $request->input('ultimate_evo_name');
        $digimonsavers->ultimateburst_evo_name = $request->input('ultimateburst_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsavers['character_img'] = $filename;
        }
        if ($request->file('digivise1_img')){
            $file = $request->file('digivise1_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsavers['digivise1_img'] = $filename;
        }
        if ($request->file('digivise2_img')){
            $file = $request->file('digivise2_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsavers['digivise2_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsavers['child_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsavers['adult_evo_img'] = $filename;
        }
        if ($request->file('perfect_evo_img')){
            $file = $request->file('perfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsavers['perfect_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsavers['ultimate_evo_img'] = $filename;
        }
        if ($request->file('ultimateburst_evo_img')){
            $file = $request->file('ultimateburst_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsavers['ultimateburst_evo_img'] = $filename;
        }

            $digimonsavers->save();

            return redirect()->route('digimonsavers.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $digimonsaversShow = DigimonSavers::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_5.Show_Page', compact('digimonsaversShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $digimonsaversEdit = DigimonSavers::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_5.Edit_Page', compact('digimonsaversEdit'));
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
            'digivise1_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'digivise1_name' => 'required',
            'digivise2_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'digivise2_name' => 'required',
            'child_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'child_evo_name' => 'required',
            'adult_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'adult_evo_name' => 'required',
            'perfect_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'perfect_evo_name' => 'required',
            'ultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimate_evo_name' => 'required',
            'ultimateburst_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimateburst_evo_name' => 'required',
        ]);

        $pid = $request->id;

        $digimonsaversEdit = DigimonSavers::find($pid);

        $digimonsaversEdit->character_name = $request->input('character_name');
        $digimonsaversEdit->digivise1_name = $request->input('digivise1_name');
        $digimonsaversEdit->digivise2_name = $request->input('digivise2_name');
        $digimonsaversEdit->child_evo_name = $request->input('child_evo_name');
        $digimonsaversEdit->adult_evo_name = $request->input('adult_evo_name');
        $digimonsaversEdit->perfect_evo_name = $request->input('perfect_evo_name');
        $digimonsaversEdit->ultimate_evo_name = $request->input('ultimate_evo_name');
        $digimonsaversEdit->ultimateburst_evo_name = $request->input('ultimateburst_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsaversEdit['character_img'] = $filename;
        }
        if ($request->file('digivise1_img')){
            $file = $request->file('digivise1_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsaversEdit['digivise1_img'] = $filename;
        }
        if ($request->file('digivise2_img')){
            $file = $request->file('digivise2_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsaversEdit['digivise2_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsaversEdit['child_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsaversEdit['adult_evo_img'] = $filename;
        }
        if ($request->file('perfect_evo_img')){
            $file = $request->file('perfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsaversEdit['perfect_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsaversEdit['ultimate_evo_img'] = $filename;
        }
        if ($request->file('ultimateburst_evo_img')){
            $file = $request->file('ultimateburst_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Savers'), $filename);
            $digimonsaversEdit['ultimateburst_evo_img'] = $filename;
        }

            $digimonsaversEdit->save();

            return redirect()->route('digimonsavers.page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $digimonsaversDelete = DigimonSavers::find($id);
        $digimonfsaversDelete->delete();
        return redirect()->back();
    }
}
