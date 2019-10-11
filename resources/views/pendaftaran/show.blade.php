@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mengubah Pendaftaran</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Petugas</label>
                        <select name="ptg_nama" class="form-control" disabled>
                            @foreach($petugas as $data)
                        <option value="{{ $data->id}}">
                            {{ $data->ptg_nama}}
                        </option >
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama peminjam</label>
                        <select name="pjm_nama" class="form-control"disabled>
                            @foreach($peminjam as $data)
                        <option value="{{ $data->id}}" >
                            {{ $data->pjm_nama}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kartu Tanggal Pembuatan</label>
                        <input class="form-control" type="date"  value="{{ $pendaftaran->kartu_pembuatan}}" name="kartu_pembuatan" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kartu Tanggal Akhir</label>
                        <input class="form-control" type="date"  value="{{ $pendaftaran->kartu_akhir}}" name="kartu_akhir" readonly>
                    </div>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('pendaftaran.index')}}" role="button">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
