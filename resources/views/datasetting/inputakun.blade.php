@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\AkunController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Input Data Akun</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addnoakun">Kode Akun</label>
                <input type="text" name="addnoakun" id="addnoakun" class="form-control" required>
            </div>
            <div class="col-md-5">
                <label for="addnmakun">Nama Akun</label>
                <input type="text" name="addnmakun" id="addnmakun" class="form-control" required>
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
