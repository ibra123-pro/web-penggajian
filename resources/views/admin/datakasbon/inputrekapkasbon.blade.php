@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\RekapkasbonController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Input Rekap Kasbon</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="no_rekkas">No Rekap Kasbon</label> 
                <input type="text" name="no_rekkas" value="{{ $formatnya }}" class="form-control" id="exampleFormControlInput1" readonly>              
            </div>
            <div class="col-md-5">
                <label for="tgl_rekkas">Tanggal Rekap Kasbon</label>
                <input type="date" min="1" name="tgl_rekkas" id="tgl_rekkas" class="form-control" id="exampleFormControlInput1" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="totpen">Total Pengajuan Kasbon</label>
                <input type="number" name="totpen" id="totpen" class="form-control" required>
            </div>
            <div class="col-md-5">
                <label for="baykas">Total Biaya Kasbon</label>
                <input type="number" name="baykas" id="baykas" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="nik">Karyawan</label>
                <select name="nik" id="nik"  class="form-control" required width="100%">
                    <option value="">Pilih</option>
                    @foreach ($karyawan as $krw)
                    <option value="{{ $krw->nik }}">{{ $krw->nik }} - {{ $krw->nm_karyawan }} - {{ $krw->kd_jabatan }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
