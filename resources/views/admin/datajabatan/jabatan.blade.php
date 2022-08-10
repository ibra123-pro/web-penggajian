@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Jabatan</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('jabatan.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th width="10%">Kode Jabatan</th>
            <th width="10%">Nama Jabatan</th>
            <th width="10%">Gaji Pemasangan</th>
            <th width="10%">Gaji Pencapaian</th>
            <th width="10%">Gaji Masuk Sehari</th>
            <th width="10%">Gaji Masuk Setengah Hari</th>
            <th width="10%">Gaji Pokok</th>
            <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($jabatan as $jbt)
        <tr>
            <td>{{$jbt->kd_jabatan}}</td>
            <td>{{$jbt->nm_jabatan}}</td>
            <td>{{$jbt->baypem}}</td>
            <td>{{$jbt->baypen}}</td>
            <td>{{$jbt->bayseh}}</td>
            <td>{{$jbt->bayset}}</td>
            <td>{{$jbt->gapok}}</td>
            <td align="center"><a href="{{route('jabatan.edit',[$jbt->kd_jabatan])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Edit</a>
                <a href="/jabatan/hapus/{{$jbt->kd_jabatan}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                <i class="fas fa-trash-alt fa-sm text-white-50"></i>Hapus</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection