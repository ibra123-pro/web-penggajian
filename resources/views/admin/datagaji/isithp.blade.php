@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\ThpController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Isi THP</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Jabatan</label>
                <select name="kd_jabatan" id="kd_jabatan select2"   class="form-control" required width="100%">
                    <option value="">Pilih</option>
                    @foreach ($jabatan as $product)
                    <option value="{{ $product->kd_jabatan }}">{{ $product->kd_jabatan }} - {{ $product->nm_jabatan }} - {{ $product->gapok }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Update Kasbon</label>
                <select name="no_upkas" id="no_upkas select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($updatekasbon as $product)
                    <option value="{{ $product->no_upkas }}">{{ $product->no_upkas }} - {{ $product->nik}} - {{ $product->baykas }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Data Gaji Bersih</label>
                <select name="no_gaber" id="no_gaber select2"   class="form-control" required width="100%">
                    <option value="">Pilih</option>
                    @foreach ($gajibersih as $product)
                    <option value="{{ $product->no_gaber }}">{{ $product->no_gaber }} - {{ $product->nik }} - {{ $product->subgaber }} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Gaji Bersih</label>
                <select name="gaber" id="gaber select2"   class="form-control" required width="100%">
                    <option value="">Pilih</option>
                    @foreach ($gajibersih as $product)
                    <option value="{{ $product->subgaber }}">{{ $product->subgaber }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Kasbon</label>
                <select name="kasbon" id="kasbon select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($updatekasbon as $product)
                    <option value="{{ $product->baykas }}">{{ $product->baykas }}</option>
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
