@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Membuat Data Penerbit</div>
                    <div class="card-body">
                    <form action="{{ route('penerbit.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Penerbit</label>
                        <input class="form-control" type="text" name="pbt_nama">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Penerbit</label>
                        <textarea class="form-control" rows="2" id="textarea" name="pbt_alamat">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Telepon Penerbit</label>
                        <input class="form-control" type="text" name="pbt_tlp">
                    </div>
                <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('penerbit.index')}}" role="button">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
