<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function project(){
        return view('frontend.projects');
    }
    public function solor(){
        return view('frontend.soler_project');
    }
   
    public function rozgar(){
        return view('frontend.rozgar_project');
    }

}
