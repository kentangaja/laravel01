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
                        Edit Data
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active text-black">
                            Halaman Edit Data Penerbit
                        </li>
                    </ol>
                    <form action="{{ route('penerbit.update', $penerbit->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_nama" class="form-label">
                                    Nama *
                                </label>
                                <input type="text" name="penerbit_nama" id="penerbit_nama" class="form-control" value="{{ $penerbit->penerbit_nama }}">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_alamat" class="form-label">
                                    Alamat *
                                </label>
                                <input type="text" name="penerbit_alamat" id="penerbit_alamat" class="form-control" value="{{ $penerbit->penerbit_alamat }}">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_notelp" class="form-label">
                                    Nomor Telepon *
                                </label> 
                                <input type="tel" name="penerbit_notelp" id="penerbit_notelp" class="form-control" value="{{ $penerbit->penerbit_notelp }}">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_email" class="form-label">
                                    E-mail *
                                </label> 
                                <input type="email" name="penerbit_email" id="penerbit_email" class="form-control" value="{{ $penerbit->penerbit_email }}">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12 col-md-4">
                                <button class="btn btn-warning">
                                    Update
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