    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small><a href="">Pondok Pesantren Al Ittihad</a></small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Sat : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end">
            <img src="{{ asset('image/logopanjang.png')}}" width="250" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-lg-0">
                <a href="{{ route('landing') }}"
                    class="nav-item nav-link {{ Route::is('landing') ? 'active' : '' }}">Home</a>
                <a href="{{ route('rekammedis') }}" class="nav-item nav-link {{ Route::is('rekammedis') ? 'active' : '' }}">Rekam Medis</a>
                <a href="{{ route('data') }}"
                    class="nav-item nav-link {{ Route::is('data') ? 'active' : '' }}">Data</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang</a>
                        <div class="dropdown-menu bg-light m-0 p-2 text-capitalize">
                            <a href="{{ route('about') }}"
                            class="dropdown-item rounded my-1 {{ Route::is('about') ? 'active' : '' }}">tentang</a>

                            <a href="{{ route('pengembang') }}"
                            class="dropdown-item rounded my-1 {{ Route::is('pengembang') ? 'active' : '' }}">tentang pengembang</a>
                        </div>
                    </div>
                <a href="{{ route('login') }}"
                    class="btn btn-primary rounded-0 py-4 px-lg-5 d-lg-block {{ Route::is('login') ? 'active' : '' }}">Login<i
                        class="fa fa-arrow-right ms-3"></i></a>
                {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
