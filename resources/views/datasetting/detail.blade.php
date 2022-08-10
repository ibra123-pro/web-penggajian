@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Jurnal Umum</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('cetakjurnal.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" method="PUT" target="_blank">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
            <th width="10%">No Transaksi</th>
            <th width="10%">Tanggal Jurnal</th>
            <th width="10%">No THP</th>
            <th width="10%">Memo</th>
            <th width="10%">Jumlah Debet</th>
            <th width="10%">Jumlah Kredit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jurnal as $kk)
        <tr>
            <td>{{$kk->no_jurnal}}</td>
            <td>{{$kk->tgl_jurnal}}</td>
            <td>{{$kk->no_thp}}</td>
            <td>{{$kk->keterangan}}</td> 
            <td>{{$kk->debet}}</td> 
            <td>{{$kk->kredit}}</td> 
        </tr>      
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
