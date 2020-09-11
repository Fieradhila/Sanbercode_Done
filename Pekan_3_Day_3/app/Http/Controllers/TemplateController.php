<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //Template

    public function template(){
        return view('template');
    }
    public function data_tables(){
        return view('data-tables');
    }
}
