<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use App\Models\penerbit;
use App\Models\penulis;
use App\Models\rak;
use Illuminate\Http\Request;

class BukuController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allBuku = Buku::simplePaginate(5);
        return view('buku.index', compact('allBuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penulis = Penulis::select('id', 'penulis_nama')->get();
        $kategori = kategori::all();
        $penerbit = Penerbit::select('id', 'penerbit_nama')->get();
        $rak = Rak::select('id', 'rak_nama')->get();
        return view('buku.create', compact('penulis', 'kategori', 'penerbit', 'rak'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'buku_judul' => 'required|max:40',
            'buku_isbn' => 'required|max:16',
            'buku_thnterbit' => 'required',
            'penulis_id' => 'required',
            'kategori_id' => 'required',
            'penerbit_id' => 'required',
            'rak_id' => 'required',
        ]);

        Buku::create($validateData);

        return redirect()->route('buku.index')->with('succes', 'pembuatan data berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        $penulis = Penulis::select('id', 'penulis_nama')->get();
        $kategori = kategori::all();
        $penerbit = Penerbit::select('id', 'penerbit_nama')->get();
        $rak = Rak::select('id', 'rak_nama')->get();
        return view('buku.edit', compact('buku', 'penulis', 'kategori', 'penerbit', 'rak'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        $validateData = $request->validate([
            'buku_judul' => 'required|max:40',
            'buku_isbn' => 'required|max:16',
            'buku_thnterbit' => 'required',
            'penulis_id' => 'required',
            'kategori_id' => 'required',
            'penerbit_id' => 'required',
            'rak_id' => 'required',
        ]);

        $buku->update($validateData);

        return redirect()->route('buku.index')->with('succes', 'update data berhasil');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index');
    }
}
