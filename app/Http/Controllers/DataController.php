<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //tambahkan method get lagi untuk mengambil data pasien yang belum berobat
    public function datasiswa(){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswa";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $datapasiensiswa = $contentArray['datapasiensiswa'];

        $clientsiswasakit = new Client();
        $urlsiswasakit = "http://127.0.0.1:8000/api/datasakitsiswa";
        $responsesiswasakit = $clientsiswasakit->request('GET', $urlsiswasakit);
        $contentsiswasakit = $responsesiswasakit->getBody()->getContents();
        $contentArraysiswasakit = json_decode($contentsiswasakit, true);
        $datasiswasakit = $contentArraysiswasakit['datasiswasakit'];
        return view('admin.index', ['datapasiensiswa'=> $datapasiensiswa, 'datasiswasakit' => $datasiswasakit]);
    }
    //tambahkan method get lagi untuk mengambil data pasien yang belum berobat
    public function datasiswi(){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswi";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $datapasiensiswi = $contentArray['datapasiensiswi'];

        $clientsiswisakit = new Client();
        $urlsiswisakit = "http://127.0.0.1:8000/api/datasakitsiswi";
        $responsesiswisakit = $clientsiswisakit->request('GET', $urlsiswisakit);
        $contentsiswisakit = $responsesiswisakit->getBody()->getContents();
        $contentArraysiswisakit = json_decode($contentsiswisakit, true);
        $datasiswisakit = $contentArraysiswisakit['datasiswisakit'];
        return view('admin.dtsiswi', ['datapasiensiswi'=> $datapasiensiswi, 'datasiswisakit' => $datasiswisakit]);

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

    public function datarekammedis(){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswa";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $datapasiensiswa = $contentArray['datapasiensiswa'];

        $clientsiswi = new Client();
        $urlsiswi = "http://127.0.0.1:8000/api/berobatpasiensiswi";
        $responsesiswi = $clientsiswi->request('GET', $urlsiswi);
        $contentsiswi = $responsesiswi->getBody()->getContents();
        $contentArraysiswi = json_decode($contentsiswi, true);
        $datapasiensiswi = $contentArraysiswi['datapasiensiswi'];
        return view('admin.rekammedis.data', ['datapasiensiswa'=> $datapasiensiswa, 'datapasiensiswi'=>$datapasiensiswi]);
    }

}
