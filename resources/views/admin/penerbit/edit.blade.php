@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Penerbit</div>
                <div class="card-body">
                    <form action="{{ route('penerbit.update', $penerbit->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama penerbit</label>
                            <input class="form-control" value="{{ $penerbit->pbt_nama}}" type="text" name="pbt_nama">
                        </div>
                        <div class="form-group">
                            <label for=""> Alamat penerbit</label>
                            <input class="form-control" value="{{ $penerbit->pbt_alamat}}" type="text" name="pbt_alamat">
                        </div>
                        <div class="form-group">
                            <label for="">Telepon Penerbit</label>
                            <input class="form-control" value="{{ $penerbit->pbt_tlp}}" type="text" name="pbt_tlp">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                            </button>
                        </div>
                        <div class="form-group">
                            <a href="{{route('penerbit.index') }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection