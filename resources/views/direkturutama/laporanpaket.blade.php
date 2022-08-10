@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Paket</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporanpaket.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" method="PUT" target="_blank">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th width="10%">ID Paket</th>
            <th width="30%">Nama Paket</th>
            <th width="25%">Harga</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($paket as $pkt)
        <tr>
            <td>{{$pkt->id_paket}}</td>
            <td>{{$pkt->nm_paket}}</td>
            <td>{{$pkt->harga}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection