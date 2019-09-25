<?php

namespace App\Http\Controllers;

use App\buku;
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
        // return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = buku::all();
        return view('admin.buku.create', compact('buku'));
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
        $buku->bukus_id = $request->bukus_id;
        $buku->penerbits_id = $request->penerbits_id;
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
    public function show(buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(buku $buku)
    {
        //
    }
}
