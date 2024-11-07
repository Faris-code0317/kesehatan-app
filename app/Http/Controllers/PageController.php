<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing(){
        return view('landing.landing');
    }

    public function siswa(){
        return view('landing.siswa');
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
