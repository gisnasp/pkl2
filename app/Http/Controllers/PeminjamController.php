<?php

namespace App\Http\Controllers;

use App\peminjam;
use File;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjam = Peminjam::all();
        return view('peminjam.index', compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjam = Peminjam::all();
        return view('peminjam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjam = new Peminjam();
        $peminjam->pjm_nama = $request->pjm_nama;
        $peminjam->pjm_alamat = $request->pjm_alamat;
        $peminjam->pjm_tlp = $request->pjm_tlp;

        if($request->hasFile('pjm_foto')) {
            $file = $request->file('pjm_foto');
            $Path = public_path() .'/assets/img/peminjam/';
            $filename ='_'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $peminjam->pjm_foto = $filename;
        }
       
        $peminjam->save();
        return redirect()->route('peminjam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjam = Peminjam::findOrFail($id);
        return view('peminjam.show', compact('peminjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjam = Peminjam::findOrFail($id);
        return view('peminjam.edit',compact('peminjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peminjam = Peminjam::findOrFail($id);
        $peminjam->pjm_nama = $request->pjm_nama;
        $peminjam->pjm_alamat = $request->pjm_alamat;
        $peminjam->pjm_tlp = $request->pjm_tlp;

        if($request->hasFile('pjm_foto')) {
            $file = $request->file('pjm_foto');
            $Path = public_path() .'/assets/img/peminjam/';
            $filename ='_'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $peminjam->pjm_foto = $filename;
        }
       
        $peminjam->save();
        return redirect()->route('peminjam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjam = Peminjam::destroy($id);
        return redirect()->route('peminjam.index');
    }
}
