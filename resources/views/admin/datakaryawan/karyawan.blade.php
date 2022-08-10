@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('karyawan.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
        <th width="5%">NIK</th>
        <th width="5%">Nama Karyawan</th>
        <th width="5%">Kode Jabatan</th>
        <th width="5%">Tunjangan</th>
        <th width="5%">Jenis Kelamin</th>
        <th width="5%">Tanggal Lahir</th>
        <th width="5%">Agama</th>
        <th width="5%">Alamat</th>
        <th width="5%">Nomor Telepon</th>
        <th width="5%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($karyawan as $krw)
    <tr>
        <td>{{$krw->nik}}</td>
        <td>{{$krw->nm_karyawan}}</td>
        <td>{{$krw->kd_jabatan}}</td>
        <td>{{$krw->tunjangan}}</td>
        <td>{{$krw->jk}}</td>        
        <td>{{$krw->tgl_lahir}}</td>
        <td>{{$krw->agama}}</td>
        <td>{{$krw->alamat}}</td>
        <td>{{$krw->telepon}}</td>
        <td align="center"><a href="{{route('karyawan.edit',[$krw->nik])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
        <i class="fas fa-edit fa-sm text-white-50"></i>Edit</a>
        <a href="/karyawan/hapus/{{$krw->nik}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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
