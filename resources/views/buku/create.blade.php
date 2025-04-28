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
                        Tambah Buku
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">
                            Halaman Tambah DataBuku
                        </li>
                    </ol>
                    <form action="{{ route('buku.store') }}" method="POST">
                        @csrf
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="buku_judul" class="form-label">
                                    Judul Buku *
                                </label>
                                <input type="text" name="buku_judul" id="buku_judul" class="form-control" placeholder="Masukkan judul buku">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penulis_id" class="form-label">
                                    Penulis Buku *
                                </label>
                                <select name="penulis_id" id="penulis_id" class="form-select" aria-label="Default select example">
                                    @foreach ($penulis as $penulis)
                                        <option selected>
                                            -Pilih Penulis Buku-
                                        </option>
                                        <option value="{{ $penulis->id }}">{{ $penulis->penulis_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_id" class="form-label">
                                    Penerbit Buku *
                                </label>
                                <select name="penerbit_id" id="penerbit_id" class="form-select" aria-label="Default select example">
                                    @foreach ($penerbit as $penerbit)
                                        <option selected>
                                            -Pilih Penerbit Buku-
                                        </option>
                                        <option value="{{ $penerbit->id }}">{{ $penerbit->penerbit_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="buku_thnterbit" class="form-label">
                                    Tahun Terbit *
                                </label>
                                <input type="year" name="buku_thnterbit" id="buku_thnterbit" class="form-control" placeholder="Masukkan tahun terbit">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="kategori_id" class="form-label">
                                    Kategori Buku *
                                </label>
                                <select name="kategori_id" id="kategori_id" class="form-select" aria-label="Default select example">
                                    @foreach ($kategori as $kategori)
                                        <option selected>
                                            -Pilih Kategori Buku-
                                        </option>
                                        <option value="{{ $kategori->id }}">{{ $kategori->kategori_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="rak_id" class="form-label">
                                    Rak Buku *
                                </label>
                                <select name="rak_id" id="rak_id" class="form-select" aria-label="Default select example">
                                    @foreach ($rak as $rak)
                                        <option selected>
                                            -Pilih Rak Buku-
                                        </option>
                                        <option value="{{ $rak->id }}">{{ $rak->rak_nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="buku_isbn" class="form-label">
                                    Nomor ISBN *
                                </label> 
                                <input type="text" name="buku_isbn" id="buku_isbn" class="form-control" placeholder="Masukkan nomor ISBN">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12 col-md-4">
                                <button class="btn btn-warning">
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