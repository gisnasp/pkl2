@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Buku</div>
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Kode Kategori</label>
                        <select name="bukus" class="form-control">
                            @foreach($buku as $data)
                        <option value="{{ $data->id}}">
                            {{ $data->kategoris_id}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kode Penerbit</label>
                        <input class="form-control" type="text" name="penerbits_id">
                    </div>
                    <div class="form-group">
                        <label for="">Judul Buku</label>
                        <input class="form-control" type="text" name="buku_judul">
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Buku</label>
                        <input class="form-control" type="text" name="buku_jumlah">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi Buku</label>
                        <input class="form-control" type="text" name="buku_deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="">Pengarang Buku</label>
                        <input class="form-control" type="text" name="buku_pengarang">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun Terbit Buku</label>
                        <input class="form-control" type="text" name="buku_terbit">
                    </div>
                  
                    <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                    <a name="" id="" class="btn btn-md btn-warning" href="{{route('buku.index')}}" role="button">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
