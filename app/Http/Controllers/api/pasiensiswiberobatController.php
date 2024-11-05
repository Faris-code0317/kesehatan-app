<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\berobatsiswi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class pasiensiswiberobatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasiensiswi = berobatsiswi::orderBy('nama_lengkap', 'desc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data Di Temukan',
            'datapasiensiswi' => $pasiensiswi,
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
        $pasiensiswi = new berobatsiswi;
        $rules = [
            'nama_lengkap'=> 'required',
            'kelas'=> 'required',
            'wali_kelas'=> 'required',
            'keluhan'=> 'required',
            'status_pengobatan'=> 'required',
            'nama_dokter'=> 'required',
            'tanggal_sakit'=>'required|date',
            'tanggal_berobat'=>'required|date',
            'jumlah_kunjungan'=>'required',
            'nama_obat'=> 'required',
            'catatan_dokter'=> 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return response()->json([
                'status'=> false,
                'message'=> 'Gagal Menambahkan Data',
                'datapasiensiswi'=> $validator->errors()
            ]);
        }

        $pasiensiswi->nama_lengkap = $request->nama_lengkap;
        $pasiensiswi->kelas = $request->kelas;
        $pasiensiswi->wali_kelas = $request->wali_kelas;
        $pasiensiswi->keluhan = $request->keluhan;
        $pasiensiswi->status_pengobatan = $request->status_pengobatan;
        $pasiensiswi->nama_dokter = $request->nama_dokter;
        $pasiensiswi->tanggal_sakit = $request->tanggal_sakit;
        $pasiensiswi->tanggal_berobat = $request->tanggal_berobat;
        $pasiensiswi->jumlah_kunjungan = $request->jumlah_kunjungan;
        $pasiensiswi->nama_obat = $request->nama_obat;
        $pasiensiswi->catatan_dokter = $request->catatan_dokter;


        $pasiensiswi->save();

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
        $pasiensiswi = berobatsiswi::find($id);
        if ($pasiensiswi) {
            return response()->json([
                'status'=> true,
                'message'=> 'Data Di Temukan',
                'datapasiensiswi'=> $pasiensiswi,
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
        $pasiensiswi = berobatsiswi::find($id);
        if(empty($pasiensiswi)){
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
            'nama_dokter'=> 'required',
            'tanggal_sakit'=>'required|date',
            'tanggal_berobat'=>'required|date',
            'jumlah_kunjungan'=>'required',
            'nama_obat'=> 'required',
            'catatan_dokter'=> 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return response()->json([
                'status'=> false,
                'message'=> 'Gagal Mengupdate Data',
                'datapasiensiswi'=> $validator->errors()
            ]);
        }

        $pasiensiswi->nama_lengkap = $request->nama_lengkap;
        $pasiensiswi->kelas = $request->kelas;
        $pasiensiswi->wali_kelas = $request->wali_kelas;
        $pasiensiswi->keluhan = $request->keluhan;
        $pasiensiswi->status_pengobatan = $request->status_pengobatan;
        $pasiensiswi->nama_dokter = $request->nama_dokter;
        $pasiensiswi->tanggal_sakit = $request->tanggal_sakit;
        $pasiensiswi->tanggal_berobat = $request->tanggal_berobat;
        $pasiensiswi->jumlah_kunjungan = $request->jumlah_kunjungan;
        $pasiensiswi->nama_obat = $request->nama_obat;
        $pasiensiswi->catatan_dokter = $request->catatan_dokter;

        $pasiensiswi->save();

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
        $pasiensiswi = berobatsiswi::find($id);
        if(empty($pasiensiswi)){
            return response()->json([
                'status'=> false,
                'message'=> 'Data Tidak Di Temukan'
            ],404);
        }

        $pasiensiswi->delete();

        return response()->json([
            'status'=> true,
            'message'=> 'Berhasil Melakukan delete Data',
        ]);
    }
}
