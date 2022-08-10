@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Pemasangan</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporanpemasangan.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" method="PUT" target="_blank">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
        <th width="10%">No. Pemasangan</th>
        <th width="10%">Nama Teknisi</th>
        <th width="10%">Tanggal Transaksi</th>
        <th width="10%">No. Costumer</th>
        <th width="10%">Berita Acara</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pemasangan as $pms)
    <tr>
        <td>{{$pms->no_pemasangan}}</td>
        <td>{{$pms->user->name}}</td>
        <td>{{$pms->tgl}}</td>
        <td>{{$pms->no_costumer}}</td> 
        <td>{{$pms->berac}}</td> 
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
