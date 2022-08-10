@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{route('karyawan.update', [$karyawan->nik]) }}" method="POST">
{{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Edit Data Karyawan</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addnik">NIK</label>
                <input type="number" name="addnik" id="addnik" class="form-control" maxlength="5" value="{{$karyawan->nik}}" readonly>
            </div>
            <div class="col-md-5">
                <label for="addnmkaryawan">Nama Karyawan</label>
                <input type="text" name="addnmkaryawan" id="addnmkaryawan" class="form-control"  value="{{$karyawan->nm_karyawan}}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addkdjabatan">Kode Jabatan</label>
                <select name="addkdjabatan" id="addkdjabatan" class="form-control" required>
                    <option value="">Pilih Jabatan</option>
                    <option value="{{$karyawan->kd_jabatan}}">{{$karyawan->kd_jabatan}}</option>
                    @foreach ($jabatan as $jbt)
                    <option value="{{$jbt->kd_jabatan}}">{{ $jbt->kd_jabatan }} - {{ $jbt->nm_jabatan }} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="addtunjangan">Tunjangan</label>
                <input type="number" name="addtunjangan" id="addtunjangan" class="form-control" value="{{$karyawan->tunjangan}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addjk">Jenis Kelamin</label>
                    <select name="addjk" id="addjk" class="form-control" required>
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="{{$karyawan->jk}}">{{$karyawan->jk}}</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
            </div>
            <div class="col-md-5">
                <label for="addtgllahir">Tanggal Lahir</label>
                <input type="date" name="addtgllahir" id="addtgllahir" class="form-control" value="{{$karyawan->tgl_lahir}}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addagama">Agama</label>
                    <select name="addagama" id="addagama" class="form-control" required>
                        <option value="">--Pilih Agama--</option>
                        <option value="{{$karyawan->agama}}">{{$karyawan->agama}}</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
            </div>
            <div class="col-md-5">
                <label for="addalamat">Alamat</label>
                <textarea name="addalamat" id="addalamat" class="form-control" required>{{$karyawan->alamat}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addtelepon">Nomor Telepon</label>
                <input type="number" name="addtelepon" id="addtelepon" class="form-control" value="{{$karyawan->telepon}}" required>
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Update" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
