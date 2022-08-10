@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data User</h1>
</div><hr>
<div class="card-header py-3" align="right">
<a href="{{route('user.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead class="thead-dark">
        <tr align="center">
          <th width="5%">User Id</th>
          <th width="25%">Nama</th>
          <th width="20%">Email</th>
          <th width="10%">Foto</th>
          <th width="15%">Roles/Akses</th>
          <th width="25%">Aksi</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($user as $row)
        <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td> <img width="50%" src="{{asset('storage/' . $row->foto)}}"  ></td>
        @foreach ($row->roles as $r)
         <td>
           {{$r->id}}
          </td>
        @endforeach
        <td align="center">
            <a href="{{route( 'user.edit' ,[$row->id])}}"
                class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Edit
            </a>
            <a href="/user/hapus/{{ $row->id }}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
              <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
</div>
@endsection