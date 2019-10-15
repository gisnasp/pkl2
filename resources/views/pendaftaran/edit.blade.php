@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mengubah Pendaftaran</div>
                <div class="card-body">
                    <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Petugas</label>
                        <select name="ptg_nama" class="form-control">
                            @foreach($petugas as $data)
                        <option value="{{ $data->id}}">
                            {{ $data->ptg_nama}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama peminjam</label>
                        <select name="pjm_nama" class="form-control">
                            @foreach($peminjam as $data)
                        <option value="{{ $data->id}}">
                            {{ $data->pjm_nama}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kartu Tanggal Pembuatan</label>
                        <input class="form-control" type="date"  value="{{ $pendaftaran->kartu_pembuatan}}" name="kartu_pembuatan">
                    </div>
                    <div class="form-group">
                        <label for="">Kartu Tanggal Akhir</label>
                        <input class="form-control" type="date"  value="{{ $pendaftaran->kartu_akhir}}" name="kartu_akhir">
                    </div>
                    <div class="form-group">
                        <label for="">Kartu Status Aktif</label>
                        <select id="2" name="kartu_aktif" class="form-control">
                            <option value="Aktif">Aktif</option>
                            <option value="  Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('pendaftaran.index')}}" role="button">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection