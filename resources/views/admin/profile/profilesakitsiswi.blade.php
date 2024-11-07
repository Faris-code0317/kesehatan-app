@extends('admin.bagian.main')
@section('content')
<div class="col-md-10 grid-margin stretch-card mt-4 ms-4">
    <div class="card border-bottom-0">
        <div class="card-body pb-0">
            <div class="row">
                <!-- Card Body Pertama -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswi['nama_lengkap'])?$datapasiensiswi['nama_lengkap']:old('nama_lengkap') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Kelas</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswi['kelas'])?$datapasiensiswi['kelas']:old('kelas') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Wali Kelas</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswi['wali_kelas'])?$datapasiensiswi['wali_kelas']:old('wali_kelas') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Keluhan</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswi['keluhan'])?$datapasiensiswi['keluhan']:old('keluhan') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label">Status Pengobatan</label>
                        <input type="text" class="form-control text-dark" id="validationCustom01" value="{{ isset($datapasiensiswi['status_pengobatan'])?$datapasiensiswi['status_pengobatan']:old('status_pengobatan') }}" readonly>
                    </div>
                </div>

                <!-- Card Body Kedua -->
                <div class="col-md-3">
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Dokter</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ isset($datapasiensiswi['nama_dokter'])?$datapasiensiswi['nama_dokter']:old('nama_dokter') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Sakit</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ isset($datapasiensiswi['tanggal_sakit'])?$datapasiensiswi['tanggal_sakit']:old('tanggal_sakit') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Berobat</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ isset($datapasiensiswi['tanggal_berobat'])?$datapasiensiswi['tanggal_berobat']:old('tanggal_berobat') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Kunjungan</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ isset($datapasiensiswi['jumlah_kunjungan'])?$datapasiensiswi['jumlah_kunjungan']:old('jumlah_kunjungan') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Obat</label>
                        <input type="text" class="form-control text-dark" id="" value="{{ isset($datapasiensiswi['nama_obat'])?$datapasiensiswi['nama_obat']:old('nama_obat') }}" readonly>
                    </div>
                </div>
                <!-- Card Body Ketiga -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Catatan Dokter</label>
                        <textarea class="form-control text-dark" cols="30" rows="5" readonly>{{ isset($datapasiensiswi['catatan_dokter'])?$datapasiensiswi['catatan_dokter']:old('catatan_dokter') }}</textarea>
                    </div>
                    <div class="mb-3 d-flex">
                        <a href="{{ route('data.siswi') }}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                        <a href="{{ route('data.rekammedis') }}" class="btn btn-success" style="margin-left: 5px"> Lihat Data Rekam Medis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
