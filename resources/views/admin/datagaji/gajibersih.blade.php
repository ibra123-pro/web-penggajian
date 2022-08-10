@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Gaji Bersih</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('gajibersih.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
        <th width="5%">No. Gaji Bersih</th>
        <th width="5%">Tanggal Gaji Bersih</th>
        <th width="5%">Gaji Kotor</th>
        <th width="5%">BPJS Kes. Perusahaan</th>
        <th width="5%">BPJS Kes. Karyawan</th>
        <th width="5%">BPJS TK Perusahaan</th>
        <th width="5%">BPJS TK Karyawan</th>
        <th width="5%">Gaji Bersih</th>
        <th width="5%">NIK</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($gajibersih as $item)
        <tr>
            <td>{{ $item->no_gaber }}</td>
            <td>{{ $item->tgl_gaber }}</td>
            <td>{{ $item->subgakot }}</td>
            <td>{{ $item->subbpjskeper }}</td>
            <td>{{ $item->subbpjskekar }}</td>
            <td>{{ $item->subbpjstkper }}</td>
            <td>{{ $item->subbpjstkkar }}</td>
            <td>{{ $item->subgaber }}</td>
            <td>{{ $item->nik }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
