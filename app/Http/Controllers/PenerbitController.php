<?php

namespace App\Http\Controllers;

use App\Models\penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPenerbit = penerbit::simplePaginate(5);
        return view('penerbit.index', compact('allPenerbit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'penerbit_nama' => 'required|max:50',
            'penerbit_alamat' => 'required|max:50',
            'penerbit_notelp' => 'required|max:13',
            'penerbit_email' => 'required|max:50'
        ]);

        penerbit::create($validateData);

        return redirect()->route('penerbit.index')->with('succes', 'pembuatan data berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(penerbit $penerbit)
    {
        return view('penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penerbit $penerbit)
    {
        return view('penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penerbit $penerbit)
    {
        $validateData = $request->validate([
            'penerbit_nama' => 'required|max:50',
            'penerbit_alamat' => 'required|max:50',
            'penerbit_notelp' => 'required|max:13',
            'penerbit_email' => 'required|max:50'
        ]);

        $penerbit->update($validateData);

        return redirect()->route('penerbit.index')->with('succes', 'update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penerbit $penerbit)
    {
        $penerbit->delete();

        return redirect()->route('penerbit.index');
    }
}
