<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\datasakitsiswi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class datasakitsiswicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswisakit = datasakitsiswi::orderBy('nama_lengkap', 'desc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data Di Temukan',
            'datasiswisakit' => $siswisakit,
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $siswisakit = new datasakitsiswi;
        $rules = [
            'nama_lengkap'=> 'required',
            'kelas'=> 'required',
            'wali_kelas'=> 'required',
            'keluhan'=> 'required',
            'status_pengobatan'=> 'required',
            'tanggal_sakit'=>'required|date',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return response()->json([
                'status'=> false,
                'message'=> 'Gagal Menambahkan Data',
                'datasiswisakit'=> $validator->errors()
            ]);
        }

        $siswisakit->nama_lengkap = $request->nama_lengkap;
        $siswisakit->kelas = $request->kelas;
        $siswisakit->wali_kelas = $request->wali_kelas;
        $siswisakit->keluhan = $request->keluhan;
        $siswisakit->status_pengobatan = $request->status_pengobatan;
        $siswisakit->tanggal_sakit = $request->tanggal_sakit;

        $siswisakit->save();

        return response()->json([
            'status'=> true,
            'message'=> 'Berhasil Memasukan Data',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswisakit = datasakitsiswi::find($id);
        if ($siswisakit) {
            return response()->json([
                'status'=> true,
                'message'=> 'Data Di Temukan',
                'datasiswisakit'=> $siswisakit,
                ],200);
        }else{
            return response()->json([
                'status'=> false,
                'message'=> 'Data Tidak Di Temukan',
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $siswisakit = datasakitsiswi::find($id);
        if(empty($siswisakit)){
            return response()->json([
                'status'=> false,
                'message'=> 'Data Tidak Di Temukan'
            ],404);
        }
        $rules = [
            'nama_lengkap'=> 'required',
            'kelas'=> 'required',
            'wali_kelas'=> 'required',
            'keluhan'=> 'required',
            'status_pengobatan'=> 'required',
            'tanggal_sakit'=>'required|date',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return response()->json([
                'status'=> false,
                'message'=> 'Gagal Mengupdate Data',
                'datasiswisakit'=> $validator->errors()
            ]);
        }

        $siswisakit->nama_lengkap = $request->nama_lengkap;
        $siswisakit->kelas = $request->kelas;
        $siswisakit->wali_kelas = $request->wali_kelas;
        $siswisakit->keluhan = $request->keluhan;
        $siswisakit->status_pengobatan = $request->status_pengobatan;
        $siswisakit->tanggal_sakit = $request->tanggal_sakit;

        $siswisakit->save();

        return response()->json([
            'status'=> true,
            'message'=> 'Berhasil Mengupdate Data',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswisakit = datasakitsiswi::find($id);
        if(empty($siswisakit)){
            return response()->json([
                'status'=> false,
                'message'=> 'Data Tidak Di Temukan'
            ],404);
        }

        $siswisakit->delete();

        return response()->json([
            'status'=> true,
            'message'=> 'Berhasil Melakukan delete Data',
        ]);
    }
}
