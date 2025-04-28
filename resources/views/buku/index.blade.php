@extends('template.layout-admin')

@section('title', 'data Buku')

  @section('header')
    @include('template.sidebar_admin')
  @endsection 

  @section('main')
    <!-- main content -->
    <main>
        <div class="card" style="width: auto; margin: 30px;">
            <div class="card-body">
                <div class="buku p-0 m-0">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">
                            Buku
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="color: #3C3D37;">
                                Halaman Data Buku
                            </li>
                        </ol>
                        @if (session('succes'))
                            <div class="p-4 mb-4 text-sm text-black bg-green-100 rounded-lg">
                                {{ session('sucess') }}
                            </div>
                        @endif
                        <a href="{{ route('buku.create') }}">
                            <button class="btn btn-primary mb-3">
                                Tambah Buku
                            </button>
                        </a>
                        <table class="table table-default table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Buku</th>
                                        <th>Penulis Buku</th>
                                        <th>Penerbit Buku</th>
                                        <th>Tahun Terbit</th>
                                        <th>Kategori Buku</th>
                                        <th>Rak Buku</th>
                                        <th>ISBN</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allBuku as $key => $r)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $r->buku_judul }}</td>
                                        <td>{{ $r->penulis->penulis_nama }}</td>
                                        <td>{{ $r->penerbit->penerbit_nama }}</td>
                                        <td>{{ $r->buku_thnterbit }}</td>
                                        <td>{{ $r->kategori->kategori_nama }}</td>
                                        <td>{{ $r->rak->rak_nama }}</td>
                                        <td>{{ $r->buku_isbn }}</td>
                                        <td>
                                            <a href="{{ route('buku.edit', $r->id) }}">
                                                <button class="btn btn-primary" >
                                                    Update
                                                </button>
                                            </a>
                                            <form action="{{ route('buku.destroy', $r->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                        <div class="flex justify-between mt-4">
                            @if ($allBuku->onFirstPage())
                                <span class="text-gray-400">← Sebelumnya</span>
                            @else
                                <a href="{{ $allBuku->previousPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                    ← Sebelumnya
                                </a>
                            @endif
                        |
                            @if ($allBuku->hasMorePages())
                                <a href="{{ $allBuku->nextPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                    Selanjutnya →
                                </a>
                            @else
                                <span class="text-gray-400">Selanjutnya →</span>
                            @endif
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection