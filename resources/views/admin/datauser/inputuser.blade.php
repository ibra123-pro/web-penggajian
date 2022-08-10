@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\UserController@store') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <fieldset>
        <legend>Input Data User</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="username">Nama User</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="col-md-5">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
			    <label>Foto Gambar</label>
			    <input type="file" name="foto" class="form-control">
		    </div>
            <div class="col-md-5">
                <label for="roles">Roles/Akses</label>
                    <select id="roles" name="roles" class="form-control" required>
                        <option value="">--Pilih Roles--</option>
                        <option value="ADMIN">Admin</option>
                        <option value="KARYAWAN">Karyawan</option>
                        <option value="SALES">Sales</option>
                        <option value="TEKNISI">Teknisi</option>
                        <option value="DIRUT">Direktur Utama</option>
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
