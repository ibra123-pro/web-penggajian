@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rekap Data Pemasangan</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('rekappemasangan.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
        <th width="10%">No. Rekap Pemasangan</th>
        <th width="10%">Tanggal Rekap Pemasangan</th>
        <th width="10%">Gaji Pemasangan</th>
        <th width="10%">NIK</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($rekappemasangan as $item)
        <tr>
            <td>{{ $item->no_rekmas }}</td>
            <td>{{ $item->tgl_rekmas }}</td>
            <td>{{ $item->total }}</td>
            <td>{{ $item->nik }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
