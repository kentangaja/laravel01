@extends('template.layout-signup')

@section('title', 'login - web perpustakaan')

@section('main')
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 right-box">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #F6FCDF;">
                <div class="featured-image mb-3">
                    <img src="img/signup.png" class="img-fluid" style="width: 200px;" alt="">
                </div>
                <p class="fs-2" style="font-family: Arial, Helvetica, sans-serif; font-weight: 700;">DAFTAR DULU</p>
                <small class="text-wrap text-center" style="width: 17rem; font-family: sans-serif;">kalo udah daftar nanti bisa login, jadi daftar aja dulu</small>
            </div>
            <div class="col-md-6">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h3 style="font-family: Arial, Helvetica, sans-serif; font-weight: 400;">Ayo Daftar Akun</h3>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="nama" id="nama" class="form-control form-control-lg bg-light fs-6" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="alamat" id="alamat" class="form-control form-control-lg bg-light fs-6" placeholder="Alamat" value="{{ old('alamat') }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="username" id="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username" value="{{ old('username') }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control form-control-lg bg-light fs-6" placeholder="E-mail" value="{{ old('email') }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" name="notelp" id="notelp" class="form-control form-control-lg bg-light fs-6" placeholder="No handphone">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                        </div>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">Sign up</button>
                        </div>
                    </form>
                    <div class="udah-ada">
                        <small>udah punya akun? <a href="{{ route('login') }}">
                            Login
                        </a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection