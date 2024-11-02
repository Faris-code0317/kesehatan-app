<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <title>LOGIN</title>
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}

@media (max-width: 768px) {
                img {
                    background-size: cover; /* Mengatur gambar agar menutupi area */
                    position: absolute; /* Memastikan gambar berada di tengah */
                    top: 45%; /* Mengatur posisi dari atas */
                    left: 50%; /* Mengatur posisi dari kiri */
                    transform: translate(-50%, -50%); /* Menggeser gambar ke tengah */
                    /* top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0; */
                    z-index: -1; /* Memastikan gambar berada di belakang elemen lain */
                }
                }
                img {
                    background-size: cover; /* Mengatur gambar agar menutupi area */
                    position: absolute; /* Memastikan gambar berada di tengah */
                    top: 45%; /* Mengatur posisi dari atas */
                    left: 50%; /* Mengatur posisi dari kiri */
                    transform: translate(-50%, -50%); /* Menggeser gambar ke tengah */
                    /* top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0; */
                    z-index: -1; /* Memastikan gambar berada di belakang elemen lain */
                }
            }
</style>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div>
              <img src="{{ asset('image/logo.png') }}"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" >
              <form action="" method="POST">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center">
                  <p class="lead fw-normal mb-0 me-3" style="text-align:center; font-size:40px;">Login</p>
                </div>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control form-control-lg"
                   placeholder="Email" name="email" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                  placeholder="Password" name="password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>

                <div class="d-grid gap-2">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </button>
                </div>

              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2024. AL-ITTIHAD.
          </div>
          <!-- Copyright -->

          <!-- Right -->
          {{-- <div class="col">
            <section id="custom_html-3" class="widget_text widget widget_custom_html">
                <div class="textwidget custom-html-widget">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15846.945161979667!2d107.1726618!3d-6.8019021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68536ad0d9d7a3%3A0xbd528f81cf2abe7b!2sPondok%20Pesantren%20Al%20Ittihad%20Cianjur!5e0!3m2!1sid!2suk!4v1681350968382!5m2!1sid!2suk" width="450" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </section>
        </div> --}}
      </section>
</body>
</html>