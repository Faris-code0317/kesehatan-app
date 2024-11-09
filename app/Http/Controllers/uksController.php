<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uksController extends Controller
{
    function index(){
        return view('uks.uks');
    }

    function tambahpasien(){
        return view('uks.formpasien');
    }
}
