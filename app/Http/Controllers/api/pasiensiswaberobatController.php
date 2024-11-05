<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\berobatsiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class pasiensiswaberobatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasiensiswa = berobatsiswa::orderBy('nama_lengkap', 'desc')->get();
        return response()->json([
            'status' => true,
            'message' => 'Data Di Temukan',
            'datapasiensiswa' => $pasiensiswa,
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pasiensiswa = new berobatsiswa;
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
                'datapasiensiswa'=> $validator->errors()
            ]);
        }

        $pasiensiswa->nama_lengkap = $request->nama_lengkap;
        $pasiensiswa->kelas = $request->kelas;
        $pasiensiswa->wali_kelas = $request->wali_kelas;
        $pasiensiswa->keluhan = $request->keluhan;
        $pasiensiswa->status_pengobatan = $request->status_pengobatan;
        $pasiensiswa->nama_dokter = $request->nama_dokter;
        $pasiensiswa->tanggal_sakit = $request->tanggal_sakit;
        $pasiensiswa->tanggal_berobat = $request->tanggal_berobat;
        $pasiensiswa->jumlah_kunjungan = $request->jumlah_kunjungan;
        $pasiensiswa->nama_obat = $request->nama_obat;
        $pasiensiswa->catatan_dokter = $request->catatan_dokter;


        $pasiensiswa->save();

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
        $pasiensiswa = berobatsiswa::find($id);
        if ($pasiensiswa) {
            return response()->json([
                'status'=> true,
                'message'=> 'Data Di Temukan',
                'datapasiensiswa'=> $pasiensiswa,
                ],200);
        }else{
            return response()->json([
                'status'=> false,
                'message'=> 'Data Tidak Di Temukan',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pasiensiswa = berobatsiswa::find($id);
        if(empty($pasiensiswa)){
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
                'datapasiensiswa'=> $validator->errors()
            ]);
        }

        $pasiensiswa->nama_lengkap = $request->nama_lengkap;
        $pasiensiswa->kelas = $request->kelas;
        $pasiensiswa->wali_kelas = $request->wali_kelas;
        $pasiensiswa->keluhan = $request->keluhan;
        $pasiensiswa->status_pengobatan = $request->status_pengobatan;
        $pasiensiswa->nama_dokter = $request->nama_dokter;
        $pasiensiswa->tanggal_sakit = $request->tanggal_sakit;
        $pasiensiswa->tanggal_berobat = $request->tanggal_berobat;
        $pasiensiswa->jumlah_kunjungan = $request->jumlah_kunjungan;
        $pasiensiswa->nama_obat = $request->nama_obat;
        $pasiensiswa->catatan_dokter = $request->catatan_dokter;

        $pasiensiswa->save();

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
        $pasiensiswa = berobatsiswa::find($id);
        if(empty($pasiensiswa)){
            return response()->json([
                'status'=> false,
                'message'=> 'Data Tidak Di Temukan'
            ],404);
        }

        $pasiensiswa->delete();

        return response()->json([
            'status'=> true,
            'message'=> 'Berhasil Melakukan delete Data',
        ]);
    }
}
