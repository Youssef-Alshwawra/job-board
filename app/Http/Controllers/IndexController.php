<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //

    public function index() { 
        return view('home')
                    ->with('pageTitle', "Home page");
    }

    public function about() { 
        return view('about')
                    ->with("pageTitle", "About page");
    }

    public function contact() { 
        return view('contact')
                    ->with("pageTitle", "Contact page");
    }
}
