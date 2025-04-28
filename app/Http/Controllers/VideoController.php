<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use App\Models\video;

class VideoController extends Controller
{
    public function index()
    {
        $video = video::all();
        return view('insert_video.main_page_video', compact('video'));
    }

    public function create()
    {
        return view('insert_video.add_page_video');
    }

    public function store(Request $request)
    {
        $request->validate([
            'video_title' => 'required',
            'video_description' => 'required',
            'video_display' => 'required|mimes:mp4,avi,mov,webm|max:10240',
        ]);

        $video = new video();

        $video->video_title = $request->input('video_title');
        $video->video_description = $request->input('video_description');

        if ($request->file('video_display')){
            $file = $request->file('video_display');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Database'), $filename);
            $video['video_display'] = $filename;
        }

            $video->save();

            return redirect()->route('video.index');
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
