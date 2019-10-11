@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mengubah Data Buku</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <select name="ktg_nama" class="form-control" disabled>
                                @foreach($kategori as $data)
                            <option value="{{ $data->id}}">
                                {{ $data->ktg_nama}}
                            </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Penerbit</label>
                            <select name="pbt_nama" class="form-control" disabled>
                                @foreach($penerbit as $data)
                            <option value="{{ $data->id}}">
                                {{ $data->pbt_nama}}
                            </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Judul Buku</label>
                            <input class="form-control" type="text"  value ="{{ $buku->buku_judul }}"  name="buku_judul" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Buku</label>
                            <input class="form-control" type="text" value ="{{ $buku->buku_jumlah }}"  name="buku_jumlah" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi Buku</label>
                            <input class="form-control" type="text" value ="{{ $buku->buku_deskripsi }}" name="buku_deskripsi" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Pengarang Buku</label>
                            <input class="form-control" type="text" value ="{{ $buku->buku_pengarang }}" name="buku_pengarang" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Terbit Buku</label>
                            <input class="form-control" type="date" value ="{{ $buku->buku_terbit }}" name="buku_terbit" readonly>
                        </div>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('buku.index')}}" role="button">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
