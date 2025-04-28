<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use App\Models\picture;

class PictureController extends Controller
{
    public function index()
    {
        $picture = picture::all();
        return view('insert_picture.main_page_picture', compact('picture'));
    }

    public function create()
    {
        return view('insert_picture.add_page_picture');
    }

    public function store(Request $request)
    {
        $request->validate([
            'picture_title' => 'required',
            'picture_description' => 'required',
            'picture_display' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
        ]);

        $picture = new picture();

        $picture->picture_title = $request->input('picture_title');
        $picture->picture_description = $request->input('picture_description');

        if ($request->file('picture_display')){
            $file = $request->file('picture_display');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Database'), $filename);
            $picture['picture_display'] = $filename;
        }

            $picture->save();

            return redirect()->route('picture.index');
    }

    public function download($filename)
    {
        $path = public_path('Database/' . $filename);

        if (File::exists($path)) {
            return Response::download($path, $filename, [
                'Content-Type' => File::mimeType($path),
            ]);
        } else {
            abort(404);
        }
    }
}

