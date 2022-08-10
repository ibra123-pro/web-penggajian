@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan THP</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporanthp.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
    <tr align="center">
        <th width="5%">No. THP</th>
        <th width="5%">Tanggal THP</th>
        <th width="5%">Gaji Bersih</th>
        <th width="5%">Kasbon</th>
        <th width="5%">Bayar Kasbon</th>
        <th width="5%">Sisa Kasbon</th>
        <th width="5%">THP</th>
        <th width="5%">NIK</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($thp as $item)
        <tr>
            <td>{{ $item->no_thp }}</td>
            <td>{{ $item->tgl_thp }}</td>
            <td>{{ $item->subgaber }}</td>
            <td>{{ $item->subkasbon }}</td>
            <td>{{ $item->subbaykas }}</td>
            <td>{{ $item->subsiskas }}</td>
            <td>{{ $item->subthp }}</td>
            <td>{{ $item->nik }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
