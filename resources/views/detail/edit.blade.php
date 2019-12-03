@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Membuat Data Detail</div>
                    <div class="card-body">
                    <form action="{{ route('detail.update', $detail->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                    
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
                        <label for="">Judul Buku</label>
                        <select name="buku_judul" class="form-control">
                            @foreach($buku as $data)
                        <option value="{{ $data->id}}">
                            {{ $data->buku_judul}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Detail Tanggal Kembali</label>
                        <input class="form-control" type="date" value="{{ $detail->detail_tgl_kembali}}" name="detail_tgl_kembali">
                    </div>
                    <div class="form-group">
                        <label for="">Detail Denda</label>
                        <input class="form-control" type="text" value="{{ $detail->detail_denda}}" name="detail_denda">
                    </div>
                   
                    <div class="form-group">
                        <label for="">Status Kembali</label><br>
                        <input type="checkbox"  name="detail_kembali" value="Dipinjam"  onchange="limit_checkbox(1,'check');"/><b> Dipinjam</b><br>
                        <input type="checkbox"  name="detail_kembali" value="Dikembalikan"  onchange="limit_checkbox(1,'check');"/><b> Dikembalikan</b> 
                    </div>
                <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('detail.index')}}" role="button">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection