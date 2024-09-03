<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchemeController extends Controller
{
    public function schemes(){
        return view('frontend.scheme.scheme');
    }
}
