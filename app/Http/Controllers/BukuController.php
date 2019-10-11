<?php

namespace App\Http\Controllers;

use App\buku;
use App\kategori;
use App\penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('admin.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        return view('admin.buku.create', compact('buku', 'kategori', 'penerbit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = new Buku();
        $buku->kategoris_id = $request->ktg_nama;
        $buku->penerbits_id = $request->pbt_nama;
        $buku->buku_judul = $request->buku_judul;
        $buku->buku_jumlah = $request->buku_jumlah;
        $buku->buku_deskripsi = $request->buku_deskripsi;
        $buku->buku_pengarang = $request->buku_pengarang;
        $buku->buku_terbit = $request->buku_terbit;

        $buku->save();
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        $buku = Buku::findOrFail($id);
        return view('admin.buku.show', compact('kategori', 'penerbit', 'buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        $buku = Buku::findOrFail($id);
        return view('admin.buku.edit', compact('kategori', 'penerbit', 'buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->kategoris_id = $request->ktg_nama;
        $buku->penerbits_id = $request->pbt_nama;
        $buku->buku_judul = $request->buku_judul;
        $buku->buku_jumlah = $request->buku_jumlah;
        $buku->buku_deskripsi = $request->buku_deskripsi;
        $buku->buku_pengarang = $request->buku_pengarang;
        $buku->buku_terbit = $request->buku_terbit;

        $buku->save();
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = buku::destroy($id);
        return redirect()->route('buku.index');
    }
}
