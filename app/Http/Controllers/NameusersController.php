<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nameusers; //add Nameusers Model - Data is coming from the database via Model.

class NameusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nameusers::all();
        return view('Information.nameusers', ['data' => $data]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect(route('nameusers.index'))->with('Created', 'Done');
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
            'Name' => 'required',
            'Status' => 'required',
            'Description' => 'required',
      
          ]);
    
          $data = new Nameusers();
    
          $data->Image = $request->input('Image');
          $data->Name = $request->input('Name');
          $data->Status = $request->input('Status');
          $data->Description = $request->input('Description');

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
    public function show(Nameusers $nameusers)
    {
        $data = Nameusers::all();
        return view('Information.name_users', ['nameusers' => $nameusers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Nameusers $nameusers)
    {
        $nameusersedit = $request->all();
        Nameusers::where(['Nameusers', $nameusers])->update(['Image'=>$nameusersedit['Image'], 'Name'=>$nameusersedit['Name'], 'Status'=>$nameusersedit['Status'], 'Description'=>$nameusersedit['Description']]);
        return redirect()->back()->with('Status'. 'Update Sucessfull');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nameusers $nameusers)
    {
        $request->validate([
        
            //'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Name' => 'required',
            'Status' => 'required',
            'Description' => 'required',
      
          ]);
    
          $data = Nameusers::find($nameusers);
    
          $nameusers->Image = $request->input('Image');
          $nameusers->Name = $request->input('Name');
          $nameusers->Status = $request->input('Status');
          $nameusers->Description = $request->input('Description');

          if ($request->hasFile('Image')) {

            $file = $request->file('Image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move($filename);
      
            $nameusers->Image = $filename;
           
            }
    
          $nameusers->save();
          return redirect(route('nameusers.index'))->with('Success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Nameusers $nameusers)
    {
        $data = Nameusers::where($nameusers);
        $nameusers->delete();
        return redirect()->back()->with('Success', 'Deleted');
    }

}
