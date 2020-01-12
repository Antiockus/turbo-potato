<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class standardPageController extends Controller
{
    //

    /*
        Handle About page request
    */
    public function about()
    {
        return view('about');
    }

    /*
        Handle Contact Us page
    */
    public function contact()
    {
        return view('contact');
    }

    /**
     * handle index request
     */

    public function index()
    {
        return view('welcome');
    }
}
