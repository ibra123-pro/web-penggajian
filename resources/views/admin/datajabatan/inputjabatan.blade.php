@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\JabatanController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Input Data Jabatan</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addkdjabatan">Kode Jabatan</label>
                <input type="text" name="addkdjabatan" id="addkdjabatan" class="form-control" maxlength="5" required>
            </div>
            <div class="col-md-5">
                <label for="addnmjabatan">Nama Jabatan</label>
                    <select name="addnmjabatan" id="addnmjabatan" class="form-control" required>
                        <option value="">--Pilih Jabatan--</option>
                        <option value="Direktur Utama">Direktur Utama</option>
                        <option value="Komisaris">Komisaris</option>
                        <option value="Direktur IT">Direktur IT</option>
                        <option value="Direktur Sipil Manajemen">Direktur Sipil Manajemen</option>
                        <option value="Direktur Teknik FO">Direktur Teknik FO</option>
                        <option value="Staff Network Support">Staff Network Support</option>
                        <option value="Staff Database">Staff Database</option>
                        <option value="Staff System Analyst">Staff System Analyst</option>
                        <option value="Staff Designer">Staff Designer</option>
                        <option value="Staff Programmer">Staff Programmer</option>
                        <option value="Staff Sipil">Staff Sipil</option>
                        <option value="Staff Koperasi">Staff Koperasi</option>
                        <option value="Staff Sistem Manajemen">Staff Sistem Manajemen</option>
                        <option value="Staff FO">Staff FO</option>
                        <option value="Network Support">Network Support</option>
                        <option value="Database">Database</option>
                        <option value="System Analyst">System Analyst</option>
                        <option value="Designer">Designer</option>
                        <option value="Programmer">Programmer</option>
                        <option value="Sipil">Sipil</option>
                        <option value="Koperasi">Koperasi</option>
                        <option value="Sistem Manajemen">Sistem Manajemen</option>
                        <option value="Admin">Admin</option>
                        <option value="Sales">Sales</option>
                        <option value="Teknisi">Teknisi</option>
                    </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addbaypem">Gaji Pemasangan</label>
                <input type="number" name="addbaypem" id="addbaypem" class="form-control" >
            </div>
            <div class="col-md-5">
                <label for="addbaypen">Gaji Pencapaian</label>
                <input type="number" name="addbaypen" id="addbaypen" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addbayseh">Gaji Masuk Sehari</label>
                <input type="number" name="addbayseh" id="addbayseh" class="form-control" >
            </div>
            <div class="col-md-5">
                <label for="addbayset">Gaji Masuk Setengah Hari</label>
                <input type="number" name="addbayset" id="addbayset" class="form-control" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addgapok">Gaji Pokok</label>
                <input type="number" name="addgapok" id="addgapok" class="form-control" >
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
