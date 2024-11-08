<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class pasiensiswicontroller extends Controller
{
    public function index(){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswi";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $datapasiensiswi = $contentArray['datapasiensiswi'];
        return view('admin.dtsiswi', ['datapasiensiswi'=> $datapasiensiswi]);
    }

    public function store(Request $request)
    {
        $nama_lengkap = $request->nama_lengkap;
        $kelas = $request->kelas;
        $wali_kelas = $request->wali_kelas;
        $keluhan = $request->keluhan;
        $status_pengobatan = $request->status_pengobatan;
        $nama_dokter = $request->nama_dokter;
        $tanggal_sakit = $request->tanggal_sakit;
        $tanggal_berobat = $request->tanggal_berobat;
        $jumlah_kunjungan = $request->jumlah_kunjungan;
        $nama_obat = $request->nama_obat;
        $catatan_dokter = $request->catatan_dokter;


        $parameter = [
            'nama_lengkap'=> $nama_lengkap,
            'kelas'=> $kelas,
            'wali_kelas'=>$wali_kelas,
            'keluhan'=> $keluhan,
            'status_pengobatan'=>  $status_pengobatan,
            'nama_dokter'=> $nama_dokter,
            'tanggal_sakit'=>$tanggal_sakit,
            'tanggal_berobat'=>$tanggal_berobat,
            'jumlah_kunjungan'=>$jumlah_kunjungan,
            'nama_obat'=> $nama_obat,
            'catatan_dokter'=> $catatan_dokter,
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswi";
        $response = $client->request('POST', $url, [
            'headers' => ['content-type' => 'application/json'],
            'body' => json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        if ($contentArray['status'] != true) {
            $error = $contentArray['datapasiensiswi'];
            return redirect()->to('admin/kordinator/tambahpasien')->withErrors($error)->withInput();
        }else{
            return redirect()->to('admin/kordinator/siswi')->with('success','Berhasil Menambahkan Data');
        }


    }

    public function profilepasien(string $id){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswi/$id";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        if ($contentArray['status'] != true) {
            $error = $contentArray['message'];
            return redirect()->to('admin/kordinator/siswi')->withErrors($error);
        } else {
            $datapasiensiswi = $contentArray['datapasiensiswi'];
            return view('admin.profile.profilesakitsiswi', ['datapasiensiswi' => $datapasiensiswi]);
    }

    }

    public function edit(string $id){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswi/$id";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        if ($contentArray['status'] != true) {
            $error = $contentArray['message'];
            return redirect()->to('admin/kordinator/siswi')->withErrors($error);
        } else {
            $datapasiensiswi = $contentArray['datapasiensiswi'];
            return view('admin.edit.pasiensiswi', ['datapasiensiswi' => $datapasiensiswi]);
    }
    }

    public function update(Request $request, $id)
    {
        $nama_lengkap = $request->nama_lengkap;
        $kelas = $request->kelas;
        $wali_kelas = $request->wali_kelas;
        $keluhan = $request->keluhan;
        $status_pengobatan = $request->status_pengobatan;
        $nama_dokter = $request->nama_dokter;
        $tanggal_sakit = $request->tanggal_sakit;
        $tanggal_berobat = $request->tanggal_berobat;
        $jumlah_kunjungan = $request->jumlah_kunjungan;
        $nama_obat = $request->nama_obat;
        $catatan_dokter = $request->catatan_dokter;
        $parameter = [
           'nama_lengkap'=> $nama_lengkap,
            'kelas'=> $kelas,
            'wali_kelas'=>$wali_kelas,
            'keluhan'=> $keluhan,
            'status_pengobatan'=>  $status_pengobatan,
            'nama_dokter'=> $nama_dokter,
            'tanggal_sakit'=>$tanggal_sakit,
            'tanggal_berobat'=>$tanggal_berobat,
            'jumlah_kunjungan'=>$jumlah_kunjungan,
            'nama_obat'=> $nama_obat,
            'catatan_dokter'=> $catatan_dokter,
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswi/$id";
        $response = $client->request('PUT', $url, [
            'headers' => ['content-type' => 'application/json'],
            'body' => json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        if ($contentArray['status'] != true) {
            $error = $contentArray['datapasiensiswi'];
            return redirect()->to('admin/kordinator/editpasiensiswi/{id}')->withErrors($error)->withInput();
        }else{
            $datapasiensiswi = $contentArray['datapasiensiswa'] ?? []; // Ambil data siswa
            return redirect()->to('admin/kordinator/siswi'); // Kirim data ke view
        }

    }
}
