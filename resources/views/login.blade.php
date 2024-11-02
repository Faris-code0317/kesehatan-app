<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
        <style>
            @media (max-width: 768px) {
                .background {
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
                .login-form {
                    position: absolute; /* Memastikan form berada di tengah */
                    top: 45%; /* Mengatur posisi dari atas */
                    left: 50%; /* Mengatur posisi dari kiri */
                    transform: translate(-50%, -50%); /* Menggeser form ke tengah */
                    width: 90%; /* Lebar form responsif */
                    max-width: 400px; /* Lebar maksimum form */
                }
            }
            .background{
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
            .login-form {
                    position: absolute; /* Memastikan form berada di tengah */
                    top: 45%; /* Mengatur posisi dari atas */
                    left: 50%; /* Mengatur posisi dari kiri */
                    transform: translate(-50%, -50%); /* Menggeser form ke tengah */
                    width: 90%; /* Lebar form responsif */
                    max-width: 400px; /* Lebar maksimum form */
                }
        </style>
</head>
    <body class="d-flex align-items-stretch" style="height: 100vh;">
        <img src="{{ asset('image/logo.png') }}" class="background" style=" background-size: 8%; background-repeat: no-repeat; flex: 1;" height="50%" width=""></div>
        <div class="login-form d-flex flex-column justify-content-center align-items-center" style="background: rgba(255, 255, 255, 0.8); padding: 50px; border-radius: 50px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); height: 68%;">
            @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $item)
                  <li>{{ $item }}</li>
                  @endforeach
              </ul>
            </div>

            @endif
            @if(session()->has('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
            <form action="" method="POST" style="height: 100%; width: 100%;">
                @csrf
                <h2 class="text-center">Login</h2>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Enter your email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button name="submit" type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </button>
                </div>
            </form>
        </div>
        <script src="{{ asset('jquery-3.5.1.slim.min.js') }}"></script>
        <script src="{{ asset('popper.min.js') }}"></script>
        <script src="{{ asset('bootstrap.min.js') }}"></script>
    </body>
    </html>
