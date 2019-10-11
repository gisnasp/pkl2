<?php

namespace App\Http\Controllers;

use App\peminjaman;
use App\petugas;
use App\peminjam;
use Illuminate\Http\Request;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = peminjaman::all();
        return view('admin.peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $petugas = petugas::all();
        $peminjam = peminjam::all();
        $peminjaman = peminjaman::all();
        return view('admin.peminjaman.create',compact('petugas','peminjam','peminjaman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjaman = new peminjaman();
        $peminjaman->petugas_id = $request->ptg_nama;
        $peminjaman->peminjams_id = $request->pjm_nama;
        $peminjaman->pjm_tgl = $request->pjm_tgl;
        $peminjaman->pjm_tglkembali = $request->pjm_tglkembali;
       
        $peminjaman->save();
        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $petugas = Petugas::all();
        $peminjam = Peminjam::all();
        return view('admin.peminjaman.show', compact('peminjaman','petugas','peminjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        $petugas = Petugas::all();
        $peminjam = Peminjam::all();
        return view('admin.peminjaman.edit',compact('peminjaman','petugas','peminjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peminjaman = peminjaman::findOrFail($id);
        $peminjaman->petugas_id = $request->ptg_nama;
        $peminjaman->peminjams_id = $request->pjm_nama;
        $peminjaman->pjm_tgl = $request->pjm_tgl;
        $peminjaman->pjm_tglkembali = $request->pjm_tglkembali;
       
        $peminjaman->save();
        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = peminjaman::destroy($id);
        return redirect()->route('peminjaman.index');
    }
}
?>