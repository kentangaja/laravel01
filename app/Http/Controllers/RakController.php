<?php

namespace App\Http\Controllers;

use App\Models\rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allRak = rak::simplePaginate(5);
        return view('rak.index', compact('allRak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'rak_nama' => 'required|max:20',
            'rak_lokasi' => 'required|max:50',
            'rak_kapasitas' => 'required'
        ]);

        rak::create($validateData);

        return redirect()->route('rak.index')->with('succes', 'pembuatan data berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(rak $rak)
    {
        return view('rak.index', compact('rak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rak $rak)
    {
        return view('rak.edit', compact('rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rak $rak)
    {
        $validateData = $request->validate([
            'rak_nama' => 'required|max:20',
            'rak_lokasi' => 'required|max:50',
            'rak_kapasitas' => 'required'
        ]);

        $rak->update($validateData);

        return redirect()->route('rak.index')->with('succes', 'update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rak $rak)
    {
        $rak->delete();

        return redirect()->route('rak.index');
    }
}
