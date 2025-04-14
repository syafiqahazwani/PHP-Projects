<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korea; //add Korea Model - Data is coming from the database via Model.

class KoreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $numberKorea = Korea::count();       
      $search = $request->query('search');

      if(!empty($search)){
        $data = Korea::where('TitleName','like','%'.$search.'%')
        ->orWhere('MainCharacterCast','like','%'.$search.'%')
        ->paginate(100);
      }else{
        $data = Korea::paginate(100);
      }

        return view('Korea.movie_drama', ['data' => $data, 'search' => $search, 'numberKorea' => $numberKorea]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('korea.create');

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

      $data = new Korea();

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
    public function show(Korea $korea)
    {

        $data = Korea::all();
        return view('Korea.view', ['korea' => $korea]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Korea $korea)
    {

        return view('korea.edit', ['korea' => $korea]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Korea $korea)
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
    
            $data = Korea::find($korea);
    
            $korea->Image = $request->input('Image');
            $korea->TitleName = $request->input('TitleName');
            $korea->MainCharacterCast = $request->input('MainCharacterCast');
            $korea->EpisodeMovie = $request->input('EpisodeMovie');
            $korea->ListOfEpisodeMovie = $request->input('ListOfEpisodeMovie');
            $korea->GenreCategory = $request->input('GenreCategory');
            $korea->Rate = $request->input('Rate');
      
            if ($request->hasFile('Image')) {
    
            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move($filename);
      
            $korea->Image = $filename;
           
            }
        
            $korea->save(); 
            return redirect(route('korea.index'))->with('Success', 'Updated');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Korea $korea)
    {

       $data = Korea::find($korea);

       $korea->delete();
       return redirect(route('korea.index'))->with('Success', 'Deleted');

    }
}
