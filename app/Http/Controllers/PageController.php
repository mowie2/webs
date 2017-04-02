<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomepage()
    {
        return view('homepage');
    }
    public function getAboutpage()
    {
        return view('aboutpage');
    }
}
