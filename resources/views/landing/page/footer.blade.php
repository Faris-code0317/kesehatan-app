    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Alamat</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Bandung No.03, Bojong, Kec.
                        Karangtengah, Kabupaten Cianjur, Jawa Barat 43281, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62263280051</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Tautan Cepat</h5>
                    <a class="btn btn-link" href="{{ route('landing') }}">Home</a>
                    <a class="btn btn-link" href="">Rekam Medis</a>
                    <a class="btn btn-link" href="{{ route('data') }}">Data Pelajar</a>
                    <a class="btn btn-link" href="{{ route('about') }}">Tentang</a>
                    <a class="btn btn-link" href="{{ route('pengembang') }}">Tentang Pengembang</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Project Gallery</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('poskess/img/gallery-1.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('poskess/img/gallery-2.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('poskess/img/gallery-3.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('poskess/img/gallery-4.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('poskess/img/gallery-5.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid rounded" src="{{ asset('poskess/img/gallery-6.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Peta Ponpes Al-Ittihad</h5>
                    <!-- maps -->
                    <div class="row g-0 mx-lg-0">
                        <div class="" style="min-height: 200px;">
                            <div class="position-relative h-100">
                                <iframe class="position-absolute rounded w-100 h-100" style="object-fit: cover;"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15846.945161979667!2d107.1726618!3d-6.8019021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68536ad0d9d7a3%3A0xbd528f81cf2abe7b!2sPondok%20Pesantren%20Al%20Ittihad%20Cianjur!5e0!3m2!1sid!2suk!4v1681350968382!5m2!1sid!2suk"
                                    frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                {{-- container-fluid bg-light overflow-hidden px-lg-0 --}}
                                {{-- container contact px-lg-0 --}}
                                {{-- col-lg- pe-lg-0 --}}
                            </div>


                        </div>
                    </div>
                    <!-- maps End -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Altie-Posketren</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Developed By <a href="#">Three Persons</a>
                        <br>
                        Distributed By: <a href="#" target="">Pondok Pesantren Al-Ittihad</a>
                        <br>
                        Created By <a href="">Tefatie</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
