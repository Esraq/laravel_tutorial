<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {

       //// echo "testing";
        return view('home');
    }

    public function about(){


        return view('about');
    }
    public function contact(){


        return view('contact');
    }
}
