<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;


class AuthController extends Controller
{
    public function login()
    {
        return view('admin.signin');
    }

    public function register()
    {
        return view('admin.signup');
    }



    public function registerUser(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->status = false;
        $user->save();

        if ($user) {
            return redirect('/login')->with('success', 'New User has been created successfully');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:6'
        ]);

        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if ($user->status) { // check if user's status is true
                $request->session()->put('LoggedUser', $request->username);
                return redirect('/dashboard')->with('success', 'You have successfully logged in');
            } else {
                auth()->logout();
                return back()->with('fail', 'Your account has been disabled. Please contact the Administrator for further assistance.');
            }
        } else {
            return back()->with('fail', 'Incorrect credentials');
        }
    }



    public function dashboard()
    {
        $data = array();
        if (Session::has('LoggedUser')) {
            $data = User::where('email', '=', Session::get('LoggedUser'))->first();
        }

        return view('Admin.index', compact('data'));
    }


    public function logOut()
    {
        if (Session::has('LoggedUser')) {
            Session::pull('LoggedUser');
            return  redirect('/login');
        }
    }
}
