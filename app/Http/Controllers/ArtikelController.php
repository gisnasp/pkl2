<?php

namespace App\Http\Controllers;


use App\Artikel;
use File;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel = Artikel::all();
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = new Artikel();
        $artikel->jdl_buku = $request->jdl_buku;
        $artikel->sinopsis = $request->sinopsis;
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $Path = public_path() .'/assets/file/artikel/';
            $filename ='_'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $artikel->file = $filename;
        }

        if($request->hasFile('jdl_foto')) {
            $file = $request->file('jdl_foto');
            $Path = public_path() .'/assets/img/artikel/';
            $filename ='_'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $artikel->jdl_foto = $filename;
        }

        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.edit',compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->jdl_buku = $request->jdl_buku;
        $artikel->sinopsis = $request->sinopsis;
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $Path = public_path() .'/assets/file/artikel/';
            $filename ='_'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $artikel->file = $filename;
        }

        if($request->hasFile('jdl_foto')) {
            $file = $request->file('jdl_foto');
            $Path = public_path() .'/assets/img/artikel/';
            $filename ='_'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $artikel->jdl_foto = $filename;
        }

        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::destroy($id);
        return redirect()->route('artikel.index');
    }
}
