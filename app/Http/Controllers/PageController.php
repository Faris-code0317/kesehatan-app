<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing(){
        return view('landing.landing');
    }

    public function data(){
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

        $clientsiswasakit = new Client();
        $urlsiswasakit = "http://127.0.0.1:8000/api/datasakitsiswa";
        $responsesiswasakit = $clientsiswasakit->request('GET', $urlsiswasakit);
        $contentsiswasakit = $responsesiswasakit->getBody()->getContents();
        $contentArraysiswasakit = json_decode($contentsiswasakit, true);
        $datasiswasakit = $contentArraysiswasakit['datasiswasakit'];

        $clientsiswi = new Client();
        $urlsiswi = "http://127.0.0.1:8000/api/datasakitsiswi";
        $responsesiswi = $clientsiswi->request('GET', $urlsiswi);
        $contentsiswi = $responsesiswi->getBody()->getContents();
        $contentArraysiswi = json_decode($contentsiswi, true);
        $datasiswisakit = $contentArraysiswi['datasiswisakit'];
        return view('landing.data', ['datapasiensiswa'=> $datapasiensiswa, 'datasiswasakit' => $datasiswasakit, 'datapasiensiswi'=>$datapasiensiswi, 'datasiswisakit'=>$datasiswisakit]);
    }

    public function about(){
        return view('landing.about');
    }

    public function login(){
        return view('login');
    }

    public function dev(){
        return view('landing.pengembang');
    }

    public function rekammedis(){
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
        return view('landing.rekammedis', ['datapasiensiswa'=>$datapasiensiswa, 'datapasiensiswi'=>$datapasiensiswi]);
    }

    public function datalengkapsiswa(string $id){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswa/$id";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $datapasiensiswa = $contentArray['datapasiensiswa'];
        return view('landing.datalengkapsiswa', ['datapasiensiswa'=>$datapasiensiswa]);
    }

    public function datalengkapsiswi(string $id){
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/berobatpasiensiswi/$id";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $datapasiensiswi = $contentArray['datapasiensiswi'];
        return view('landing.datalengkapsiswi', ['datapasiensiswi'=>$datapasiensiswi]);
    }
}
