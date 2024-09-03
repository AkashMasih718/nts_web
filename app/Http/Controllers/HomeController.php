<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function complex(){
        return view('frontend.about_complex');
    }
    public function contact(){
        return view('frontend.contact_us');
    }
    public function test_view(){
        return view('frontend.mail.contact_mail');
    }
    public function about(){
        return view('frontend.about_us');
    }
}
