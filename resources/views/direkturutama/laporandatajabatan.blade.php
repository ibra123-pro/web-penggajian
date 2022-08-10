@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Jabatan</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporanjabatan.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" method="PUT" target="_blank">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
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
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection