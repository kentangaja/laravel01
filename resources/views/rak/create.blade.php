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
                            Halaman Tambah Data rak
                        </li>
                    </ol>
                    <form action="{{ route('rak.store') }}" method="POST">
                        @csrf
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="rak_nama" class="form-label">
                                    Nama rak *
                                </label>
                                <input type="text" name="rak_nama" id="rak_nama" class="form-control" placeholder="Masukkan nama_rak">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="rak_lokasi" class="form-label">
                                    Lokasi Rak *
                                </label>
                                <input type="text" name="rak_lokasi" id="rak_lokasi" class="form-control" placeholder="Masukkan nama Rak">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="rak_kapasitas" class="form-label">
                                    kapasitas rak *
                                </label> 
                                <input type="number" name="rak_kapasitas" id="rak_kapasitas" class="form-control" placeholder="Masukkan kapasitas_rak">
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