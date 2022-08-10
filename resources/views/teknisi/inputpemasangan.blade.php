@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\PemasanganController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Input Data Pemasangan</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="no_pemasangan">No. Pemasangan</label>
                <input type="text" name="no_pemasangan" value="{{ $formatnya }}" id="no_faktur" class="form-control" maxlength="5" readonly>
            </div>
            <div class="col-md-5">
                <label for="no_costumer">No. Costumer</label>                
                <select name="no_costumer" id="no_costumer" class="form-control" required>
                    <option value="">Pilih Costumer</option>
                    @foreach ($costumer as $cs)
                    <option value="{{$cs->no_costumer}}">{{ $cs->no_costumer }} - {{ $cs->nm_costumer }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="berac">Berita Acara</label>
                <textarea name="berac" id="berac" class="form-control" required></textarea>
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
