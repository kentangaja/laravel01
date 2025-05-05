<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\users;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPeminjaman = Peminjaman::simplePaginate(5);
        return view('peminjaman.index', compact('allPeminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Users::select('id', 'user_username')->get();
        return view('peminjaman.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'user_id' => 'required',
            'peminjaman_tglpinjam' => 'required',
            'peminjaman_tglkembali' => 'required',
            'peminjaman_statuskembali' => 'required',
            'peminjaman_note' => 'required|max:100',
            'peminjaman_denda' => 'required',
        ]);

        Peminjaman::create($validateData);

        return redirect()->route('peminjaman.index')->with('succes', 'pembuatan data berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(peminjaman $peminjaman)
    {
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(peminjaman $peminjaman)
    {
        $user = Users::select('id', 'user_username')->get();
        return view('peminjaman.edit', compact('user', 'peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, peminjaman $peminjaman)
    {
        $validateData = $request->validate([
            'user_id' => 'required',
            'peminjaman_tglpinjam' => 'required',
            'peminjaman_tglkembali' => 'required',
            'peminjaman_statuskembali' => 'required',
            'peminjaman_note' => 'required|max:100',
            'peminjaman_denda' => 'required',
        ]);

        $peminjaman->update($validateData);

        return redirect()->route('peminjaman.index')->with('success', 'update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('peminjaman.index');
    }
}
