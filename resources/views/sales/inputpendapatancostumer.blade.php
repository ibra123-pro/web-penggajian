@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\CostumerController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Input Data Costumer</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="no_costumer">No. Costumer</label>
                <input type="text" name="no_costumer" value="{{ $formatnya }}" id="no_costumer" class="form-control" maxlength="5" readonly>
            </div>
            <div class="col-md-5">
                <label for="nm_costumer">Nama Costumer</label>
                <input type="text" name="nm_costumer" id="nm_costumer" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="telepon">Nomor Telepon</label>
                <input type="number" name="telepon" id="telepon" class="form-control" required>
            </div>
            <div class="col-md-5">
                <label for="id_paket">Jenis Paket</label>
                <select name="id_paket" id="id_paket" class="form-control" required>
                    <option value="">Pilih Paket</option>
                    @foreach ($paket as $pkt)
                    <option value="{{$pkt->id_paket}}">{{ $pkt->id_paket }} - {{ $pkt->nm_paket }} - {{ $pkt->harga }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="work">Work Order</label>
                <textarea name="work" id="work" class="form-control" required></textarea>
            </div>
            <div class="col-md-5">
                <label for="ktp">Foto KTP & Foto KTP + Foto Diri Costumer</label>
                <textarea name="ktp" id="ktp" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
