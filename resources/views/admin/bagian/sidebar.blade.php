<nav class="sidebar sidebar-offcanvas bg-white" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.kesehatan') }}">
          <i class="fa fa-dashboard"></i>
          <span class="menu-title">Dashborad</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#datamedis" aria-expanded="false" aria-controls="datamedis">
            <i class="ti-shield menu-icon"></i>
            <span class="menu-title">Data Pasien</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="datamedis">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('data.pasien') }}">Data Siswa</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('data.siswi') }}">Data Siswi</a></li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="ti-palette menu-icon"></i>
          <span class="menu-title">Tambah Data Pasien</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('tambah.siswa') }}">Pasien Siswa</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('tambah.siswi') }}">Pasien Siswi</a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tambah.pasien') }}">
          <i class="ti-view-list-alt menu-icon"></i>
          <span class="menu-title">Tambah Pasien</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <i class="ti-layout-list-post menu-icon"></i>
          <span class="menu-title">Rekam Medis</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="ti-pie-chart menu-icon"></i>
          <span class="menu-title">Laporan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="ti-user menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="documentation/documentation.html">
          <i class="ti-write menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>

    </ul>
  </nav>
