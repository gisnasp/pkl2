@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input class="form-control" value="{{ $kategori->ktg_nama}}" type="text" name="ktg_nama" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{route('kategori.index') }}" class="btn btn-outline-info">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection