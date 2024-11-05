@extends('admin.bagian.main')
@section('content')
<div class="home-tab col-lg-11 mt-5">
    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#tambahdatapasiensiswa" role="tab"aria-controls="tambahdatapasiensiswa" aria-selected="true">Tambah Pasien Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tambahdatapasiensiswi" role="tab" aria-selected="false">Tambah Pasien Siswi</a>
            </li>
        </ul>
    </div>
    <div class="tab-content tab-content-basic">
        <div class="tab-pane fade show active mb-5" id="tambahdatapasiensiswa" role="tabpanel" aria-labelledby="tambahdatapasiensiswa">
            <div class="col-lg-11 col-md-11 grid-margin stretch-card mt-4 ms-4">
                <div class="card border-bottom-0">
                    <div class="card-body pb-0">
                        <p class="card-title">Tambahkan Data Pasien Siswa</p>
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="" method="post">

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade mb-5" id="tambahdatapasiensiswi" role="tabpanel" aria-labelledby="tambahdatapasiensiswi">
            <div class="col-lg-11 col-md-11 grid-margin stretch-card mt-4 ms-4">
                <div class="card border-bottom-0">
                    <div class="card-body pb-0">
                        <p class="card-title">Tambahkan Data Pasien Siswi</p>
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="" method="post">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
