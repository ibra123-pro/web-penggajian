@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pemasangan</h1>
</div>
<hr>
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
