<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use App\Models\pdf;

class PDFController extends Controller
{
    public function index()
    {
        $pdf = pdf::all();
        return view('insert_pdf.main_page_pdf', compact('pdf'));
    }

    public function create()
    {
        return view('insert_pdf.add_page_pdf');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pdf_title' => 'required',
            'pdf_description' => 'required',
            'pdf_display' => 'required|mimes:pdf|max:10240',
        ]);

        $pdf = new pdf();

        $pdf->pdf_title = $request->input('pdf_title');
        $pdf->pdf_description = $request->input('pdf_description');

        if ($request->file('pdf_display')){
            $file = $request->file('pdf_display');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Database'), $filename);
            $pdf['pdf_display'] = $filename;
        }

            $pdf->save();

            return redirect()->route('pdf.index');
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
