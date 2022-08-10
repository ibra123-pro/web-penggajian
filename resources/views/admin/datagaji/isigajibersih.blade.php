@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\GajiBersihController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Isi Gaji Bersih</legend>
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
                <label for="exampleFormControlInput1">Data Gaji Kotor</label>
                <select name="no_gakot" id="no_gakot select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($gajikotor as $product)
                    <option value="{{ $product->no_gakot }}">{{ $product->no_gakot }} - {{ $product->nik }} - {{ $product->subgakot }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Gaji Kotor</label>
                <select name="gakot" id="gakot select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($gajikotor as $product)
                    <option value="{{ $product->subgakot }}">{{ $product->subgakot }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1">BPJS Kes. Perusahaan</label>
                <input type="number" min="1" name="bpjskeper" id="bpjskeper" class="form-control" id="exampleFormControlInput1" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">BPJS Kes. Karyawan</label>
                <input type="number" min="1" name="bpjskekar" id="bpjskekar" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1">BPJS TK Perusahaan</label>
                <input type="number" min="1" name="bpjstkper" id="bpjstkper" class="form-control" id="exampleFormControlInput1" >
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">BPJS TK Karyawan</label>
                <input type="number" min="1" name="bpjstkkar" id="bpjstkkar" class="form-control" id="exampleFormControlInput1" >
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
