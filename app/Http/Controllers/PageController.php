<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing(){
        return view('landing.landing');
    }

    public function data(){
        return view('landing.data');
    }

    public function about(){
        return view('landing.about');
    }

    public function login(){
        return view('login');
    }

    public function dev(){
        return view('landing.pengembang');
    }
}
