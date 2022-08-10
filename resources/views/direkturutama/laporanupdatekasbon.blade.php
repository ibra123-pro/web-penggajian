@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Update Kasbon</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporanupdatekasbon.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" method="PUT" target="_blank">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
        <th width="10%">NIK</th>
        <th width="10%">Total Pengajuan Kasbon</th>
        <th width="10%">Total Biaya Kasbon</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($updatekasbon as $item)
        <tr>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->totpen }}</td>
            <td>{{ $item->baykas }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
