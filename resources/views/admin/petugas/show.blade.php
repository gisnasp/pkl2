@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Petugas</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama petugas</label>
                        <input class="form-control" value="{{ $petugas->ptg_nama}}" type="text" name="ptg_nama" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{route('petugas.index') }}" class="btn btn-outline-info">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection