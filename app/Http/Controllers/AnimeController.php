<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime; //add Anime Model - Data is coming from the database via Model.
use Image;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $numberAnime = Anime::count();
      $search = $request->query('search');

      if(!empty($search)){
        $data = Anime::where('AnimeName','like','%'.$search.'%')
        ->orWhere('Status','like','%'.$search.'%')
        ->paginate(100);
      }else{

        $data = Anime::paginate(100);
      }
      return view('Anime.anime_watched', ['data' => $data, 'search' => $search, 'numberAnime' => $numberAnime]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('anime.create');

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
        'AnimeName' => 'required',
        'AnimeMainCharacter' => 'required',
        'DateAiring' => 'required',
        'EpisodeSeries' => 'required',
        'MovieSeries' => 'required',
        'Status' => 'required',
        'Rate' => 'required',
      ]);

      $data = new Anime();

      $data->Image = $request->input('Image');
      $data->AnimeName = $request->input('AnimeName');
      $data->AnimeMainCharacter = $request->input('AnimeMainCharacter');
      $data->DateAiring = $request->input('DateAiring');
      $data->EpisodeSeries = $request->input('EpisodeSeries');
      $data->MovieSeries = $request->input('MovieSeries');
      $data->Status = $request->input('Status');
      $data->Rate = $request->input('Rate');

      if ($request->hasFile('Image')) {

        $file = $request->file('Image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move($filename);

        $data->Image = $filename;
      }

      $data->save();
      return back()->with('message','Anime Done Create!!!');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {

      $data = Anime::all();
      return view('Anime.view', ['anime' => $anime]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {

      return view('anime.edit', ['anime' => $anime]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, Anime $anime)
    {

        $request->validate([

        //'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        'AnimeName' => 'required',
        'AnimeMainCharacter' => 'required',
        'DateAiring' => 'required',
        'EpisodeSeries' => 'required',
        'MovieSeries' => 'required',
        'Status' => 'required',
        'Rate' => 'required',
        ]);

        $data = Anime::find($anime);

        $anime->Image = $request->input('Image');
        $anime->AnimeName = $request->input('AnimeName');
        $anime->AnimeMainCharacter = $request->input('AnimeMainCharacter');
        $anime->DateAiring = $request->input('DateAiring');
        $anime->EpisodeSeries = $request->input('EpisodeSeries');
        $anime->MovieSeries = $request->input('MovieSeries');
        $anime->Status = $request->input('Status');
        $anime->Rate = $request->input('Rate');

        if ($request->hasFile('Image')) {

        $file = $request->file('Image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move($filename);

        $anime->Image = $filename;
        }

        $anime->save();
        return redirect(route('anime.index'))->with('Success', 'Updated');

      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {

       $data = Anime::find($anime);

       $anime->delete();
       return redirect(route('anime.index'))->with('Success', 'Deleted');

    }

}
