<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function datasiswasmp(){
        return view('admin.dtsiswasmp');
    }

    public function datasiswismak(){
        return view('admin.dtsiswismak');
    }

    public function datasiswismp(){
        return view('admin.dtsiswismp');
    }
}
