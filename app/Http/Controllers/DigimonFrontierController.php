<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DigimonFrontier;

class DigimonFrontierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $digimonfrontier = DigimonFrontier::all();
        return view('Backend_Studio.Digimon_Main_Page_4.Main_Page', compact('digimonfrontier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend_Studio.Digimon_Main_Page_4.Add_Page');
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
            'spirit_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'spirit_name' => 'required',
            'human_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'human_evo_name' => 'required',
            'adult_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'adult_evo_name' => 'required',
            'perfect_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'perfect_evo_name' => 'required',
            'fusion_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'fusion_evo_name' => 'required',
            'ultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimate_evo_name' => 'required',
        ]);

        $digimonfrontier = new DigimonFrontier();

        $digimonfrontier->character_name = $request->input('character_name');
        $digimonfrontier->digivise_name = $request->input('digivise_name');
        $digimonfrontier->spirit_name = $request->input('spirit_name');
        $digimonfrontier->human_evo_name = $request->input('human_evo_name');
        $digimonfrontier->adult_evo_name = $request->input('adult_evo_name');
        $digimonfrontier->perfect_evo_name = $request->input('perfect_evo_name');
        $digimonfrontier->fusion_evo_name = $request->input('fusion_evo_name');
        $digimonfrontier->ultimate_evo_name = $request->input('ultimate_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontier['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontier['digivise_img'] = $filename;
        }
        if ($request->file('spirit_img')){
            $file = $request->file('spirit_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontier['spirit_img'] = $filename;
        }
        if ($request->file('human_evo_img')){
            $file = $request->file('human_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontier['human_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontier['adult_evo_img'] = $filename;
        }
        if ($request->file('perfect_evo_img')){
            $file = $request->file('perfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontier['perfect_evo_img'] = $filename;
        }
        if ($request->file('fusion_evo_img')){
            $file = $request->file('fusion_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontier['fusion_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontier['ultimate_evo_img'] = $filename;
        }

            $digimonfrontier->save();

            return redirect()->route('digimonfrontier.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $digimonfrontierShow = DigimonFrontier::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_4.Show_Page', compact('digimonfrontierShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $digimonfrontierEdit = DigimonFrontier::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_4.Edit_Page', compact('digimonfrontierEdit'));
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
            'spirit_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'spirit_name' => 'required',
            'human_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'human_evo_name' => 'required',
            'adult_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'adult_evo_name' => 'required',
            'perfect_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'perfect_evo_name' => 'required',
            'fusion_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'fusion_evo_name' => 'required',
            'ultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimate_evo_name' => 'required',
        ]);

        $pid = $request->id;

        $digimonfrontierEdit = DigimonFrontier::find($pid);

        $digimonfrontierEdit->character_name = $request->input('character_name');
        $digimonfrontierEdit->digivise_name = $request->input('digivise_name');
        $digimonfrontierEdit->spirit_name = $request->input('spirit_name');
        $digimonfrontierEdit->human_evo_name = $request->input('human_evo_name');
        $digimonfrontierEdit->adult_evo_name = $request->input('adult_evo_name');
        $digimonfrontierEdit->perfect_evo_name = $request->input('perfect_evo_name');
        $digimonfrontierEdit->fusion_evo_name = $request->input('fusion_evo_name');
        $digimonfrontierEdit->ultimate_evo_name = $request->input('ultimate_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontierEdit['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontierEdit['digivise_img'] = $filename;
        }
        if ($request->file('spirit_img')){
            $file = $request->file('spirit_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontierEdit['spirit_img'] = $filename;
        }
        if ($request->file('human_evo_img')){
            $file = $request->file('human_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontierEdit['human_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontierEdit['adult_evo_img'] = $filename;
        }
        if ($request->file('perfect_evo_img')){
            $file = $request->file('perfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontierEdit['perfect_evo_img'] = $filename;
        }
        if ($request->file('fusion_evo_img')){
            $file = $request->file('fusion_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontierEdit['fusion_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon_Frontier'), $filename);
            $digimonfrontierEdit['ultimate_evo_img'] = $filename;
        }

            $digimonfrontierEdit->save();

            return redirect()->route('digimonfrontier.page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $digimonfrontierDelete = DigimonFrontier::find($id);
        $digimonfrontierDelete->delete();
        return redirect()->back();
    }
}
