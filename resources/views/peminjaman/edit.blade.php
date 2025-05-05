@extends('template.layout-admin')

@section('title', 'Edit Data Peminjaman')

@section('header')
    @include('template.sidebar_admin')
@endsection

@section('main')
<main>
    <div class="card" style="width: auto; margin: 30px;">
        <div class="card-body">
            <div class="penulis p-0 m-0">
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Edit Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Halaman Edit Data Peminjaman</li>
                    </ol>

                    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="user_id" class="form-label">Username *</label>
                                <select name="user_id" id="user_id" class="form-select">
                                    <option value="">-Pilih Username-</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $peminjaman->user_id == $user->id ? 'selected' : '' }}>
                                            {{ $user->user_username }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_tglpinjam" class="form-label">Tanggal Peminjaman *</label>
                                <input type="date" name="peminjaman_tglpinjam" id="peminjaman_tglpinjam" class="form-control"
                                    value="{{ old('peminjaman_tglpinjam', $peminjaman->peminjaman_tglpinjam) }}">
                            </div>

                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_tglkembali" class="form-label">Tanggal Pengembalian *</label>
                                <input type="date" name="peminjaman_tglkembali" id="peminjaman_tglkembali" class="form-control"
                                    value="{{ old('peminjaman_tglkembali', $peminjaman->peminjaman_tglkembali) }}">
                            </div>

                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_statuskembali" class="form-label">Status *</label>
                                <select name="peminjaman_statuskembali" id="peminjaman_statuskembali" class="form-select">
                                    <option value="">-Pilih Status-</option>
                                    <option value="1" {{ $peminjaman->peminjaman_statuskembali == 1 ? 'selected' : '' }}>Sudah Kembali</option>
                                    <option value="0" {{ $peminjaman->peminjaman_statuskembali == 0 ? 'selected' : '' }}>Belum Kembali</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_denda" class="form-label">Denda *</label>
                                <input type="number" name="peminjaman_denda" id="peminjaman_denda" class="form-control"
                                    value="{{ old('peminjaman_denda', $peminjaman->peminjaman_denda) }}">
                            </div>

                            <div class="col-12 col-md-4 form-group">
                                <label for="peminjaman_note" class="form-label">Catatan *</label>
                                <input type="text" name="peminjaman_note" id="peminjaman_note" class="form-control"
                                    placeholder="Masukkan Catatan" value="{{ old('peminjaman_note', $peminjaman->peminjaman_note) }}">
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-12 col-md-4">
                                <button class="btn btn-warning" type="submit">Update</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
