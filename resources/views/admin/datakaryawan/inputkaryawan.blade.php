@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\KaryawanController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Input Data Karyawan</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addnik">NIK</label>
                <input type="number" name="addnik" id="addnik" class="form-control" maxlength="5" required>
            </div>
            <div class="col-md-5">
                <label for="addnmkaryawan">Nama Karyawan</label>
                <input type="text" name="addnmkaryawan" id="addnmkaryawan" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addkdjabatan">Kode Jabatan</label>
                <select name="addkdjabatan" id="addkdjabatan" class="form-control" required>
                    <option value="">Pilih Jabatan</option>
                    @foreach ($jabatan as $jbt)
                    <option value="{{$jbt->kd_jabatan}}">{{ $jbt->kd_jabatan }} - {{ $jbt->nm_jabatan }} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="addtunjangan">Tunjangan</label>
                <input type="number" name="addtunjangan" id="addtunjangan" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addjk">Jenis Kelamin</label>
                    <select name="addjk" id="addjk" class="form-control" required>
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
            </div>
            <div class="col-md-5">
                <label for="addtgllahir">Tanggal Lahir</label>
                <input type="date" name="addtgllahir" id="addtgllahir" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addagama">Agama</label>
                    <select name="addagama" id="addagama" class="form-control" required>
                        <option value="">--Pilih Agama--</option>
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
                <textarea name="addalamat" id="addalamat" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addtelepon">Nomor Telepon</label>
                <input type="number" name="addtelepon" id="addtelepon" class="form-control" required>
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
