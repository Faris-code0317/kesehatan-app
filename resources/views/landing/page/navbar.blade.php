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
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary">Poskestren</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-lg-0">
                <a href="{{ route('landing') }}"
                    class="nav-item nav-link {{ Route::is('landing') ? 'active' : '' }}">Home</a>
                <a href="" class="nav-item nav-link {{ Route::is('') ? 'active' : '' }}">Rekam Medis</a>
                <a href="{{ route('siswa') }}"
                    class="nav-item nav-link {{ Route::is('siswa') ? 'active' : '' }}">Siswa</a>
                <a href="{{ route('about') }}"
                    class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">Tentang</a>
                <a href="{{ route('login') }}"
                    class="btn btn-primary rounded-0 py-4 px-lg-5 d-lg-block {{ Route::is('login') ? 'active' : '' }}">Login<i
                        class="fa fa-arrow-right ms-3"></i></a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{ route('poskess/feature.html')}}" class="dropdown-item">Feature</a>
                        <a href="{{ route('poskess/quote.html')}}" class="dropdown-item">Free Quote</a>
                        <a href="{{ route('poskess/team.html')}}" class="dropdown-item">Our Team</a>
                        <a href="{{ route('poskess/testimonial.html')}}" class="dropdown-item">Testimonial</a>
                        <a href="{{ route('poskess/404.html')}}" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
