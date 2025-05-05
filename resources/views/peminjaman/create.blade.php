@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

@section('header')
    @include('template.sidebar_admin')
@endsection 

@section('main')
<main>
    <div class="card" style="width: auto; margin: 30px;">
        <div class="card-body">
            <div class="penulis p-0 m-0">
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tambah Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Halaman Tambah Data Peminjaman</li>
                    </ol>

                    {{-- FORM --}}
                    <form action="{{ route('peminjaman.store') }}" method="POST">
                        @csrf

                        <div class="row gap-3">
                            {{-- User --}}
                            <div class="col-12 col-md-4 form-group">
                                <label for="user_id" class="form-label">Username *</label>
                                <select name="user_id" id="user_id" class="form-select">
                                    <option selected disabled>-Pilih Username-</option>
                                    @foreach ($user as $u)
                                        <option value="{{ $u->id }}">{{ $u->user_username }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Tanggal Pinjam --}}
                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_tglpinjam" class="form-label">Tanggal Peminjaman *</label>
                                <input type="date" name="peminjaman_tglpinjam" id="peminjaman_tglpinjam" class="form-control">
                            </div>

                            {{-- Tanggal Kembali --}}
                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_tglkembali" class="form-label">Tanggal Pengembalian *</label>
                                <input type="date" name="peminjaman_tglkembali" id="peminjaman_tglkembali" class="form-control">
                            </div>

                            {{-- Status Kembali --}}
                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_statuskembali" class="form-label">Status Kembali *</label>
                                <select name="peminjaman_statuskembali" id="peminjaman_statuskembali" class="form-select">
                                    <option selected disabled>-Pilih Status-</option>
                                    <option value="1">Sudah Kembali</option>
                                    <option value="0">Belum Kembali</option>
                                </select>
                            </div>

                            {{-- Denda --}}
                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_denda" class="form-label">Denda *</label>
                                <select name="peminjaman_denda" id="peminjaman_denda" class="form-select">
                                    <option selected disabled>-Pilih opsi Denda-</option>
                                    <option value="0">Tidak</option>
                                    <option value="10000">Denda Rp 10.000</option>
                                    <option value="20000">Denda Rp 20.000</option>
                                    {{-- Bisa tambah pilihan lain --}}
                                </select>
                            </div>

                            {{-- Note --}}
                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_note" class="form-label">Catatan *</label>
                                <input type="text" name="peminjaman_note" id="peminjaman_note" class="form-control" placeholder="Masukkan Catatan">
                            </div>
                        </div>

                        {{-- Tombol --}}
                        <div class="row my-3">
                            <div class="col-12 col-md-4">
                                <button type="submit" class="btn btn-warning">Tambah</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
