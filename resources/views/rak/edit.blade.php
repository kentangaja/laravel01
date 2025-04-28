@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

  @section('header')
    @include('template.sidebar_admin')
  @endsection 

@section('main')
      <!-- form Edit -->
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
                            Halaman Edit Data rak
                        </li>
                    </ol>
                    <form action="{{ route('rak.update', $rak->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="rak_nama" class="form-label">
                                    Nama rak *
                                </label>
                                <input type="text" name="rak_nama" id="rak_nama" class="form-control" value="{{ $rak->rak_nama }}">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="rak_lokasi" class="form-label">
                                    nama Rak *
                                </label>
                                <input type="text" name="rak_lokasi" id="rak_lokasi" class="form-control" value="{{ $rak->rak_lokasi }}">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="rak_kapasitas" class="form-label">
                                    kapasitas rak *
                                </label> 
                                <input type="number" name="rak_kapasitas" id="rak_kapasitas" class="form-control" value="{{ $rak->rak_kapasitas }}">
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