<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\datasakitsiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class datasakitsiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswasakit = datasakitsiswa::orderBy('nama_lengkap', 'desc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data Di Temukan',
            'datasiswasakit' => $siswasakit,
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
        $siswasakit = new datasakitsiswa;
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
                'datasiswasakit'=> $validator->errors()
            ]);
        }

        $siswasakit->nama_lengkap = $request->nama_lengkap;
        $siswasakit->kelas = $request->kelas;
        $siswasakit->wali_kelas = $request->wali_kelas;
        $siswasakit->keluhan = $request->keluhan;
        $siswasakit->status_pengobatan = $request->status_pengobatan;
        $siswasakit->tanggal_sakit = $request->tanggal_sakit;

        $siswasakit->save();

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
        $siswasakit = datasakitsiswa::find($id);
        if ($siswasakit) {
            return response()->json([
                'status'=> true,
                'message'=> 'Data Di Temukan',
                'datasiswasakit'=> $siswasakit,
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
        $siswasakit = datasakitsiswa::find($id);
        if(empty($siswasakit)){
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
                'datasiswasakit'=> $validator->errors()
            ]);
        }

        $siswasakit->nama_lengkap = $request->nama_lengkap;
        $siswasakit->kelas = $request->kelas;
        $siswasakit->wali_kelas = $request->wali_kelas;
        $siswasakit->keluhan = $request->keluhan;
        $siswasakit->status_pengobatan = $request->status_pengobatan;
        $siswasakit->tanggal_sakit = $request->tanggal_sakit;

        $siswasakit->save();

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
        $siswasakit = datasakitsiswa::find($id);
        if(empty($siswasakit)){
            return response()->json([
                'status'=> false,
                'message'=> 'Data Tidak Di Temukan'
            ],404);
        }

        $siswasakit->delete();

        return response()->json([
            'status'=> true,
            'message'=> 'Berhasil Melakukan delete Data',
        ]);
    }
}
