@extends('template.layout')

@section('title', 'login - web perpustakaan')

@section('main')
    <section class="login-container">
        <div class="card show-lg">
            <div class="card-glass">
                <div class="card-header">
                    <img src="./img/book.png" alt="" class="img-logo">
                    <h3 class="text-center">Login-web perpustakaan</h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="username" id="form-label">Username *</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="masukkan nama anda">
                        </div>
                        <div class="form-group my-3">
                            <label for="password" class="form-label">Password *</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password Anda">
                        </div>
                        <div class="form-group my-3">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="/signup"><p class="text-primary text-center">Tidak punya akun?, Silahkan mendaftar</p></a>
                </div>
            </div>
        </div>
    </section>
@endsection