<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    //
    public function about()
    {
        return view('about');
    }

    //
    public function contact()
    {
        return view('contact');
    }
    //
    public function gallery()
    {
        return view('gallery');
    }
    //
    public function team()
    {
        return view('team');
    }


    public function careers()
    {
        return view('careers');
    }

    public function get_videos()
    {

        return view('home.case');
    }
}
