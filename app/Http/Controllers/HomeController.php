<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("home.dashboard", [
            "title"=>"Dashboard",
            "brand"=>"WARB"
        ]);
    }

    public function profile()
    {
        return view("home.profile", [
            "title" => "Profile",
            "brand" => "WARB"
        ]);
    }


    public function table()
    {
        return view("home.table",[
            "title" => "Table",
            "brand" => "WARB"
        ]);
    }


    public function login ()
    {
        return view ("home.login", [
            "title" => "Log In",
            "brand" => "WARB"
        ]);
    }


    public function register()
    {
        return view("home.register", [
            "title" => "Register",
            "brand" => "WARB"
        ]);
    }
}
