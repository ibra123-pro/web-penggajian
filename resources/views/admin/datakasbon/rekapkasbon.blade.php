@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rekap Data Kasbon</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('rekapkasbon.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
        <th width="10%">No. Rekap Kasbon</th>
        <th width="10%">Tanggal Rekap Kasbon</th>
        <th width="10%">Total Pengajuan Kasbon</th>
        <th width="10%">Total Biaya Kasbon</th>
        <th width="10%">NIK</th>
        <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($rekapkasbon as $item)
        <tr>
            <td>{{ $item->no_rekkas }}</td>
            <td>{{ $item->tgl_rekkas }}</td>
            <td>{{ $item->totpen }}</td>
            <td>{{ $item->baykas }}</td>
            <td>{{ $item->nik }}</td>
            <td align="center">
                <a href="/rekapkasbon/hapus/{{$item->no_rekkas}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                <i class="fas fa-trash-alt fa-sm text-white-50"></i>Hapus</a>
            </td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
