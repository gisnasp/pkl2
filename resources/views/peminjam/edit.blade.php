@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mengubah Data Peminjam</div>
                <div class="card-body">
                    <form action="{{ route('peminjam.update', $peminjam->id) }}" method="post"  enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
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
                    <label for="">Foto Peminjam</label><br>
                    <img src="{{ asset('assets/img/peminjam/'.$peminjam->pjm_foto) }}" alt="" height="200px" width="200px">
                    <input type="file" class="form-control" name="pjm_foto" id="pjm_foto">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                    Simpan Data
                    </button>
                </div>
                <div class="form-group">
                    <a href="{{route('peminjam.index') }}" class="btn btn-outline-info">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection