<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function home()
    {
        return view('pages.home');        
    }

    public function features()
    {
        return view('pages.features');        
    }
}
