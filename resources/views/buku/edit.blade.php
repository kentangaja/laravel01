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
                        Update Buku
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">
                            Halaman Update DataBuku
                        </li>
                    </ol>
                    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="buku_judul" class="form-label">
                                    Judul Buku *
                                </label>
                                <input type="text" name="buku_judul" id="buku_judul" class="form-control" value="{{ $buku->buku_judul }}">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penulis_id" class="form-label">
                                    Penulis Buku *
                                </label>
                                <select name="penulis_id" id="penulis_id" class="form-select" aria-label="Default select example">
                                    @foreach ($penulis as $penulis)
                                        <option value="{{ $penulis->id }}" {{ ($penulis->id == $buku->penulis_id) ? 'selected':'' }}>{{ $penulis->penulis_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_id" class="form-label">
                                    Penerbit Buku *
                                </label>
                                <select name="penerbit_id" id="penerbit_id" class="form-select" aria-label="Default select example">
                                    @foreach ($penerbit as $penerbit)
                                        <option value="{{ $penerbit->id }}" {{ ($penerbit->id == $buku->penerbit_id) ? 'selected':'' }}>{{ $penerbit->penerbit_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="buku_thnterbit" class="form-label">
                                    Tahun Terbit *
                                </label>
                                <input type="year" name="buku_thnterbit" id="buku_thnterbit" class="form-control" value="{{ $buku->buku_thnterbit }}">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="kategori_id" class="form-label">
                                    Kategori Buku *
                                </label>
                                <select name="kategori_id" id="kategori_id" class="form-select" aria-label="Default select example">
                                    @foreach ($kategori as $kategori)
                                        <option value="{{ $kategori->id }}" {{ ($kategori->id == $buku->kategori_id) ? 'selected':'' }}>{{ $kategori->kategori_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="rak_id" class="form-label">
                                    Rak Buku *
                                </label>
                                <select name="rak_id" id="rak_id" class="form-select" aria-label="Default select example">
                                    @foreach ($rak as $rak)
                                        <option value="{{ $rak->id }}" {{ ($rak->id == $buku->rak_id) ? 'selected':'' }}>{{ $rak->rak_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="buku_isbn" class="form-label">
                                    Nomor ISBN *
                                </label> 
                                <input type="text" name="buku_isbn" id="buku_isbn" class="form-control" value="{{ $buku->buku_isbn }}">
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