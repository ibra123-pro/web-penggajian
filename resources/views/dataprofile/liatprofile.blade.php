@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="" method="POST">
{{ csrf_field() }}
<fieldset>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profil Pribadi</h1>
</div><hr>
    <div class="form-group row">
        <div class="col-md-10">
            <img class="img-profile rounded-circle" src="{{('storage/' .  Auth::user()->foto)}}"  width="15%" value="{{ Auth::user()->foto }}" >
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Nama</label>
			<input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>E-Mail</label>
			<input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
        </div>
    </div>
    <div class="col-md-10">
        <a href="{{route('profile.edit',[Auth::user()->id])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
        <i class="fas fa-edit fa-sm text-white-50"></i>Edit</a>
    </div><hr>
    </fieldset>
</form>
@endsection
