<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()){
            return redirect(route('dashboard'));
        }
        return view ("auth.login");
    }

    public function register()
    {
        if (Auth::check()){
            return redirect(route('dashboard'));
        }
        return view ("auth.register");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12' 
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return back()->with('fail','Something wrong');
        }else{
            return back()->with('success','You haved registered successfuly');
        }

    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $credentials = $request->only('name', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    public function logout()
    {
        if (session::has('loginId')) {
        session::pull('loginId');
        return redirect('login');
    }
        
    }
}