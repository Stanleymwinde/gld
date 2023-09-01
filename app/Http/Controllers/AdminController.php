<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AdminController extends Controller
{
    public function kenbras()
    {
        return view('admin.index');
    }
    public function signin()
    {
        return view('admin.signin');
    }
    public function forms()
    {
        return view('admin.form');
    }
    public function tables()
    {
        return view('admin.table');
    }
    public function dashboard()
    {
        $data = array();
        if (Session::has('LoggedUser')) {
            $data = User::where('email', '=', Session::get('LoggedUser'))->first();
        }

        return view('admin.index', compact('data'));
    }
}
