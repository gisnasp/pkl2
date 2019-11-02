@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Membuat Data Peminjaman</div>
                <div class="card-body">
                    <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
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
                        <input class="form-control" type="date" name="kartu_pembuatan">
                    </div>
                    <div class="form-group">
                        <label for="">Kartu Tanggal Akhir</label>
                        <input class="form-control" type="date" name="kartu_akhir">
                    </div>
                    <div class="form-group">
                        <label for="">Kartu Status</label><br>
                        <input type="checkbox"  name="kartu_aktif" value="Aktif"  onchange="limit_checkbox(1,'check');"/><b> Aktif</b><br>
                        <input type="checkbox"  name="kartu_aktif" value="Tidak Aktif"  onchange="limit_checkbox(1,'check');"/><b> Tidak Aktif</b>
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

