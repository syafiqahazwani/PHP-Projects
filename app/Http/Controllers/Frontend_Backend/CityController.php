<?php

namespace App\Http\Controllers\Frontend_Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CityPage;
use App\Models\QuotesPage;
use App\Models\FoodPage;
use App\Models\AnimalPage;

class CityController extends Controller
{
    //START Backend City Page
    public function CityPage()
    {
        $numberCity = CityPage::count();
        $city = CityPage::paginate(20);

        return view('Backend.City_Page.city_page', compact('city', 'numberCity'));
    }

    public function CityAdd()
    {
        return view('Backend.City_Page.add_on_city');
    }

    public function CityStore(Request $request)
    {
        //Validation
        $request->validate([
            'city_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'city_name' => 'required',
            'city_which_country' => 'required',
            'city_description' => 'required'
        ]);

        $city = new CityPage();

        $city->city_name = $request->input('city_name');
        $city->city_which_country = $request->input('city_which_country');
        $city->city_description = $request->input('city_description');

        if ($request->file('city_image')){
            $file = $request->file('city_image');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/City_Page'), $filename);
            $city['city_image'] = $filename;
        }

            $city->save();

            return redirect()->route('city.page')->with('message', 'Success - City Data Successfully Added.');
    }

    public function CityEdit($id)
    {
        $cityEdit = CityPage::findOrFail($id);
        return view('Backend.City_Page.edit_page', compact('cityEdit'));
    }

    public function CityUpdate(Request $request)
    {
        //Validation
        $request->validate([
            //'city_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'city_name' => 'required',
            'city_which_country' => 'required',
            'city_description' => 'required'
        ]);

        $pid = $request->id;

        $cityEdit = CityPage::find($pid);

        $cityEdit->city_name = $request->input('city_name');
        $cityEdit->city_which_country = $request->input('city_which_country');
        $cityEdit->city_description = $request->input('city_description');

        if ($request->file('city_image')){
            $file = $request->file('city_image');
            @unlink(public_path('Images/City_Page/'.$cityEdit->city_image));//replace the image and delete old image
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/City_Page'), $filename);
            $cityEdit['city_image'] = $filename;
        }

        $cityEdit->save();

        return redirect()->route('city.page')->with('message', 'Success - City Data Successfully Updated.');

    }

    public function CityShow($id)
    {
        $cityShow = CityPage::findOrFail($id);
        return view('Backend.City_Page.show_page', compact('cityShow'));
    }

    public function CityDelete($id)
    {
        $cityDelete = CityPage::find($id);
        $image_path = public_path('Images/City_Page/'.$cityDelete->city_image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }

        $cityDelete->delete();
        return redirect()->back()->with('message', 'Success - City Data Successfully Deleted.');
    }
    //END Backend City Page

    //START Frontend City Page
    public function CityMain()
    {
        $cityMain = CityPage::paginate(20);

        $numberQuotes = QuotesPage::count();
        $numberCity = CityPage::count();
        $numberFood = FoodPage::count();
        $numberAnimal = AnimalPage::count();

        return view('Frontend.City_Page.city_page_front',compact('cityMain', 'numberQuotes', 'numberCity', 'numberFood', 'numberAnimal'));
    }
    //END Frontend City Page

}
