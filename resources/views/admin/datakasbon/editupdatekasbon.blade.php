@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{route('updatekasbon.update', [$updatekasbon->no_upkas]) }}" method="POST">
{{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Edit Update Kasbon</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="no_upkas">Nomor Update Kasbon</label>
                <input type="text" name="no_upkas" id="no_upkas" class="form-control" value="{{$updatekasbon->no_upkas}}" readonly>
            </div>
            <div class="col-md-5">
                <label for="nik">Karyawan</label>
                <select name="nik" id="nik"  class="form-control" required width="100%">
                    <option value="">Pilih</option>
                    <option value="{{$updatekasbon->nik}}">{{$updatekasbon->nik}}</option>
                    @foreach ($karyawan as $krw)
                    <option value="{{ $krw->nik }}">{{ $krw->nik }} - {{ $krw->nm_karyawan }} - {{ $krw->kd_jabatan }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="totpen">Total Pengajuan Kasbon</label>
                <input type="number" name="totpen" id="totpen" class="form-control" value="{{$updatekasbon->totpen}}" required>
            </div>
            <div class="col-md-5">
                <label for="baykas">Total Biaya Kasbon</label>
                <input type="number" name="baykas" id="baykas" class="form-control" value="{{$updatekasbon->baykas}}" required>
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Update" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
