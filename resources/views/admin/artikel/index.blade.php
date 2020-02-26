@extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Data Tabel Artikel</h5><br>
                <center>
                    <a href="{{ route('artikel.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Judul Buku</th>
                            <th>Sinopsis</th>
                            <th>File</th>
                            <th><center>Foto Buku</center></th>
                            <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($artikel as $data)
                            <tr>
                            <td>{{ $no++ }}</td>
                                <td>{{ $data->jdl_buku}}</td>
                                <td>{{ $data->sinopsis}}</td>
                                <td>{{ $data->file}}</td>
                                <td><center><img src="{{ asset('assets/img/artikel/'.$data->jdl_foto)}}" alt="" height="200px" width="200px"></center></td>
                                <td>
                                    <center><form action="{{route('artikel.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
                                    <a href="{{route('artikel.edit', $data->id)}}"
                                        class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('artikel.show', $data->id) }}"
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
