@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Akun</h1>
</div><hr>
<div class="card-header py-3" align="right">
<a href="{{route('akun.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead class="thead-dark">
        <tr align="center">
          <th width="10%">Nomor Akun</th>
          <th width="10%">Nama Akun</th>
          <th width="10%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($akun as $akn)
        <tr>
        <td>{{$akn->no_akun}}</td>
        <td>{{$akn->nm_akun}}</td>
        <td align="center">
            <a href="{{route( 'akun.edit' ,[$akn->no_akun])}}"
                class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Edit
            </a>
            <a href="/akun/hapus/{{ $akn->no_akun }}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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