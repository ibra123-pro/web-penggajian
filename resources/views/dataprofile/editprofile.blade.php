@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<form action="{{route('profile.update',[Auth::user()->id])}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Ubah Profile</legend>
        <div class="form-group row">
            <div class="col-md-10">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="{{ Auth::user()->password }}"required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">
                <label>Foto Pribadi</label>
                <input id="foto" type="file" name="foto" class="form-control" value="{{ Auth::user()->foto }}"  required>
            </div>
        </div>
    </fieldset>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Ubah">
        <a href="{{ route('profile.index') }}"><input type="Button" class="btn btn-primary btn-send" value="Kembali"></a>
    </div>
    <hr>
</form>
@endsection
