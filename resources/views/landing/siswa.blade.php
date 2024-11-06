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


    <!-- partial -->
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Table</h4>
                        <p class="card-description">
                            Add class <code>.table</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Wali_Kelas</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Adriansyah Maulana</td>
                                        <td>XI A PPLG</td>
                                        <td>Ust. Nurhadi Lubis</td>
                                        <td>Sakit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
