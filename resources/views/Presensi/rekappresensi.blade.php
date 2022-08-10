@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rekap Data Presensi</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('rekappresensi.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
        <th width="10%">No. Rekap Presensi</th>
        <th width="10%">Tanggal Rekap Presensi</th>
        <th width="10%">Gaji Masuk Sehari</th>
        <th width="10%">Gaji Masuk Setengah Hari</th>
        <th width="10%">Gaji Kehadiran</th>
        <th width="10%">NIK</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($rekappresensi as $item)
        <tr>
            <td>{{ $item->no_rekpres }}</td>
            <td>{{ $item->tgl_rekpres }}</td>
            <td>{{ $item->totalseh }}</td>
            <td>{{ $item->totalset }}</td>
            <td>{{ $item->totalmas }}</td>
            <td>{{ $item->nik }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
