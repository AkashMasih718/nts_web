<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchemeController extends Controller
{
    public function schemes(){
        return view('frontend.scheme.scheme');
    }
    public function food(){
        return view('frontend.scheme.food-help');
    }
}
