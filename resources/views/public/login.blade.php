@extends('template.layout')

@section('title', 'login - web perpustakaan')

@section('main')
    <section class="login-container">
        <div class="card show-lg">
            <div class="card-glass">
                <div class="card-header">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif ($errors->has('message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal!</strong> {{ $errors->first('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <img src="./img/book.png" alt="" class="img-logo">
                    <h3 class="text-center">Login-web perpustakaan</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username" id="form-label">Username *</label>
                            <input type="text" name="user_username" id="user_username" class="form-control" placeholder="masukkan nama anda">
                        </div>
                        <div class="form-group my-3">
                            <label for="password" class="form-label">Password *</label>
                            <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Masukkan password Anda">
                        </div>
                        <div class="form-group my-3">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="{{ route('register') }}"><p class="text-primary text-center">Tidak punya akun?, Silahkan mendaftar</p></a>
                </div>
            </div>
        </div>
    </section>
@endsection