<?php

namespace App\Http\Controllers\Frontend_Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuotesPage;
use App\Models\AnimalPage;
use App\Models\FoodPage;
use App\Models\CityPage;

class QuotesController extends Controller
{
    //START Backend Quotes Page
    public function QuotesPage()
    {
        $numberQuotes = QuotesPage::count();
        $quotes = QuotesPage::paginate(20);

        return view('Backend.Quotes_Page.quotes_page', compact('quotes', 'numberQuotes'));
    }

    public function QuotesAdd()
    {
        return view('Backend.Quotes_Page.quotes_page');
    }

    public function QuotesStore(Request $request)
    {
        //Validation
        $request->validate([
            'quotes_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'quotes_description' => 'required'
        ]);

        $quotes = new QuotesPage();

        $quotes->quotes_description = $request->input('quotes_description');

        if ($request->file('quotes_image')){
            $file = $request->file('quotes_image');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Quotes_Page'), $filename);
            $quotes['quotes_image'] = $filename;
        }

            $quotes->save();

            return redirect()->route('quotes.page')->with('message', 'Success - Quotes Data Successfully Added.');
    }

    public function QuotesEdit($id)
    {
        $quotesEdit = QuotesPage::findOrFail($id);
        return view('Backend.Quotes_Page.edit_page', compact('quotesEdit'));
    }

    public function QuotesUpdate(Request $request)
    {
        //Validation
        $request->validate([
            //'quotes_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'quotes_description' => 'required'
        ]);

        $pid = $request->id;

        $quotesEdit = QuotesPage::find($pid);

        $quotesEdit->quotes_description = $request->input('quotes_description');

        if ($request->file('quotes_image')){
            $file = $request->file('quotes_image');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Quotes_Page'), $filename);
            $quotesEdit['quotes_image'] = $filename;
        }

        $quotesEdit->save();

        return redirect()->route('quotes.page')->with('message', 'Success - Quotes Data Successfully Updated.');

    }

    public function QuotesShow($id)
    {
        $quotesShow = QuotesPage::findOrFail($id);
        return view('Backend.Quotes_Page.show_page', compact('quotesShow'));
    }

    public function QuotesDelete($id)
    {
        $quotesDelete = QuotesPage::find($id);
        $image_path = public_path('Images/Quotes_Page/'.$quotesDelete->quotes_image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }

        $quotesDelete->delete();
        return redirect()->back()->with('message', 'Success - Quotes Data Successfully Deleted.');
    }
    //END Backend Quotes Page

    //START Frontend Quotes Page
    public function QuotesMain()
    {
        $quotesMain = QuotesPage::paginate(20);

        $numberQuotes = QuotesPage::count();
        $numberCity = CityPage::count();
        $numberFood = FoodPage::count();
        $numberAnimal = AnimalPage::count();

        return view('Frontend.Quotes_Page.quotes_page_front',compact('quotesMain', 'numberQuotes', 'numberCity', 'numberFood', 'numberAnimal'));
    }
    //END Frontend Quotes Page

}
