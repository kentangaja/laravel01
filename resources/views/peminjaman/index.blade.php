@extends('template.layout-admin')

@section('title', 'data Kategori')

@section('header')
    @include('template.sidebar_admin')
@endsection 

@section('main')
<main>
    <div class="card" style="width: auto; margin: 30px;">
        <div class="card-body">
            <div class="kategori p-0 m-0">
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Peminjaman</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active" style="color: #3C3D37;">
                            Halaman Data Peminjaman
                        </li>
                    </ol>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <a href="{{ route('peminjaman.create') }}">
                        <button class="btn btn-primary mb-3">
                            Tambah Data
                        </button>
                    </a>

                    <table class="table table-default table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Note</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allPeminjaman as $key => $r)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $r->user->user_nama ?? 'Tidak ada data' }}</td>
                                    <td>{{ $r->peminjaman_tglpinjam }}</td>
                                    <td>{{ $r->peminjaman_tglkembali }}</td>
                                    <td>
                                        @if($r->peminjaman_statuskembali)
                                            <span class="badge bg-success">Sudah Kembali</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Belum Kembali</span>
                                        @endif
                                    </td>
                                    <td>{{ $r->peminjaman_note }}</td>
                                    <td>
                                        @if ($r->peminjaman_denda > 0)
                                            Rp {{ number_format($r->peminjaman_denda, 0, ',', '.') }}
                                        @else
                                            Tidak Ada
                                        @endif
                                    </td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('peminjaman.edit', $r->id) }}">
                                            <button class="btn btn-primary">Update</button>
                                        </a>
                                        <form action="{{ route('peminjaman.destroy', $r->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Pagination --}}
                    <div class="d-flex justify-content-between mt-4">
                        @if ($allPeminjaman->onFirstPage())
                            <span class="text-muted">← Sebelumnya</span>
                        @else
                            <a href="{{ $allPeminjaman->previousPageUrl() }}" class="btn btn-outline-primary">← Sebelumnya</a>
                        @endif
                        |
                        @if ($allPeminjaman->hasMorePages())
                            <a href="{{ $allPeminjaman->nextPageUrl() }}" class="btn btn-outline-primary">Selanjutnya →</a>
                        @else
                            <span class="text-muted">Selanjutnya →</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
