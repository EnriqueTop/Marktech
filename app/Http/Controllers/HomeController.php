<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page...";
        $viewData["author"] = "Developed by: Rajesh Budhathoki";

        return view('home.about')->with("viewData", $viewData);
    }
}
