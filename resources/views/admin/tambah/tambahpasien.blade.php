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
                    <div class="card-body">
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
                        <form action="{{ route('tambahpasien.siswa') }}" method="POST">
                            @csrf
                             <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" required>
                                @error('kelas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="wali_kelas" class="form-label">Wali Kelas</label>
                                <input type="text" name="wali_kelas" id="wali_kelas"  class="form-control @error('wali_kelas') is-invalid @enderror" required>
                                @error('wali_kelas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="keluhan" class="form-label">Keluhan</label>
                                <input type="text" name="keluhan" id="keluhan" class="form-control @error('keluhan') is-invalid @enderror" required>
                                @error('keluhan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status_pengobatan" class="form-label">Status Pengobatan</label>
                                <select name="status_pengobatan" id="status_pengobatan" class="form-control text-dark @error('status_pengobatan') is-invalid @enderror">
                                  <option value="Sudah Berobat" {{ old('status_pengobatan') == 'Sudah Berobat' ? 'selected' : '' }}>Sudah Berobat</option>
                                  <option value="Belum Berobat" {{ old('status_pengobatan') == 'Belum Berobat' ? 'selected' : '' }}>Belum Berobat</option>
                                </select>
                                @error('status_pengobatan')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                              </div>

                              <div class="mb-3">
                                <label for="nama_dokter" class="form-label">Nama Dokter</label>
                                <input type="text" name="nama_dokter" id="nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror">
                                @error('nama_dokter')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_sakit" class="form-label">Tanggal Sakit</label>
                                <input type="date" name="tanggal_sakit" id="tanggal_sakit"  class="form-control @error('tanggal_sakit') is-invalid @enderror" required>
                                @error('tanggal_sakit')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_berobat" class="form-label">Tanggal Berobat</label>
                                <input type="date" name="tanggal_berobat" id="tanggal_berobat" class="form-control @error('tanggal_berobat') is-invalid @enderror">
                                @error('tanggal_berobat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_kunjungan" class="form-label">Jumlah Kunjungan</label>
                                <input type="number" name="jumlah_kunjungan" id="jumlah_kunjungan" class="form-control @error('jumlah_kunjungan') is-invalid @enderror">
                                @error('jumlah_kunjungan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama_obat" class="form-label">Obat Yang Diberikan</label>
                                <input type="text" name="nama_obat" id="nama_obat" class="form-control @error('nama_obat') is-invalid @enderror">
                                @error('nama_obat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="catatan_dokter" class="form-label">Catatan Dokter</label>
                                <textarea name="catatan_dokter" id="catatan_dokter" class="form-control @error('catatan_dokter') is-invalid @enderror"></textarea>
                                @error('catatan_dokter')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary" style="color: white"><i class="fa-solid fa-plus"></i>Tambah Data</button>
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
                        <form action="{{ route('tambahpasien.siswi') }}" method="POST">
                            @csrf
                             <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap"  class="form-control @error('nama_lengkap') is-invalid @enderror" required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" required>
                                @error('kelas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="wali_kelas" class="form-label">Wali Kelas</label>
                                <input type="text" name="wali_kelas" id="wali_kelas"class="form-control @error('wali_kelas') is-invalid @enderror" required>
                                @error('wali_kelas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="keluhan" class="form-label">Keluhan</label>
                                <input type="text" name="keluhan" id="keluhan" class="form-control @error('keluhan') is-invalid @enderror" required>
                                @error('keluhan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status_pengobatan" class="form-label">Status Pengobatan</label>
                                <select name="status_pengobatan" id="status_pengobatan" class="form-control text-dark @error('status_pengobatan') is-invalid @enderror">
                                    <option value="Sudah Berobat" {{ old('status_pengobatan') == 'Sudah Berobat' ? 'selected' : '' }}>Sudah Berobat</option>
                                    <option value="Belum Berobat" {{ old('status_pengobatan') == 'Belum Berobat' ? 'selected' : '' }}>Belum Berobat</option>
                                </select>
                                @error('status_pengobatan')
                                  <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                              </div>

                              <div class="mb-3">
                                <label for="nama_dokter" class="form-label">Nama Dokter</label>
                                <input type="text" name="nama_dokter" id="nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror">
                                @error('nama_dokter')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_sakit" class="form-label">Tanggal Sakit</label>
                                <input type="date" name="tanggal_sakit" id="tanggal_sakit"class="form-control @error('tanggal_sakit') is-invalid @enderror" required>
                                @error('tanggal_sakit')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_berobat" class="form-label">Tanggal Berobat</label>
                                <input type="date" name="tanggal_berobat" id="tanggal_berobat" class="form-control @error('tanggal_berobat') is-invalid @enderror">
                                @error('tanggal_berobat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_kunjungan" class="form-label">Jumlah Kunjungan</label>
                                <input type="number" name="jumlah_kunjungan" id="jumlah_kunjungan" class="form-control @error('jumlah_kunjungan') is-invalid @enderror">
                                @error('jumlah_kunjungan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama_obat" class="form-label">Obat Yang Diberikan</label>
                                <input type="text" name="nama_obat" id="nama_obat" class="form-control @error('nama_obat') is-invalid @enderror">
                                @error('nama_obat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="catatan_dokter" class="form-label">Catatan Dokter</label>
                                <textarea name="catatan_dokter" id="catatan_dokter" class="form-control @error('catatan_dokter') is-invalid @enderror"></textarea>
                                @error('catatan_dokter')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary" style="color: white"><i class="fa-solid fa-plus"></i>Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
