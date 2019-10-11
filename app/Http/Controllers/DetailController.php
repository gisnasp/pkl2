<?php

namespace App\Http\Controllers;

use App\detail;
use App\buku;
use App\peminjam;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Detail::all();
        return view('admin.detail.index', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = buku::all();
        $peminjam = peminjam::all();
        $detail = detail::all();
        return view('admin.detail.create',compact('detail','peminjam','buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = new detail();
        $detail->peminjams_id = $request->pjm_nama;
        $detail->bukus_id = $request->buku_judul;
        $detail->detail_tgl_kembali = $request->detail_tgl_kembali;
        $detail->detail_denda = $request->detail_denda;
        $detail->detail_kembali = $request->detail_kembali;
       
        $detail->save();
        return redirect()->route('detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = detail::findOrFail($id);
        $buku = buku::all();
        $peminjam = peminjam::all();
        return view('admin.detail.show',compact('detail','buku','peminjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $detail = detail::findOrFail($id);
        $buku = buku::all();
        $peminjam = peminjam::all();
        return view('admin.detail.edit',compact('detail','buku','peminjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detail = detail::findOrFail($id);
        $detail->peminjams_id = $request->pjm_nama;
        $detail->bukus_id = $request->buku_judul;
        $detail->detail_tgl_kembali = $request->detail_tgl_kembali;
        $detail->detail_denda = $request->detail_denda;
        $detail->detail_kembali = $request->detail_kembali;
       
        $detail->save();
        return redirect()->route('detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = detail::destroy($id);
        return redirect()->route('detail.index');
    }
}
