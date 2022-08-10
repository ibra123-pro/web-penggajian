@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\InvestasiController@store') }}" method="post">
{{ csrf_field() }}
<fieldset>
    <legend>Input Investasi</legend>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Tangggal Investasi</label>
			<input type="date" name="tgl" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Posisi Investasi</label>
			<select id="ps_investasi" name="ps_investasi" class="form-control" required>
                <option value="">--Pilih Posisi Investasi--</option>
                <option value="Investasi Bibit">Investasi Bibit</option>
                <option value="Investasi Stockbit">Investasi Stockbit</option>
                <option value="Investasi Pluang">Investasi Pluang</option>
                <option value="Investasi Go Trade">Investasi Go Trade</option>
            </select>
        </div>
    </div>
    <div class="from-group row">
        <div class="col-md-10">
            <label>Tersimpan</label>
			<input type="number" name="tersimpan" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Jenis Investasi</label>
			<select id="jenis" name="jenis" class="form-control" required>
                <option value="">--Pilih Jenis Investasi--</option>
                <option value="RDPU">RDPU</option>
                <option value="RDO">RDO</option>
                <option value="RDS">RDS</option>
                <option value="Crypto">Crypto</option>
                <option value="Emas">Emas</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Nama Investasi</label>
			<input type="text" name="nm_investasi" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Sumber Pemasukan</label>
            <select id="sumber" name="sumber" class="form-control" required>
                <option value="">--Pilih Sumber Pemasukan--</option>
                <option value="Tip">Tip</option>
                <option value="Ojol/Opang">Ojol/Opang</option>
                <option value="Programmer">Programmer</option>
                <option value="Pekerjaan">Pekerjaan</option>
                <option value="Insentif Ojol">Insentif Ojol</option>
                <option value="Tabungan Biasa">Tabungan Biasa</option>
                <option value="OVO">OVO</option>
                <option value="BCA">BCA</option>
                <option value="Gopay">Gopay</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" >
        </div>
    </div>
    <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
