@extends('admin.bagian.main')
@section('content')
<div class="col-md-10 grid-margin stretch-card mt-4 ms-4">
    <div class="card border-bottom-0">
      <div class="card-body pb-0">
        <p class="card-title">Tambahkan Catatan Pasien</p>
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
        <form action="" method="POST">
            @csrf
             <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                {{-- <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" required readonly>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control text-dark" value="Cantika" required readonly>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                {{-- <input type="text" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" required readonly>
                @error('kelas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <input type="text" name="kelas" id="kelas" class="form-control text-dark" value="VII A" required readonly>
            </div>

            <div class="mb-3">
                <label for="wali_kelas" class="form-label">Wali Kelas</label>
                {{-- <input type="text" name="wali_kelas" id="wali_kelas" class="form-control @error('wali_kelas') is-invalid @enderror" required readonly>
                @error('wali_kelas')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <input type="text" name="wali_kelas" id="wali_kelas" class="form-control text-dark" value="Ustzh Noor" required readonly>
            </div>

            <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan</label>
                {{-- <input type="text" name="keluhan" id="keluhan" class="form-control @error('keluhan') is-invalid @enderror" required readonly>
                @error('keluhan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <input type="text" name="keluhan" id="keluhan" class="form-control text-dark" value="Diare" required readonly>
            </div>

            <div class="mb-3">
                <label for="status_pengobatan" class="form-label">Status Pengobatan</label>
                {{-- <select name="status_pengobatan" id="status_pengobatan" class="form-select @error('status_pengobatan') is-invalid @enderror">
                  <option value="sudah" {{ old('status_pengobatan') == 'sudah' ? 'selected' : '' }}>Sudah Berobat</option>
                  <option value="belum" {{ old('status_pengobatan') == 'belum' ? 'selected' : '' }}>Belum Berobat</option>
                </select>
                @error('status_pengobatan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <select name="status_pengobatan" id="status_pengobatan" class="form-control text-dark">
                    <option value="sudah">Belum Berobat</option>
                    <option value="belum">Sudah Berobat</option>
                  </select>
              </div>

            <div class="mb-3">
                <label for="nama_dokter" class="form-label">Nama Dokter</label>
                {{-- <input type="text" name="nama_dokter" id="nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror">
                @error('nama_dokter')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <input type="text" name="nama_dokter" id="nama_dokter" class="form-control text-dark" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_sakit" class="form-label">Tanggal Sakit</label>
                {{-- <input type="date" name="tanggal_sakit" id="tanggal_sakit" class="form-control @error('tanggal_sakit') is-invalid @enderror" required readonly>
                @error('tanggal_sakit')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <input type="date" name="tanggal_sakit" id="tanggal_sakit" class="form-control text-dark" value="10/11/2024" required readonly>
            </div>

            <div class="mb-3">
                <label for="tanggal_berobat" class="form-label">Tanggal Berobat</label>
                {{-- <input type="date" name="tanggal_berobat" id="tanggal_berobat" class="form-control @error('tanggal_berobat') is-invalid @enderror">
                @error('tanggal_berobat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <input type="date" name="tanggal_berobat" id="tanggal_berobat" class="form-control text-dark" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_kunjungan" class="form-label">Jumlah Kunjungan</label>
                {{-- <input type="text" name="jumlah_kunjungan" id="jumlah_kunjungan" class="form-control @error('jumlah_kunjungan') is-invalid @enderror">
                @error('jumlah_kunjungan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <input type="number" name="jumlah_kunjungan" id="jumlah_kunjungan" class="form-control text-dark" required>
            </div>

            <div class="mb-3">
                <label for="nama_obat" class="form-label">Obat Yang Diberikan</label>
                {{-- <input type="text" name="nama_obat" id="nama_obat" class="form-control @error('nama_obat') is-invalid @enderror">
                @error('nama_obat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <input type="text" name="nama_obat" id="nama_obat" class="form-control text-dark" required>
            </div>

            <div class="mb-3">
                <label for="catatan_dokter" class="form-label">Catatan Dokter</label>
                {{-- <textarea name="catatan_dokter" id="catatan_dokter" class="form-control @error('catatan_dokter') is-invalid @enderror"></textarea>
                @error('catatan_dokter')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}
                <textarea name="catatan_dokter" id="catatan_dokter" rows="5" class="form-control text-dark" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="color: white"><i class="fa-solid fa-plus"></i>Tambah Data</button>
            <a href="{{ route('data.siswi') }}" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> Batal</a>
        </form>
      </div>
    </div>
  </div>
@endsection
