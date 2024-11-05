@extends('admin.bagian.main')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 class="font-weight-bold mb-0">Data Siswa Sakit</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Jumlah Pasien Siswa</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">12</h3>
                <svg width="100" height="150" viewBox="0 0 24 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Kepala pasien -->
                    <circle cx="12" cy="8" r="4" fill="#E0C4A8"/>

                    <!-- Masker -->
                    <rect x="8" y="10" width="8" height="4" fill="#B0B0B0" rx="1" ry="1" />

                    <!-- Tali masker kiri -->
                    <path d="M8 10 Q6.5 9.5, 6 8" fill="none" stroke="#B0B0B0" stroke-width="0.5"/>

                    <!-- Tali masker kanan -->
                    <path d="M16 10 Q17.5 9.5, 18 8" fill="none" stroke="#B0B0B0" stroke-width="0.5"/>

                    <!-- Garis detail masker -->
                    <line x1="8" y1="12" x2="16" y2="12" stroke="#D0D0D0" stroke-width="0.3"/>

                    <!-- Topi pasien -->
                    <rect x="9" y="4" width="6" height="2" fill="#4A90E2" rx="1" ry="1" />

                    <!-- Leher -->
                    <rect x="11" y="14" width="2" height="2" fill="#E0C4A8" />

                    <!-- Kerah baju pasien atas -->
                    <path d="M10 16 Q12 20, 14 16 Q12 15, 10 16 Z" fill="#D3D3D3" />

                    <!-- Badan pasien -->
                    <rect x="7" y="18" width="10" height="10" fill="#4A90E2" rx="2" ry="2" />

                    <!-- Lengan Kiri -->
                    <path d="M7 18 Q5 22, 7 26" fill="none" stroke="#4A90E2" stroke-width="2"/>

                    <!-- Lengan Kanan -->
                    <path d="M17 18 Q19 22, 17 26" fill="none" stroke="#4A90E2" stroke-width="2"/>

                    <!-- Kaki Kiri -->
                    <rect x="8" y="28" width="3" height="4" fill="#4A90E2" />

                    <!-- Kaki Kanan -->
                    <rect x="13" y="28" width="3" height="4" fill="#4A90E2" />
                  </svg>
                </div>
              {{-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Jumlah Divisi Kesehatan</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">8</h3>
                <svg width="100" height="150" viewBox="0 0 24 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Kepala dokter -->
                    <circle cx="12" cy="8" r="4" fill="#E0C4A8"/>

                    <!-- Topi dokter -->
                    <rect x="9" y="4" width="6" height="2" fill="#4A90E2" rx="1" ry="1" />

                    <!-- Jas dokter -->
                    <path d="M7 10 Q12 14, 17 10 Q16 22, 12 20 Q8 22, 7 10 Z" fill="#FFFFFF" stroke="#C0C0C0" stroke-width="0.5"/>

                    <!-- Kerah jas dokter -->
                    <path d="M10 12 Q12 14, 14 12 Q12 14.5, 10 12 Z" fill="#D3D3D3" />

                    <!-- Kantong Jas Kiri -->
                    <rect x="8" y="14" width="2" height="2" fill="#D3D3D3"/>

                    <!-- Kantong Jas Kanan -->
                    <rect x="14" y="14" width="2" height="2" fill="#D3D3D3"/>

                    <!-- Badan dokter (jubah) -->
                    <rect x="8" y="15" width="8" height="10" fill="#4A90E2" rx="2" ry="2" />

                    <!-- Lengan Kiri -->
                    <path d="M7 15 Q5 18, 6 21" fill="none" stroke="#4A90E2" stroke-width="2"/>

                    <!-- Lengan Kanan -->
                    <path d="M17 15 Q19 18, 18 21" fill="none" stroke="#4A90E2" stroke-width="2"/>

                    <!-- Kaki Kiri -->
                    <rect x="8" y="25" width="3" height="4" fill="#4A90E2" />

                    <!-- Kaki Kanan -->
                    <rect x="13" y="25" width="3" height="4" fill="#4A90E2" />

                    <!-- Stetoskop -->
                    <path d="M12 14 Q10 16, 12 18 Q14 16, 12 14 Z" fill="none" stroke="#000000" stroke-width="0.5"/>
                    <circle cx="12" cy="14" r="0.5" fill="#000000"/>
                    <path d="M12 18 L12 20" stroke="#000000" stroke-width="0.5"/>
                    <circle cx="12" cy="20" r="0.5" fill="#000000"/>
                  </svg>
                                 </div>
              {{-- <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p> --}}
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Downloads</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">40016</h3>
                <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>
              <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Returns</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">61344</h3>
                <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>
              <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
            </div>
          </div>
        </div>
      </div>
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
                          <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#belumberobat" role="tab" aria-controls="belumberobat" aria-selected="true">Pasien Belum Berobat</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#sudahberobat" role="tab" aria-selected="false">Pasien Sudah Berobat</a>
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
                                                <thead class="text-center table-primary">
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
                                                            <a href="{{ route('rekam.siswa') }}" class="btn btn-primary mr-4">Pilih</a>
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
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Abdul Rian</td>
                                                        <td>XI A PPLG</td>
                                                        <td>Ust Nurhadi</td>
                                                        <td>Demam Tifoid</td>
                                                        <td>Sudah Berobat</td>
                                                        <td>11/10/2024</td>
                                                        <td>12/10/2024</td>
                                                        <td class="d-flex">
                                                            <a href="#" class="btn btn-success">Edit</a>
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
                </div>
        </div>

            </div>
    <!-- content-wrapper ends -->
  </div>
@endsection
