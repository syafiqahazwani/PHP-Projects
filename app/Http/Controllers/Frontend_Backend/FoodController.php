<?php

namespace App\Http\Controllers\Frontend_Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodPage;
use App\Models\CityPage;
use App\Models\QuotesPage;
use App\Models\AnimalPage;

class FoodController extends Controller
{
    //START Backend Food Page
    public function FoodPage()
    {
        $numberFood = FoodPage::count();
        $food = FoodPage::paginate(20);

        return view('Backend.Food_Page.food_page', compact('food', 'numberFood'));
    }

    public function FoodAdd()
    {
        return view('Backend.Food_Page.add_on_food');
    }

    public function FoodStore(Request $request)
    {
        //Validation
        $request->validate([
            'food_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'food_name' => 'required',
            'food_which_country' => 'required',
            'food_description' => 'required'
        ]);

        $food = new FoodPage();

        $food->food_name = $request->input('food_name');
        $food->food_which_country = $request->input('food_which_country');
        $food->food_description = $request->input('food_description');

        if ($request->file('food_image')){
            $file = $request->file('food_image');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Food_Page'), $filename);
            $food['food_image'] = $filename;
        }

            $food->save();

            return redirect()->route('food.page')->with('message', 'Success - Food Data Successfully Added.');
    }

    public function FoodEdit($id)
    {
        $foodEdit = FoodPage::findOrFail($id);
        return view('Backend.Food_Page.edit_page', compact('foodEdit'));
    }

    public function FoodUpdate(Request $request)
    {
        //Validation
        $request->validate([
            //'food_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'food_name' => 'required',
            'food_which_country' => 'required',
            'food_description' => 'required'
        ]);

        $pid = $request->id;

        $foodEdit = FoodPage::find($pid);

        $foodEdit->food_name = $request->input('food_name');
        $foodEdit->food_which_country = $request->input('food_which_country');
        $foodEdit->food_description = $request->input('food_description');

        if ($request->file('food_image')){
            $file = $request->file('food_image');
            @unlink(public_path('Images/Food_Page/'.$foodEdit->food_image));//replace the image and delete old image
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Food_Page'), $filename);
            $foodEdit['food_image'] = $filename;
        }

        $foodEdit->save();

        return redirect()->route('food.page')->with('message', 'Success - Food Data Successfully Updated.');

    }

    public function FoodShow($id)
    {
        $foodShow = FoodPage::findOrFail($id);
        return view('Backend.Food_Page.show_page', compact('foodShow'));
    }

    public function FoodDelete($id)
    {
        $foodDelete = FoodPage::find($id);
        $image_path = public_path('Images/Food_Page/'.$foodDelete->food_image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }

        $foodDelete->delete();
        return redirect()->back()->with('message', 'Success - Food Data Successfully Deleted.');
    }
    //END Backend Food Page

    //START Frontend Food Page
    public function FoodMain()
    {
        $foodMain = FoodPage::paginate(20);

        $numberQuotes = QuotesPage::count();
        $numberCity = CityPage::count();
        $numberFood = FoodPage::count();
        $numberAnimal = AnimalPage::count();

        return view('Frontend.Food_Page.food_page_front',compact('foodMain', 'numberQuotes', 'numberCity', 'numberFood', 'numberAnimal'));
    }
    //END Frontend Food Page

}
