@extends('landing.page.home')
@section('content')
    {{-- <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End --> --}}


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Data Rekam Medis Pelajar <br> Pondok Pesantren Al-Ittihad</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Rekam Medis</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="main-panel container">
        <div class="content-wrapper">
                <div>
                    <div class="btn-wrapper mb-3">
                        <a href="#" class="btn btn-success align-items-center"> <i class="fas fa-paper-plane"></i> Share</a>
                        <a href="#" class="btn btn-primary" onclick="window.print()"><i class="fas fa-print"></i> Print</a>
                    </div>
                </div>
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#rekammedissiswa" role="tab" aria-controls="rekammedissiswa" aria-selected="true">Rekam Medis Pasien Siswa</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#rekammedissiswi" role="tab" aria-selected="false">Rekam Medis Pasien Siswi</a>
                            </li>
                          </ul>
                        </div>
                        <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active mb-5" id="rekammedissiswa" role="tabpanel" aria-labelledby="rekammedissiswa">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                        <div class="card card-rounded p-3" style="overflow: auto">
                                            <div class="card-body">
                                                <p class="card-title mb-0">Data Rekam Medis Pasien Siswa</p>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead class="text-center bg-primary text-white">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Pasien</th>
                                                                <th>Kelas</th>
                                                                <th>Keluhan</th>
                                                                <th>Dokter</th>
                                                                <th>Tanggal Kunjungan</th>
                                                                <th>Obat Yang Diberikan</th>
                                                                <th>Option</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach($datapasiensiswa as $no=>$item)
                                                            <tr style="font-size: 14px">
                                                                <td>{{ $no+1 }}</td>
                                                                <td>{{ $item['nama_lengkap'] }}</td>
                                                                <td>{{ $item['kelas'] }}</td>
                                                                <td>{{ $item['keluhan'] }}</td>
                                                                <td>{{ $item['nama_dokter'] }}</td>
                                                                <td>{{ $item['tanggal_berobat'] }}</td>
                                                                <td>{{ $item['nama_obat'] }}</td>
                                                                <td class="d-flex">
                                                                    <a href="{{ route('datalengkap.siswa', $item['id']) }}" class="btn btn-outline-warning">Show</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="tab-pane fade mb-5" id="rekammedissiswi" role="tabpanel" aria-labelledby="rekammedissiswi">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-rounded p-3" style="overflow: auto">
                                                <div class="card-body">
                                                    <p class="card-title mb-0">Data Rekam Medis Pasien Siswi</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead class="text-center bg-primary text-white">
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Pasien</th>
                                                                    <th>Kelas</th>
                                                                    <th>Keluhan</th>
                                                                    <th>Dokter</th>
                                                                    <th>Tanggal Kunjungan</th>
                                                                    <th>Obat Yang Diberikan</th>
                                                                    <th>Option</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                @foreach($datapasiensiswi as $no=>$item)
                                                            <tr style="font-size:14px">
                                                                <td>{{ $no+1 }}</td>
                                                                <td>{{ $item['nama_lengkap'] }}</td>
                                                                <td>{{ $item['kelas'] }}</td>
                                                                <td>{{ $item['keluhan'] }}</td>
                                                                <td>{{ $item['nama_dokter'] }}</td>
                                                                <td>{{ $item['tanggal_berobat'] }}</td>
                                                                <td>{{ $item['nama_obat'] }}</td>
                                                                <td class="d-flex">
                                                                    <a href="{{ route('datalengkap.siswi', $item['id']) }}" class="btn btn-outline-warning">Show</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

                </div>
        <!-- content-wrapper ends -->
      </div>


@endsection
