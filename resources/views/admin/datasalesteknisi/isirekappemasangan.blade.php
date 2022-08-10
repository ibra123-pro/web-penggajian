@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\RekappemasanganController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Isi Rekap Pemasangan</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Jabatan</label>
                <select name="kd_jabatan" id="kd_jabatan select2"   class="form-control" required width="100%">
                    <option value="">Pilih</option>
                    @foreach ($jabatan as $product)
                    <option value="{{ $product->kd_jabatan }}">{{ $product->kd_jabatan }} - {{ $product->nm_jabatan }} [{{ number_format($product->baypem) }}]</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Total Pemasangan</label>
                <input type="number" min="1" name="totpem" id="totpem" class="form-control" id="exampleFormControlInput1" >
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
