@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\GajiKotorController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Isi Gaji Kotor</legend>
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
                <label for="exampleFormControlInput1">Rekap Costumer (Bagian Sales)</label>
                <select name="no_rekcos" id="no_rekcos select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($rekapcostumer as $product)
                    <option value="{{ $product->no_rekcos }}">{{ $product->no_rekcos }} - {{ $product->nik }} - {{ $product->totalpen }} - {{ $product->totalrew }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Rekap Pemasangan (Bagian Teknisi)</label>
                <select name="no_rekmas" id="no_rekmas select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($rekappemasangan as $product)
                    <option value="{{ $product->no_rekmas }}">{{ $product->no_rekmas }} - {{ $product->nik }} - {{ $product->total }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Rekap Presensi (Bagian Admin, Karyawan, dan Teknisi)</label>
                <select name="no_rekcos" id="no_rekpres select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($rekappresensi as $product)
                    <option value="{{ $product->no_rekpres }}">{{ $product->no_rekpres }} - {{ $product->nik }} - {{ $product->totalmas }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Gaji Pokok (Bagian Admin, Karyawan, dan Teknisi)</label>
                <select name="gapok" id="gapok select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($jabatan as $product)
                    <option value="{{ $product->gapok }}">{{ $product->gapok }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Pencapaian (Bagian Sales)</label>
                <select name="totalpen" id="totalpen select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($rekapcostumer as $product)
                    <option value="{{ $product->totalpen }}">{{ $product->totalpen }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Reward (Bagian Sales)</label>
                <select name="totalrew" id="totalrew select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($rekapcostumer as $product)
                    <option value="{{ $product->totalrew }}">{{ $product->totalrew }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Pemasangan (Bagian Teknisi)</label>
                <select name="total" id="total select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($rekappemasangan as $product)
                    <option value="{{ $product->total }}">{{ $product->total }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Tunjangan (Bagian Admin dan Karyawan)</label>
                <select name="tunjangan" id="tunjangan select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($karyawan as $product)
                    <option value="{{ $product->tunjangan }}">{{ $product->tunjangan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <label for="exampleFormControlInput1">Kehadiran (Bagian Admin, Karyawan, dan Teknisi)</label>
                <select name="totalmas" id="totalmas select2"   class="form-control" width="100%">
                    <option value="">Pilih</option>
                    @foreach ($rekappresensi as $product)
                    <option value="{{ $product->totalmas }}">{{ $product->totalmas }}</option>
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
