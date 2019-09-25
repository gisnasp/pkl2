@extends('layouts.app')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tabel Peminjam</h5><br>
                <center>
                    <a href="{{ route('peminjam.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Nama Peminjam</th>
                            <th>Alamat Peminjam</th>
                            <th>Telepon Peminjam</th>
                            <th><center>Foto Peminjam</center></th>
                            <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($peminjam as $data)
                            <tr>
                            <td>{{ $no++ }}</td>
                                <td>{{ $data->pjm_nama}}</td>
                                <td>{{ $data->pjm_alamat}}</td>
                                <td>{{ $data->pjm_tlp}}</td>
                                <td><img src="{{ asset('assets/img/peminjam/'.$data->pjm_foto)}}" alt="" height="200px" width="300px"></td>
                                <td>
                                    <form action="{{route('peminjam.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('peminjam.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('peminjam.show', $data->id) }}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
										<input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                    </td>
									</form>
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