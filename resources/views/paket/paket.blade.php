@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Paket</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('paket.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th width="10%">ID Paket</th>
            <th width="30%">Nama Paket</th>
            <th width="25%">Harga</th>
            <th width="25%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($paket as $pkt)
        <tr>
            <td>{{$pkt->id_paket}}</td>
            <td>{{$pkt->nm_paket}}</td>
            <td>{{$pkt->harga}}</td>
            <td align="center"><a href="{{route('paket.edit',[$pkt->id_paket])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Edit</a>
                <a href="/paket/hapus/{{$pkt->id_paket}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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