<?php

namespace App\Http\Controllers;

use App\Models\penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPenulis = penulis::simplePaginate(5);
        return view('penulis.index', compact('allPenulis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penulis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'penulis_nama' => 'required|max:50',
            'penulis_tmptlahir' => 'required|max:15',
            'penulis_tgllahir' => 'required'
        ]);

        penulis::create($validateData);

        return redirect()->route('penulis.index')->with('succes', 'pembuatan data berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(penulis $penulis)
    {
        return view('penulis.index', compact('penulis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penulis $penulis)
    {
        return view('penulis.edit', compact('penulis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penulis $penulis)
    {
        $validateData = $request->validate([
            'penulis_nama' => 'required|max:50',
            'penulis_tmptlahir' => 'required|max:15',
            'penulis_tgllahir' => 'required'
        ]);

        $penulis->update($validateData);

        return redirect()->route('penulis.index')->with('succes', 'update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penulis $penulis)
    {
        $penulis->delete();

        return redirect()->route('penulis.index');
    }
}
