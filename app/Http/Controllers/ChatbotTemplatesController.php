<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotTemplatesController extends Controller
{
    public function templates()
    {
        return view('pages.templates.index');        
    }
}
