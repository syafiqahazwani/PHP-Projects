<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Digimon;

class DigimonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $digimon = Digimon::all();
        return view('Backend_Studio.Digimon_Main_Page_1.Main_Page', compact('digimon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend_Studio.Digimon_Main_Page_1.Add_Page');
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
            'creast_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'creast_name' => 'required',
            'baby_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'baby_evo_name' => 'required',
            'child_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'child_evo_name' => 'required',
            'adult_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'adult_evo_name' => 'required',
            'perfect_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'perfect_evo_name' => 'required',
            'ultimate_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'ultimate_evo_name' => 'required',
        ]);

        $digimon = new Digimon();

        $digimon->character_name = $request->input('character_name');
        $digimon->digivise_name = $request->input('digivise_name');
        $digimon->creast_name = $request->input('creast_name');
        $digimon->baby_evo_name = $request->input('baby_evo_name');
        $digimon->child_evo_name = $request->input('child_evo_name');
        $digimon->adult_evo_name = $request->input('adult_evo_name');
        $digimon->perfect_evo_name = $request->input('perfect_evo_name');
        $digimon->ultimate_evo_name = $request->input('ultimate_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimon['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimon['digivise_img'] = $filename;
        }
        if ($request->file('creast_img')){
            $file = $request->file('creast_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimon['creast_img'] = $filename;
        }
        if ($request->file('baby_evo_img')){
            $file = $request->file('baby_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimon['baby_evo_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimon['child_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimon['adult_evo_img'] = $filename;
        }
        if ($request->file('perfect_evo_img')){
            $file = $request->file('perfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimon['perfect_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimon['ultimate_evo_img'] = $filename;
        }

            $digimon->save();

            return redirect()->route('digimon.page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $digimonShow = Digimon::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_1.Show_Page', compact('digimonShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $digimonEdit = Digimon::findOrFail($id);
        return view('Backend_Studio.Digimon_Main_Page_1.Edit_Page', compact('digimonEdit'));
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
            'creast_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'creast_name' => 'required',
            'baby_evo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'baby_evo_name' => 'required',
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

        $digimonEdit = Digimon::find($pid);

        $digimonEdit->character_name = $request->input('character_name');
        $digimonEdit->digivise_name = $request->input('digivise_name');
        $digimonEdit->creast_name = $request->input('creast_name');
        $digimonEdit->baby_evo_name = $request->input('baby_evo_name');
        $digimonEdit->child_evo_name = $request->input('child_evo_name');
        $digimonEdit->adult_evo_name = $request->input('adult_evo_name');
        $digimonEdit->perfect_evo_name = $request->input('perfect_evo_name');
        $digimonEdit->ultimate_evo_name = $request->input('ultimate_evo_name');

        if ($request->file('character_img')){
            $file = $request->file('character_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimonEdit['character_img'] = $filename;
        }
        if ($request->file('digivise_img')){
            $file = $request->file('digivise_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimonEdit['digivise_img'] = $filename;
        }
        if ($request->file('creast_img')){
            $file = $request->file('creast_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimonEdit['creast_img'] = $filename;
        }
        if ($request->file('baby_evo_img')){
            $file = $request->file('baby_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimonEdit['baby_evo_img'] = $filename;
        }
        if ($request->file('child_evo_img')){
            $file = $request->file('child_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimonEdit['child_evo_img'] = $filename;
        }
        if ($request->file('adult_evo_img')){
            $file = $request->file('adult_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimonEdit['adult_evo_img'] = $filename;
        }
        if ($request->file('perfect_evo_img')){
            $file = $request->file('perfect_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimonEdit['perfect_evo_img'] = $filename;
        }
        if ($request->file('ultimate_evo_img')){
            $file = $request->file('ultimate_evo_img');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Digimon'), $filename);
            $digimonEdit['ultimate_evo_img'] = $filename;
        }

            $digimonEdit->save();

            return redirect()->route('digimon.page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $digimonDelete = Digimon::find($id);
        $digimonDelete->delete();
        return redirect()->back();
    }
}
