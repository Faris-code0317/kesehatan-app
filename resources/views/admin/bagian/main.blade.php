<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data Kesehatan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('template-admin/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('template-admin/vendors/base/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('template-admin/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" />
  <style>
    /* Logo panjang hanya terlihat di tampilan besar */
.custom-logo {
    display: block;
}

/* Logo mini hanya terlihat di tampilan kecil */
.brand-logo-mini {
    display: none;
}

/* Media query untuk tampilan responsif (contoh untuk ukuran layar di bawah 768px) */
@media (max-width: 991px) {
    .custom-logo {
        display: none; /* Sembunyikan logo panjang */
    }

    .brand-logo-mini {
        display: block; /* Tampilkan logo mini */
    }
}

  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.bagian.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.bagian.sidebar')
      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<footer class="footer bg-primary">
    <div class="d-sm-flex justify-content-between align-items-center text-white">
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">SMKS AL-ITTIHAD</span>
        <span class="ms-auto">BERBASIS INDUSTRI 4.0</span>
    </div>
</footer>
<script>
    function searchSiswa() {
                const input = document.getElementById('searchInput');
                const filter = input.value.toLowerCase();
                const rows = document.querySelectorAll('#siswaTable tbody tr'); // Hanya ambil baris dalam tbody

                rows.forEach(row => {
                    const nameCell = row.cells[1]; // Asumsi nama siswa ada di kolom kedua
                    if (nameCell) {
                        const txtValue = nameCell.textContent || nameCell.innerText;
                        row.style.display = txtValue.toLowerCase().indexOf(filter) > -1 ? "" : "none";
                    }
                });
            }

            // Event listener untuk input pencarian
            document.getElementById('searchInput').addEventListener('keyup', searchSiswa);
</script>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('template-admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('template-admin/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('template-admin/js/off-canvas.js')}}"></script>
  <script src="{{ asset('template-admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('template-admin/js/template.js')}}"></script>
  <script src="{{ asset('template-admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('template-admin/js/dashboard.js')}}"></script>
  <script src="{{ asset('bootstrap.min.js') }}"></script>
  <script src="{{ asset('jquery-3.5.1.slim.min.js') }}"></script>
  <script src="{{ asset('popper.min.js') }}"></script>

  <!-- End custom js for this page-->
  <script src="{{ asset('argon/assets/js/core/bootstrap.min.js') }}"></script>


</body>

</html>

