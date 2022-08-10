@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Karyawan</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporankaryawan.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" method="PUT" target="_blank">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
        <th width="7%">NIK</th>
        <th width="10%">Nama Karyawan</th>
        <th width="10%">Kode Jabatan</th>
        <th width="10%">Jenis Kelamin</th>
        <th width="10%">Tanggal Lahir</th>
        <th width="10%">Agama</th>
        <th width="15%">Alamat</th>
        <th width="10%">Nomor Telepon</th>
        </tr>
    </thead>
    <tbody>
    @foreach($karyawan as $krw)
    <tr>
        <td>{{$krw->nik}}</td>
        <td>{{$krw->nm_karyawan}}</td>
        <td>{{$krw->kd_jabatan}}</td>
        <td>{{$krw->jk}}</td>        
        <td>{{$krw->tgl_lahir}}</td>
        <td>{{$krw->agama}}</td>
        <td>{{$krw->alamat}}</td>
        <td>{{$krw->telepon}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
