@extends('layouts.app')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables Buku</h5><br>
                <center>
                    <a href="{{ route('buku.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th> Kode Kategori</th>
                            <th> Kode Penerbit </th>
                            <th>Judul Buku</th>
                            <th>Jumlah Buku</th>
                            <th>Deskripsi Buku</th>
                            <th>Pengarang Buku</th>
                            <th>Tahun Terbit Buku</th>
                            <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($buku as $data)
                            <tr>
                            <td>{{ $no++ }}</td>
                                <td>{{ $data->kategoris_id}}</td>
                                <td>{{ $data->penerbits_id}}</td>
                                <td>{{ $data->buku_judul}}</td>
                                <td>{{ $data->buku_jumlah}}</td>
                                <td>{{ $data->buku_deskripsi}}</td>
                                <td>{{ $data->buku_pengarang}}</td>
                                <td>{{ $data->buku_terbit}}</td>
                                    <form action="{{route('buku.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('buku.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('buku.show', $data->id) }}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
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