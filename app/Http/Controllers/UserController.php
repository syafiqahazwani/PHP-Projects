<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //START Backend User Page
    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function UserDashboard()
    {
        $userData = User::all();

        return view('Backend_Studio.User_Page.dashboard_page', compact('userData'));
    }

    public function UserProfile()
    {
        $id = Auth::user()->id;
        $userData = User::find($id);

        return view('Backend_Studio.User_Page.profile_page', compact('userData'));
    }
}
