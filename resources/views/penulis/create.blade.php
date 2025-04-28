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
                            Halaman Tambah Data Penulis
                        </li>
                    </ol>
                    <form action="{{ route('penulis.store') }}" method="POST">
                        @csrf
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="penulis_nama" class="form-label">
                                    Nama Penulis *
                                </label>
                                <input type="text" name="penulis_nama" id="penulis_nama" class="form-control" placeholder="Masukkan Nama Penulis">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penulis_tmptlahir" class="form-label">
                                    Tempat Lahir Penulis *
                                </label>
                                <input type="text" name="penulis_tmptlahir" id="penulis_tmptlahir" class="form-control" placeholder="Masukkan Tempat Lahir">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penulis_tgllahir" class="form-label">
                                    Tanggal Lahir Penulis *
                                </label> 
                                <input type="date" name="penulis_tgllahir" id="penulis_tgllahir" class="form-control" placeholder="Masukkan tanggal lahir">
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