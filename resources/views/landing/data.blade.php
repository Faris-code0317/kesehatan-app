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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Data Pelajar <br> Pondok Pesantren Al-Ittihad</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Siswa</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <div class="home-tab container">
        <h2>Data Siswa</h2>
        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#belumberobat" role="tab"
                        aria-controls="belumberobat" aria-selected="true">Pasien Belum Berobat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#sudahberobat" role="tab"
                        aria-selected="false">Pasien Sudah Berobat</a>
                </li>
            </ul>
        </div>
        <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active mb-5" id="belumberobat" role="tabpanel" aria-labelledby="belumberobat">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded p-3" style="overflow: auto">
                                    <div class="card-body">
                                        <p class="card-title mb-0">Data Pasien Siswa</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="text-center bg-primary text-white">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Kelas</th>
                                                        <th>Wali Kelas</th>
                                                        <th>Keluhan/Gejala</th>
                                                        <th>Status Pengobatan</th>
                                                        <th>Tanggal Sakit</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Abdul Muhith</td>
                                                        <td>XI A PPLG</td>
                                                        <td>Ust Nurhadi</td>
                                                        <td>Demam</td>
                                                        <td>Belum Berobat</td>
                                                        <td>10/11/2024</td>
                                                        <td class="d-flex">
                                                            <a href="" class="btn btn-primary mr-4">Pilih</a>
                                                        </td>
                                                    </tr>
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

            <div class="tab-pane fade mb-5" id="sudahberobat" role="tabpanel" aria-labelledby="sudahberobat">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded p-3" style="overflow: auto">
                                    <div class="card-body">
                                        <p class="card-title mb-0">Data Pasien Siswa</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="text-center bg-primary text-white">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Kelas</th>
                                                        <th>Wali Kelas</th>
                                                        <th>Keluhan/Gejala</th>
                                                        <th>Status Pengobatan</th>
                                                        <th>Tanggal Sakit</th>
                                                        <th>Tanggal Berobat</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    {{-- @foreach ($datapasiensiswa as $no => $item)
                                        <tr>
                                            <td>{{ $no+1 }}</td>
                                            <td>{{ $item['nama_lengkap'] }}</td>
                                            <td>{{ $item['kelas'] }}</td>
                                            <td>{{ $item['wali_kelas'] }}</td>
                                            <td>{{ $item['keluhan'] }}</td>
                                            <td>{{ $item['status_pengobatan'] }}</td>
                                            <td>{{ $item['tanggal_sakit'] }}</td>
                                            <td>{{ $item['tanggal_berobat'] }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('profile.pasien', $item['id']) }}" class="btn btn-outline-success">Show</a>
                                                <a href="#" class="btn btn-outline-warning" style="margin-left: 2px">Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach --}}
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

    <div class="home-tab container">
        <h2>Data Siswi</h2>
        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#belumberobat" role="tab"
                        aria-controls="belumberobat" aria-selected="true">Pasien Belum Berobat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#sudahberobat" role="tab"
                        aria-selected="false">Pasien Sudah Berobat</a>
                </li>
            </ul>
        </div>
        <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active mb-5" id="belumberobat" role="tabpanel" aria-labelledby="belumberobat">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded p-3" style="overflow: auto">
                                    <div class="card-body">
                                        <p class="card-title mb-0">Data Pasien Siswi</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="text-center bg-primary text-white">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Kelas</th>
                                                        <th>Wali Kelas</th>
                                                        <th>Keluhan/Gejala</th>
                                                        <th>Status Pengobatan</th>
                                                        <th>Tanggal Sakit</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Abdul Muhith</td>
                                                        <td>XI A PPLG</td>
                                                        <td>Ust Nurhadi</td>
                                                        <td>Demam</td>
                                                        <td>Belum Berobat</td>
                                                        <td>10/11/2024</td>
                                                        <td class="d-flex">
                                                            <a href="" class="btn btn-primary mr-4">Pilih</a>
                                                        </td>
                                                    </tr>
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

            <div class="tab-pane fade mb-5" id="sudahberobat" role="tabpanel" aria-labelledby="sudahberobat">
                <div class="row">
                    <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded p-3" style="overflow: auto">
                                    <div class="card-body">
                                        <p class="card-title mb-0">Data Pasien Siswa</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead class="text-center bg-primary text-white">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Kelas</th>
                                                        <th>Wali Kelas</th>
                                                        <th>Keluhan/Gejala</th>
                                                        <th>Status Pengobatan</th>
                                                        <th>Tanggal Sakit</th>
                                                        <th>Tanggal Berobat</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    {{-- @foreach ($datapasiensiswa as $no => $item)
                                        <tr>
                                            <td>{{ $no+1 }}</td>
                                            <td>{{ $item['nama_lengkap'] }}</td>
                                            <td>{{ $item['kelas'] }}</td>
                                            <td>{{ $item['wali_kelas'] }}</td>
                                            <td>{{ $item['keluhan'] }}</td>
                                            <td>{{ $item['status_pengobatan'] }}</td>
                                            <td>{{ $item['tanggal_sakit'] }}</td>
                                            <td>{{ $item['tanggal_berobat'] }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('profile.pasien', $item['id']) }}" class="btn btn-outline-success">Show</a>
                                                <a href="#" class="btn btn-outline-warning" style="margin-left: 2px">Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach --}}
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
@endsection
