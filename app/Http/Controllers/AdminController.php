<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\QuotesPage;
use App\Models\CityPage;
use App\Models\FoodPage;
use App\Models\AnimalPage;
use App\Models\AboutPage;

class AdminController extends Controller
{
    //START Backend Admin Page
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function AdminDashboard()
    {
        $adminData = User::all();

        $numberQuotes = QuotesPage::count();
        $numberCity = CityPage::count();
        $numberFood = FoodPage::count();
        $numberAnimal = AnimalPage::count();

        $animal = AnimalPage::all();

        return view('Backend.Admin.dashboard_page', compact('adminData', 'numberQuotes', 'numberCity', 'numberFood', 'numberAnimal', 'animal'));
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('Backend.Admin.profile_page', compact('adminData'));
    }

    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->role = $request->role;
        $data->status = $request->status;

        if ($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('Images/Admin_Profile/'.$data->photo));//replace the image and delete old image
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Images/Admin_Profile'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();

        return redirect()->back()->with('message', 'Success - Admin Profile Successfully Updated.');
    }

    public function AdminChangePassword()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('Backend.Admin.change_password',compact('adminData'));
    }

    public function AdminUpdatePassword(Request $request)
    {
        // Validation
        $request->validate([
            'old_password'=> 'required',
            'new_password'=> 'required|confirmed'
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array(
                'message'=> 'Old Password Not Matched!',
                'alert-type'=> 'error'
            );
           return back()->with($notification);
    }

        // Update The New Password
         User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
    ]);

          return redirect()->back()->with('message', 'Success - Password Successfully Changed.');
   }

   public function AdminRegister()
    {
        $adminData = User::all();
        return view('Backend.Admin.admin_register', compact('adminData'));
    }

    public function AdminCalendar()
    {
        return view('Backend.Admin.calendar_page');
    }
    //END Backend Admin Page

    //START Frontend Main Page
    public function MainDashboard()
    {
        $numberQuotes = QuotesPage::count();
        $numberCity = CityPage::count();
        $numberFood = FoodPage::count();
        $numberAnimal = AnimalPage::count();

        return view('Frontend.Admin.dashboard_page_front', compact('numberQuotes', 'numberCity', 'numberFood', 'numberAnimal'));
    }
    //END Frontend Main Page

}
