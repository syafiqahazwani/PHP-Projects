<?php

namespace App\Http\Controllers\Frontend_Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnimalPage;
use App\Models\FoodPage;
use App\Models\CityPage;
use App\Models\QuotesPage;

class AnimalController extends Controller
{
    //START Backend Animal Page
    public function AnimalPage()
    {
        $numberAnimal = AnimalPage::count();
        $animal = AnimalPage::paginate(20);

        return view('Backend.Animal_Page.animal_page', compact('animal', 'numberAnimal'));
    }

    public function AnimalAdd()
    {
        return view('Backend.Animal_Page.add_on_animal');
    }

    public function AnimalStore(Request $request)
    {
        //Validation
        $request->validate([
            'animal_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'animal_name' => 'required',
            'animal_which_country' => 'required',
            'animal_description' => 'required'
        ]);

        $animal = new AnimalPage();

        $animal->animal_name = $request->input('animal_name');
        $animal->animal_which_country = $request->input('animal_which_country');
        $animal->animal_description = $request->input('animal_description');

        if ($request->file('animal_image')){
            $file = $request->file('animal_image');
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Animal_Page'), $filename);
            $animal['animal_image'] = $filename;
        }

            $animal->save();

            return redirect()->route('animal.page')->with('message', 'Success - Animal Data Successfully Added.');
    }

    public function AnimalEdit($id)
    {
        $animalEdit = AnimalPage::findOrFail($id);
        return view('Backend.Animal_Page.edit_page', compact('animalEdit'));
    }

    public function AnimalUpdate(Request $request)
    {
        //Validation
        $request->validate([
            //'animal_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048',
            'animal_name' => 'required',
            'animal_which_country' => 'required',
            'animal_description' => 'required'
        ]);

        $pid = $request->id;

        $animalEdit = AnimalPage::find($pid);

        $animalEdit->animal_name = $request->input('animal_name');
        $animalEdit->animal_which_country = $request->input('animal_which_country');
        $animalEdit->animal_description = $request->input('animal_description');

        if ($request->file('animal_image')){
            $file = $request->file('animal_image');
            @unlink(public_path('Images/Animal_Page/'.$animalEdit->animal_image));//replace the image and delete old image
            $filename = date('dmy_H_s_i').$file->getClientOriginalName();
            $file->move(public_path('Images/Animal_Page'), $filename);
            $animalEdit['animal_image'] = $filename;
        }

        $animalEdit->save();

        return redirect()->route('animal.page')->with('message', 'Success - Animal Data Successfully Updated.');

    }

    public function AnimalShow($id)
    {
        $animalShow = AnimalPage::findOrFail($id);
        return view('Backend.Animal_Page.show_page', compact('animalShow'));
    }

    public function AnimalDelete($id)
    {
        $animalDelete = AnimalPage::find($id);
        $image_path = public_path('Images/Animal_Page/'.$animalDelete->animal_image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }

        $animalDelete->delete();
        return redirect()->back()->with('message', 'Success - Animal Data Successfully Deleted.');
    }
    //END Backend Animal Page

    //START Frontend Animal Page
    public function AnimalMain()
    {
        $animalMain = AnimalPage::paginate(20);

        $numberQuotes = QuotesPage::count();
        $numberCity = CityPage::count();
        $numberFood = FoodPage::count();
        $numberAnimal = AnimalPage::count();

        return view('Frontend.Animal_Page.animal_page_front',compact('animalMain', 'numberQuotes', 'numberCity', 'numberFood', 'numberAnimal'));
    }
    //END Frontend Animal Page

}
