@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Kasbon</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporanpengajuankasbon.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" method="PUT" target="_blank">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak 
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
            <th width="15%">Nama Pengajuan Kasbon</th>
            <th width="10%">Tanggal Pengajuan</th>
            <th width="10%">Jam Pengajuan</th>   
            <th width="15%">Foto Pengajuan</th>
            <th width="10%">Biaya Pengajuan</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($kasbon as $item)
        <tr>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->tgl }}</td>
            <td>{{ $item->jam }}</td>
            <td>{{ $item->file }}</td>
            <td>{{ $item->biaya }}</td>
        </tr>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
