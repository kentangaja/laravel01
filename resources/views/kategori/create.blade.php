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
                            Halaman Tambah Data Kategori
                        </li>
                    </ol>
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="kategori_nama" class="form-label">
                                    Nama Kategori *
                                </label>
                                <input type="text" name="kategori_nama" id="judul_buku" class="form-control" placeholder="Masukkan kategori buku">
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