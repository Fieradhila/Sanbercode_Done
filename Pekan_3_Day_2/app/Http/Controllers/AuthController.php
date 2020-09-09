<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Route Register dan Welcome
    public function register(){
        return view('register');
    }

    public function masuk(Request $request){
        $firstName = $request["firstName"];
        $lastName = $request["lastName"];
        return view('masuk')
            ->with('firstName', $firstName)
            ->with('lastName', $lastName);
    }
}
