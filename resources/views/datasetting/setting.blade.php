@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Investasi</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('laporaninvestasi.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Cetak
</a>
<a href="{{route('investasi.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
            <th width="10%">Tanggal Investasi</th>
            <th width="10%">Posisi Investasi</th>
            <th width="10%">Tersimpan</th>
            <th width="10%">Jenis Investasi</th>
            <th width="10%">Nama Investasi</th>
            <th width="10%">Sumber Pemasukan</th>
            <th width="10%">Keterangan</th>
            <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($investasi as $inv)
        <tr>
            <td>{{$inv->tgl}}</td>
            <td>{{$inv->ps_investasi}}</td>
            <td align="right">Rp. {{$inv->tersimpan}}</td>
            <td>{{$inv->jenis}}</td>
            <td>{{$inv->nm_investasi}}</td>
            <td>{{$inv->sumber}}</td>
            <td>{{$inv->keterangan}}</td>
            <td align="center">
                <a href="{{route('investasi.edit',[$inv->id])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Edit</a>
                <a href="/investasi/hapus/{{$inv->id}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                <i class="fas fa-trash-alt fa-sm text-white-50"></i>Hapus</a>
            </td>
    @endforeach
        </tr>
    </tbody>
    </table>
</div>
</div>
</div>
@endsection