@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

  @section('header')
    @include('template.sidebar_admin')
  @endsection 

  @section('main')
      <!-- form tambah -->
    <main>
        <div class="card" style="width: auto; margin: 30px;">
            <div class="card-body">
                <div class="penulis p-0 m-0">
                    <div class="container-fluid px-4">
                    <h1 class="mt-4">
                        Tambah Data
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active text-black">
                            Halaman Tambah Data Penerbit
                        </li>
                    </ol>
                    <form action="{{ route ('penerbit.store')}}" method="POST">
                        @csrf
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_nama" class="form-label">
                                    nama *
                                </label>
                                <input type="text" name="penerbit_nama" id="penerbit_nama" class="form-control" placeholder="Masukkan nama penerbit">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_alamat" class="form-label">
                                    Alamat *
                                </label>
                                <input type="text" name="penerbit_alamat" id="penerbit_alamat" class="form-control" placeholder="Masukkan Alamat penerbit ">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_notelp" class="form-label">
                                    Nomor telepon *
                                </label> 
                                <input type="number" name="penerbit_notelp" id="penerbit_notelp" class="form-control" placeholder="Masukkan nomor telpon">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_email" class="form-label">
                                    E-mail *
                                </label> 
                                <input type="email" name="penerbit_email" id="penerbit_email" class="form-control" placeholder="Masukkan nomor email">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12 col-md-4">
                                <button type="submit" class="btn btn-warning">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

      
@endsection