@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Penerbit</div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama penerbit</label>
                            <input class="form-control" value="{{ $penerbit->pbt_nama}}" type="text" name="pbt_nama" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Alamat penerbit</label>
                            <input class="form-control" value="{{ $penerbit->pbt_alamat}}" type="text" name="pbt_alamat" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon Penerbit</label>
                            <input class="form-control" value="{{ $penerbit->pbt_tlp}}" type="text" name="pbt_tlp" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{route('penerbit.index') }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection