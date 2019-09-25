@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
          <div class="col col-lg-11">
              <div class="card">
                  <div class="card-header">Mengubah Data Peminjam</div>
              <form action="{{ route('peminjam.update', $peminjam->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Nama Peminjam</label>
                    <input type="text" name="pjm_nama" id="" class="form-control" aria-describedby="helpId" value="{{$peminjam->pjm_nama}}">
                </div>
                <div class="form-group">
                    <label for="">Alamat Peminjam</label>
                    <textarea name="pjm_alamat" id="texteditor" cols="30" row="5" class="form-control">{{$peminjam->pjm_alamat}}</textarea>
                </div>
                <div class="form-group">
                        <label for="">Telepon Peminjam</label>
                        <textarea name="pjm_tlp" id="texteditor" cols="30" row="5" class="form-control">{{$peminjam->pjm_tlp}}</textarea>
                </div>
                <div class="form-group">
                        <label for="">Foto Peminjam</label>
                        <input type="file" name="pjm_foto" id="pjm_foto" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                    Simpan Data
                    </button>
                </div>
                <div class="form-group">
                    <a href="{{route('petugas.index') }}" class="btn btn-outline-info">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection