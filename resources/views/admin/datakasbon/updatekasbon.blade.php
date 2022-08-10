@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Update Kasbon</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('updatekasbon.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
        <th width="10%">Nomor Update Kasbon</th>
        <th width="10%">NIK</th>
        <th width="10%">Total Pengajuan Kasbon</th>
        <th width="10%">Total Biaya Kasbon</th>
        <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($updatekasbon as $item)
        <tr>
            <td>{{ $item->no_upkas }}</td>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->totpen }}</td>
            <td>{{ $item->baykas }}</td>
            <td align="center"><a href="{{route('updatekasbon.edit',[$item->no_upkas])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class="fas fa-edit fa-sm text-white-50"></i>Edit</a>
            </td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection
