@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mengubah Data Artikel</div>
                <div class="card-body">
                    <form action="{{ route('artikel.update', $artikel->id) }}" method="post"  enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Judul Buku</label>
                    <input type="text" name="jdl_buku" id="" class="form-control" aria-describedby="helpId" value="{{$artikel->jdl_buku}}">
                </div>
                <div class="form-group">
                    <label for="">Sinopsis</label>
                    <textarea name="sinopsis" id="texteditor" cols="30" row="5" class="form-control">{{$artikel->sinopsis}}</textarea>
                </div>
                 <div class="form-group">
                    <label for="">File</label>
                    <textarea name="file" id="texteditor" cols="30" row="5" class="form-control">{{$artikel->file}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Foto Buku</label><br>
                    <img src="{{ asset('assets/img/artikel/'.$artikel->jdl_foto) }}" alt="" height="200px" width="200px">
                    <input type="file" class="form-control" name="jdl_foto" id="jdl_foto">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                    Simpan Data
                    </button>
                </div>
                <div class="form-group">
                    <a href="{{route('artikel.index') }}" class="btn btn-outline-info">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
