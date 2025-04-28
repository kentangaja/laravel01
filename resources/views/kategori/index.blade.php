@extends('template.layout-admin')

@section('title', 'data Kategori')

  @section('header')
    @include('template.sidebar_admin')
  @endsection 

  @section('main')
      <!-- tabel kategori -->
        <main>
        <div class="card" style="width: auto; margin: 30px;">
            <div class="card-body">
                <div class="kategori p-0 m-0">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">
                            Kategori
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="color: #3C3D37;">
                                Halaman Data Kategori
                            </li>
                        </ol>
                        <a href="{{ route('kategori.create') }}">
                            <button class="btn btn-primary mb-3">
                                Tambah Data
                            </button>
                        </a>
                        @if (session('succes'))
                            <div class="p-4 mb-4 text-sm text-black bg-green-100 rounded-lg">
                                {{ session('sucess') }}
                            </div>
                        @endif
                            <table class="table table-default table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allKategori as $key => $r)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $r->kategori_nama }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('kategori.edit', $r->id) }}">
                                                    <button class="btn btn-primary" >
                                                        Update
                                                    </button>
                                                </a>
                                                <form action="{{ route('kategori.destroy', $r->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
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
                                @if ($allKategori->onFirstPage())
                                    <span class="text-gray-400">← Sebelumnya</span>
                                @else
                                    <a href="{{ $allKategori->previousPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                        ← Sebelumnya
                                    </a>
                                @endif
                            |
                                @if ($allKategori->hasMorePages())
                                    <a href="{{ $allKategori->nextPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
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