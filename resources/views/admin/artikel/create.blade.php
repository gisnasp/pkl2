@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Membuat Data Artikel</div>
                <div class="card-body">
                    <form action="{{ route('artikel.store') }}" method="post" id="dataForm" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Judul Buku</label>
                        <input class="form-control" type="text" name="jdl_buku">
                    </div>
                    <div class="form-group">
                        <label for="">Sinopsis</label>
                        <input class="form-control" type="text" name="sinopsis">
                    </div>
                    <div class="form-group">
                        <label for="">File</label>
                        <input class="form-control" type="file" name="file" id="file">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Buku</label>
                        <input class="form-control" type="file" name="jdl_foto" id="jdl_foto">
                    </div>
                <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('artikel.index')}}" role="button">kembali</a>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection

@section('js')
    <script>
        $('#dataForm').trigger('reset');
    </script>
@endsection
