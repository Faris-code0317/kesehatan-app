<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class pasiensiswacontroller extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswa";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $datapasiensiswa = $contentArray['datapasiensiswa'];
        return view('admin.index', ['datapasiensiswa'=> $datapasiensiswa]);
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
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswa";
        $response = $client->request('POST', $url, [
            'headers' => ['content-type' => 'application/json'],
            'body' => json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        if ($contentArray['status'] != true) {
            $error = $contentArray['datapasiensiswa'];
            return redirect()->to('admin/kordinator/tambahpasien')->withErrors($error)->withInput();
        }else{
            return redirect()->to('admin/kordinator/siswa')->with('success','Berhasil Menambahkan Data');
        }


    }

    public function profilepasien(string $id){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswa/$id";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        if ($contentArray['status'] != true) {
            $error = $contentArray['message'];
            return redirect()->to('admin/kordinator/siswa')->withErrors($error);
        } else {
            $datapasiensiswa = $contentArray['datapasiensiswa'];
            return view('admin.profile.profilesakitsiswa', ['datapasiensiswa' => $datapasiensiswa]);
    }

    }

    public function edit(string $id){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswa/$id";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);

        if ($contentArray['status'] != true) {
            $error = $contentArray['message'];
            return redirect()->to('admin/kordinator/siswa')->withErrors($error);
        } else {
            $datapasiensiswa = $contentArray['datapasiensiswa'];
            return view('admin.edit.pasiensiswa', ['datapasiensiswa' => $datapasiensiswa]);
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
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswa/$id";
        $response = $client->request('PUT', $url, [
            'headers' => ['content-type' => 'application/json'],
            'body' => json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        if ($contentArray['status'] != true) {
            $error = $contentArray['datapasiensiswa'];
            return redirect()->to('admin/kordinator/editpasien/{id}')->withErrors($error)->withInput();
        }else{
            $datapasiensiswa = $contentArray['datapasiensiswa'] ?? []; // Ambil data siswa
            return redirect()->to('admin/kordinator/siswa'); // Kirim data ke view
        }

    }

}
