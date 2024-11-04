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
            </form>
        </div>
    </div>
</div>
@endsection
