<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\English; //add English Model - Data is coming from the database via Model.

class EnglishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
      $numberEnglish = English::count();
      $search = $request->query('search');

      if(!empty($search)){
        $data = English::where('TitleName','like','%'.$search.'%')
        ->orWhere('MainCharacterCast','like','%'.$search.'%')
        ->paginate(100);
      }else{
        $data = English::paginate(100);
      }

        return view('English.movie_drama', ['data' => $data, 'search' => $search, 'numberEnglish' => $numberEnglish]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('english.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              
      $request->validate([
        
        //'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'TitleName' => 'required',
        'MainCharacterCast' => 'required',
        'EpisodeMovie' => 'required',
        'ListOfEpisodeMovie' => 'required',
        'GenreCategory' => 'required',
        'Rate' => 'required',
      ]);

      $data = new English();

      $data->Image = $request->input('Image');
      $data->TitleName = $request->input('TitleName');
      $data->MainCharacterCast = $request->input('MainCharacterCast');
      $data->EpisodeMovie = $request->input('EpisodeMovie');
      $data->ListOfEpisodeMovie = $request->input('ListOfEpisodeMovie');
      $data->GenreCategory = $request->input('GenreCategory');
      $data->Rate = $request->input('Rate');

      if ($request->hasFile('Image')) {

        $file = $request->file('Image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move($filename);

        $data->Image = $filename;
      }

      $data->save();
      return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(English $english)
    {

        $data = English::all();
        return view('English.view', ['english' => $english]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(English $english)
    {

        return view('english.edit', ['english' => $english]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, English $english)
    {
            
        $request->validate([
          
            //'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'TitleName' => 'required',
            'MainCharacterCast' => 'required',
            'EpisodeMovie' => 'required',
            'ListOfEpisodeMovie' => 'required',
            'GenreCategory' => 'required',
            'Rate' => 'required',
            ]);
    
            $data = English::find($english);
    
            $english->Image = $request->input('Image');
            $english->TitleName = $request->input('TitleName');
            $english->MainCharacterCast = $request->input('MainCharacterCast');
            $english->EpisodeMovie = $request->input('EpisodeMovie');
            $english->ListOfEpisodeMovie = $request->input('ListOfEpisodeMovie');
            $english->GenreCategory = $request->input('GenreCategory');
            $english->Rate = $request->input('Rate');
      
            if ($request->hasFile('Image')) {
    
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move($filename);
      
            $english->Image = $filename;
           
            }
        
            $english->save(); 
            return redirect(route('english.index'))->with('Success', 'Updated');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(English $english)
    {

       $data = English::find($english);

       $english->delete();
       return redirect(route('english.index'))->with('Success', 'Deleted');

    }
}
