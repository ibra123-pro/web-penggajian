@extends('layouts.layout')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Paket</h1>
</div>
<hr>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr>
            <th width="25%">ID Paket</th>
            <th width="30%">Nama Paket</th>
            <th width="25%">Harga</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($paket as $pkt)
        <tr>
            <td>{{$pkt->id_paket}}</td>
            <td>{{$pkt->nm_paket}}</td>
            <td>{{$pkt->harga}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection