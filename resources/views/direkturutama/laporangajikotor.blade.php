@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Gaji Kotor</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporangajikotor.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" >
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
    <tr align="center">
        <th width="5%">No. Gaji Kotor</th>
        <th width="5%">Tanggal Gaji Kotor</th>
        <th width="5%">Gaji Pokok</th>
        <th width="5%">Pencapaian</th>
        <th width="5%">Reward</th>
        <th width="5%">Pemasangan</th>
        <th width="5%">Tunjangan</th>
        <th width="5%">Kehadiran</th>
        <th width="5%">Gaji Kotor</th>
        <th width="5%">NIK</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($gajikotor as $item)
        <tr>
            <td>{{ $item->no_gakot }}</td>
            <td>{{ $item->tgl_gakot }}</td>
            <td>{{ $item->subgapok }}</td>
            <td>{{ $item->subpen }}</td>
            <td>{{ $item->subrew }}</td>
            <td>{{ $item->subtotal }}</td>
            <td>{{ $item->subtunjangan }}</td>
            <td>{{ $item->submas }}</td>
            <td>{{ $item->subgakot }}</td>
            <td>{{ $item->nik }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
