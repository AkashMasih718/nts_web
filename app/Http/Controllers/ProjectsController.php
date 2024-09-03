<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function project(){
        return view('frontend.project.projects');
    }
    public function solor(){
        return view('frontend.project.soler_project');
    }

    public function rozgar(){
        return view('frontend.project.rozgar_project');
    }
    public function shop(){
        return view('frontend.project.shops_project');
    }
    public function ration(){
        return view('frontend.project.ration_project');
    }


}
