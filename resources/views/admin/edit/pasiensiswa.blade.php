@extends('admin.bagian.main')
@section('content')
<div class="col-md-10 grid-margin stretch-card mt-4 ms-4">
    <div class="card border-bottom-0">
        <div class="card-body pb-0">
            <form action="{{ route('update.pasien', $datapasiensiswa['id']) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Card Body Pertama -->
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswa['nama_lengkap'])?$datapasiensiswa['nama_lengkap']:old('nama_lengkap') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswa['kelas'])?$datapasiensiswa['kelas']:old('kelas') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Wali Kelas</label>
                            <input type="text" name="wali_kelas" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswa['wali_kelas'])?$datapasiensiswa['wali_kelas']:old('wali_kelas') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Keluhan</label>
                            <input type="text" name="keluhan" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswa['keluhan'])?$datapasiensiswa['keluhan']:old('keluhan') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="validationCustom01" class="form-label">Status Pengobatan</label>
                            <input type="text" name="status_pengobatan" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswa['status_pengobatan'])?$datapasiensiswa['status_pengobatan']:old('status_pengobatan') }}" required>
                        </div>
                    </div>

                    <!-- Card Body Kedua -->
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Dokter</label>
                            <input type="text" name="nama_dokter" class="form-control text-dark" id="" value="{{ isset($datapasiensiswa['nama_dokter'])?$datapasiensiswa['nama_dokter']:old('nama_dokter') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Sakit</label>
                            <input type="date" name="tanggal_sakit" class="form-control text-dark" id="" value="{{ isset($datapasiensiswa['tanggal_sakit'])?$datapasiensiswa['tanggal_sakit']:old('tanggal_sakit') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Berobat</label>
                            <input type="date" name="tanggal_berobat" class="form-control text-dark" id="" value="{{ isset($datapasiensiswa['tanggal_berobat'])?$datapasiensiswa['tanggal_berobat']:old('tanggal_berobat') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Jumlah Kunjungan</label>
                            <input type="number" name="jumlah_kunjungan" class="form-control text-dark" id="" value="{{ isset($datapasiensiswa['jumlah_kunjungan'])?$datapasiensiswa['jumlah_kunjungan']:old('jumlah_kunjungan') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control text-dark" id="" value="{{ isset($datapasiensiswa['nama_obat'])?$datapasiensiswa['nama_obat']:old('nama_obat') }}" required>
                        </div>
                    </div>
                    <!-- Card Body Ketiga -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Catatan Dokter</label>
                            <textarea class="form-control text-dark" name="catatan_dokter" cols="30" rows="5" required>{{ isset($datapasiensiswa['catatan_dokter'])?$datapasiensiswa['catatan_dokter']:old('catatan_dokter') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-warning text-white">UPDATE</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mb-3 d-flex">
                <a href="{{ route('data.pasien') }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                <a href="{{ route('data.rekammedis') }}" class="btn btn-success" style="margin-left:5px"> Lihat Data Rekam Medis</a>
            </div>
        </div>
    </div>
</div>
@endsection
