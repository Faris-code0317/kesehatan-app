@extends('admin.bagian.main')
@section('content')
{{-- <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column">
                <div class="row flex-grow">
                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                        <div class="card card-rounded p-3" style="overflow: auto">
                            <div class="card-body">
                                <p class="card-title mb-0">Data Rekam Medis Pasien Siswa</p>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-center table-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Kelas</th>
                                                <th>Keluhan</th>
                                                <th>Dokter</th>
                                                <th>Tanggal Kunjungan</th>
                                                <th>Jumlah Kunjungan</th>
                                                <th>Obat Yang Diberikan</th>
                                                <th>Catatan Dokter</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>1</td>
                                                <td>Abdul Rian</td>
                                                <td>XI A PPLG</td>
                                                <td>Demam Tifoid</td>
                                                <td>Dr.Hadi</td>
                                                <td>12/10/2024</td>
                                                <td>1</td>
                                                <td>Azithromycin</td>
                                                <td>jangan Minum Air Berwarna</td>
                                                <td class="d-flex">
                                                    <a href="#" class="btn btn-primary mr-4">Edit</a>
                                                    <a href="#" class="btn btn-warning">Show</a>
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
</div> --}}
<div class="main-panel">
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
                                                    <thead class="text-center table-primary">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Pasien</th>
                                                            <th>Kelas</th>
                                                            <th>Keluhan</th>
                                                            <th>Dokter</th>
                                                            <th>Tanggal Kunjungan</th>
                                                            <th>Jumlah Kunjungan</th>
                                                            <th>Obat Yang Diberikan</th>
                                                            <th>Catatan Dokter</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                        @foreach($datapasiensiswa as $no=>$item)
                                                        <tr>
                                                            <td>{{ $no+1 }}</td>
                                                            <td>{{ $item['nama_lengkap'] }}</td>
                                                            <td>{{ $item['kelas'] }}</td>
                                                            <td>{{ $item['keluhan'] }}</td>
                                                            <td>{{ $item['nama_dokter'] }}</td>
                                                            <td>{{ $item['tanggal_berobat'] }}</td>
                                                            <td>{{ $item['jumlah_kunjungan'] }}</td>
                                                            <td>{{ $item['nama_obat'] }}</td>
                                                            <td>{{ $item['catatan_dokter'] }}</td>
                                                            <td class="d-flex">
                                                                <a href="#" class="btn btn-primary mr-4">Edit</a>
                                                                <a href="#" class="btn btn-warning">Show</a>
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
                                                        <thead class="text-center table-primary">
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Pasien</th>
                                                                <th>Kelas</th>
                                                                <th>Keluhan</th>
                                                                <th>Dokter</th>
                                                                <th>Tanggal Kunjungan</th>
                                                                <th>Jumlah Kunjungan</th>
                                                                <th>Obat Yang Diberikan</th>
                                                                <th>Catatan Dokter</th>
                                                                <th>Option</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            @foreach($datapasiensiswi as $no=>$item)
                                                        <tr>
                                                            <td>{{ $no+1 }}</td>
                                                            <td>{{ $item['nama_lengkap'] }}</td>
                                                            <td>{{ $item['kelas'] }}</td>
                                                            <td>{{ $item['keluhan'] }}</td>
                                                            <td>{{ $item['nama_dokter'] }}</td>
                                                            <td>{{ $item['tanggal_berobat'] }}</td>
                                                            <td>{{ $item['jumlah_kunjungan'] }}</td>
                                                            <td>{{ $item['nama_obat'] }}</td>
                                                            <td>{{ $item['catatan_dokter'] }}</td>
                                                            <td class="d-flex">
                                                                <a href="#" class="btn btn-primary mr-4">Edit</a>
                                                                <a href="#" class="btn btn-warning">Show</a>
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
