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
        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#siswa"
                        role="tab" aria-controls="siswa" aria-selected="true">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#siswi"
                        role="tab" aria-selected="false">Siswi</a>
                </li>
            </ul>
        </div>
        <div class="tab-content tab-content-basic">

            <div class="tab-pane fade show active mb-5" id="siswa" role="tabpanel"
                aria-labelledby="siswa">
                <h2 class="bg-primary p-3 rounded">Data Siswa</h2>
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#siswabelumberobat"
                                    role="tab" aria-controls="siswabelumberobat" aria-selected="true">Pasien Belum Berobat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#siswasudahberobat"
                                    role="tab" aria-selected="false">Pasien Sudah Berobat</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active mb-5" id="siswabelumberobat" role="tabpanel"
                            aria-labelledby="siswabelumberobat">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-rounded p-3" style="overflow: auto">
                                                <div class="card-body">
                                                    <p class="card-title mb-0">Data Pasien Siswa</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead class="text-center table-primary">
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Lengkap</th>
                                                                    <th>Kelas</th>
                                                                    <th>Wali Kelas</th>
                                                                    <th>Keluhan/Gejala</th>
                                                                    <th>Status Pengobatan</th>
                                                                    <th>Tanggal Sakit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Alfan Wira Birrin</td>
                                                                    <td>XI A PPLG</td>
                                                                    <td>Ust Nur Hadi Lubis</td>
                                                                    <td>Diare</td>
                                                                    <td>Belum Berobat</td>
                                                                    <td>10/11/2024</td>
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

                        <div class="tab-pane fade mb-5" id="siswasudahberobat" role="tabpanel" aria-labelledby="siswasudahberobat">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-rounded p-3" style="overflow: auto">
                                                <div class="card-body">
                                                    <p class="card-title mb-0">Data Pasien Siswa</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead class="text-center table-primary">
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Lengkap</th>
                                                                    <th>Kelas</th>
                                                                    <th>Wali Kelas</th>
                                                                    <th>Keluhan/Gejala</th>
                                                                    <th>Status Pengobatan</th>
                                                                    <th>Tanggal Sakit</th>
                                                                    <th>Tanggal Berobat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                {{-- @foreach ($datapasiensiswi as $no => $item)
                                                                    <tr>
                                                                        <td>{{ $no + 1 }}</td>
                                                                        <td>{{ $item['nama_lengkap'] }}</td>
                                                                        <td>{{ $item['kelas'] }}</td>
                                                                        <td>{{ $item['wali_kelas'] }}</td>
                                                                        <td>{{ $item['keluhan'] }}</td>
                                                                        <td>{{ $item['status_pengobatan'] }}</td>
                                                                        <td>{{ $item['tanggal_sakit'] }}</td>
                                                                        <td>{{ $item['tanggal_berobat'] }}</td>
                                                                        <td class="d-flex">
                                                                            <a href="{{ route('profile.pasiensiswi', $item['id']) }}"
                                                                                class="btn btn-outline-success">Show</a>
                                                                            <a href="{{ route('edit.pasiensiswi', $item['id']) }}"
                                                                                class="btn btn-outline-warning">Edit</a>
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
            </div>

            <div class="tab-pane fade mb-5" id="siswi" role="tabpanel" aria-labelledby="siswi">
                <h2 class="bg-primary p-3 rounded">Data Siswi</h2>
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#siswibelumberobat"
                                    role="tab" aria-controls="siswibelumberobat" aria-selected="true">Pasien Belum Berobat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#siswisudahberobat"
                                    role="tab" aria-selected="false">Pasien Sudah Berobat</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active mb-5" id="siswibelumberobat" role="tabpanel"
                            aria-labelledby="siswibelumberobat">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-rounded p-3" style="overflow: auto">
                                                <div class="card-body">
                                                    <p class="card-title mb-0">Data Pasien Siswi</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead class="text-center table-primary">
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Lengkap</th>
                                                                    <th>Kelas</th>
                                                                    <th>Wali Kelas</th>
                                                                    <th>Keluhan/Gejala</th>
                                                                    <th>Status Pengobatan</th>
                                                                    <th>Tanggal Sakit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Dera Rizkia</td>
                                                                    <td>XI A PPLG</td>
                                                                    <td>Ustzh Nur</td>
                                                                    <td>Diare</td>
                                                                    <td>Belum Berobat</td>
                                                                    <td>10/11/2024</td>
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

                        <div class="tab-pane fade mb-5" id="siswisudahberobat" role="tabpanel" aria-labelledby="siswisudahberobat">
                            <div class="row">
                                <div class="col-lg-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-rounded p-3" style="overflow: auto">
                                                <div class="card-body">
                                                    <p class="card-title mb-0">Data Pasien Siswi</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead class="text-center table-primary">
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Lengkap</th>
                                                                    <th>Kelas</th>
                                                                    <th>Wali Kelas</th>
                                                                    <th>Keluhan/Gejala</th>
                                                                    <th>Status Pengobatan</th>
                                                                    <th>Tanggal Sakit</th>
                                                                    <th>Tanggal Berobat</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                {{-- @foreach ($datapasiensiswi as $no => $item)
                                                                    <tr>
                                                                        <td>{{ $no + 1 }}</td>
                                                                        <td>{{ $item['nama_lengkap'] }}</td>
                                                                        <td>{{ $item['kelas'] }}</td>
                                                                        <td>{{ $item['wali_kelas'] }}</td>
                                                                        <td>{{ $item['keluhan'] }}</td>
                                                                        <td>{{ $item['status_pengobatan'] }}</td>
                                                                        <td>{{ $item['tanggal_sakit'] }}</td>
                                                                        <td>{{ $item['tanggal_berobat'] }}</td>
                                                                        <td class="d-flex">
                                                                            <a href="{{ route('profile.pasiensiswi', $item['id']) }}"
                                                                                class="btn btn-outline-success">Show</a>
                                                                            <a href="{{ route('edit.pasiensiswi', $item['id']) }}"
                                                                                class="btn btn-outline-warning">Edit</a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
