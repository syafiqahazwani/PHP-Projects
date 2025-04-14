<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mydatabase; //add Mydatabase Model - Data is coming from the database via Model.
use Illuminate\Support\Facades\Stroage; //for download pdf

class MydatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $idnumber = Mydatabase::count(); 
      $search = $request->query('search');
  
        if(!empty($search)){
          $data = Mydatabase::where('FolderName','like','%'.$search.'%')
          ->orWhere('FolderInformation','like','%'.$search.'%')
          ->paginate(50);
        }else{
          $data = Mydatabase::paginate(50);
        }
  
          return view('Mydatabase.my_database', ['data' => $data, 'search' => $search, 'idnumber' => $idnumber]);
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mydatabase.create');
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
          
          'Calendar' => 'required',
          'FolderName' => 'required',
          'FolderInformation' => 'required',
          //'InsertPDF' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
  
        ]);
  
        $data = new Mydatabase();
  
        $data->Calendar = $request->input('Calendar');
        $data->FolderName = $request->input('FolderName');
        $data->FolderInformation = $request->input('FolderInformation');
        $data->InsertPDF = $request->input('InsertPDF');
  
          if ($request->hasFile('InsertPDF')) 

        {

        $file = $request->file('InsertPDF');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move($filename);

        $data->InsertPDF = $filename;

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
    public function show(Mydatabase $mydatabase)
    {
        $data = Mydatabase::all();
        return view('Mydatabase.view', ['mydatabase' => $mydatabase]);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mydatabase $mydatabase)
    {
        return view('mydatabase.edit', ['mydatabase' => $mydatabase]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mydatabase $mydatabase)
    {

        $request->validate([
          
            'Calendar' => 'required',
            'FolderName' => 'required',
            'FolderInformation' => 'required',
            //'InsertPDF' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx',
        ]);

        $data = Mydatabase::find($mydatabase);

        $mydatabase->Calendar = $request->input('Calendar');
        $mydatabase->FolderName = $request->input('FolderName');
        $mydatabase->FolderInformation = $request->input('FolderInformation');
        $mydatabase->InsertPDF = $request->input('InsertPDF');
  
           if ($request->hasFile('InsertPDF')) 
       {

        $file = $request->file('InsertPDF');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move($filename);

        $mydatabase->InsertPDF = $filename;
       
        }
    
        $mydatabase->save(); 
        return redirect(route('mydatabase.index'))->with('Success', 'Updated');
  
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mydatabase $mydatabase)
    {
        $data = Mydatabase::find($mydatabase);

        $mydatabase->delete();
        return redirect(route('mydatabase.index'))->with('Success', 'Deleted');
    }

}
