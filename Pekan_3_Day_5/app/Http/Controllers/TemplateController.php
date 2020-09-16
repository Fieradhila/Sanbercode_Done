<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //Template

    public function template(){
        return view('template');
    }
    public function forum(){
        return view('forum');
    }
    public function profiles(){
        return view('profiles');
    }
}
