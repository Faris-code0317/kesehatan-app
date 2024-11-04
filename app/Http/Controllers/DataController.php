<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{

    public function datasiswa(){
        return view('admin.index');
    }
    public function datasiswi(){
        return view('admin.dtsiswi');
    }

    public function rekamsiswa(){
        return view('admin.rekammedis.frmrekamsiswa');
    }

    public function rekamsiswi(){
        return view('admin.rekammedis.frmrekamsiswi');
    }

    public function tambahpasien(){
        return view('admin.tambah.tambahpasien');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

}
