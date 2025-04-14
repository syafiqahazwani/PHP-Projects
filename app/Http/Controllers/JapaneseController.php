<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Japanese; //add Japanese Model - Data is coming from the database via Model.

class JapaneseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  

      $numberJapan = Japanese::count();
      $search = $request->query('search');

      if(!empty($search)){
        $data = Japanese::where('TitleName','like','%'.$search.'%')
        ->orWhere('MainCharacterCast','like','%'.$search.'%')
        ->paginate(100);
      }else{
        $data = Japanese::paginate(100);
      }

        return view('Japanese.movie_drama', ['data' => $data, 'search' => $search, 'numberJapan' => $numberJapan]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('japanese.create');

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

      $data = new Japanese();

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
    public function show(Japanese $japanese)
    {

        $data = Japanese::all();
        return view('Japanese.view', ['japanese' => $japanese]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Japanese $japanese)
    {

        return view('japanese.edit', ['japanese' => $japanese]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Japanese $japanese)
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

        $data = Japanese::find($japanese);

        $japanese->Image = $request->input('Image');
        $japanese->TitleName = $request->input('TitleName');
        $japanese->MainCharacterCast = $request->input('MainCharacterCast');
        $japanese->EpisodeMovie = $request->input('EpisodeMovie');
        $japanese->ListOfEpisodeMovie = $request->input('ListOfEpisodeMovie');
        $japanese->GenreCategory = $request->input('GenreCategory');
        $japanese->Rate = $request->input('Rate');
  
        if ($request->hasFile('Image')) {

        $file = $request->file('Image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move($filename);
  
        $japanese->Image = $filename;
       
        }
    
        $japanese->save(); 
        return redirect(route('japanese.index'))->with('Success', 'Updated');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Japanese $japanese)
    {
        
       $data = Japanese::find($japanese);

       $japanese->delete();
       return redirect(route('japanese.index'))->with('Success', 'Deleted');

    }

}
