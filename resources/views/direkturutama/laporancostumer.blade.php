@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Costumer</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporancostumer.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" method="PUT" target="_blank">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
        <th width="10%">No. Costumer</th>
        <th width="10%">Nama Sales</th>
        <th width="10%">Tanggal Transaksi</th>
        <th width="10%">Nama Costumer</th>
        <th width="10%">Nomor Telepon</th>
        <th width="10%">Jenis Paket</th>
        <th width="10%">Work Order</th>
        <th width="10%">Foto KTP & Foto KTP + Foto Diri Costumer</th>
        <th width="10%">Alamat</th>
        </tr>
    </thead>
    <tbody>
    @foreach($costumer as $cs)
    <tr>
        <td>{{$cs->no_costumer}}</td>
        <td>{{$cs->user->name}}</td>
        <td>{{$cs->tgl}}</td>
        <td>{{$cs->nm_costumer}}</td>        
        <td>{{$cs->telepon}}</td>
        <td>{{$cs->id_paket}}</td>
        <td>{{$cs->work}}</td>
        <td>{{$cs->ktp}}</td>
        <td>{{$cs->alamat}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
