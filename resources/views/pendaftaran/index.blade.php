@extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tabel pendaftaran</h5><br>
                <center>
                    <a href="{{ route('pendaftaran.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama Petugas</th>
                                <th>Nama Peminjam</th>
                                <th>Kartu Tanggal Pembuatan</th>
                                <th>Kartu Tanggal Akhir</th>
                            <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($pendaftaran as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->petugas->ptg_nama}}</td>
                                <td>{{ $data->peminjams->pjm_nama}}</td>
                                <td>{{ $data->kartu_pembuatan}}</td>
                                <td>{{ $data->kartu_akhir}}</td>
                                <td>
                                    <center><form action="{{route('pendaftaran.destroy', $data->id)}}" method="post">
                                         {{csrf_field()}}
                                     <a href="{{route('pendaftaran.edit', $data->id)}}"
                                         class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                     </a>
                                     <a href="{{route('pendaftaran.show', $data->id) }}"
                                         class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
                                     </a>
                                         <input type="hidden" name="_method" value="DELETE">
                                         <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                     </form>
                                 </center>
                                 </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection