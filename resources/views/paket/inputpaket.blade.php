@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\PaketController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Input Data Paket</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addidpaket">ID Paket</label>
                <input type="text" name="addidpaket"  id="addidpaket" class="form-control" maxlength="5" required>
            </div>
            <div class="col-md-5">
                <label for="addnmpaket">Nama Paket</label>
                    <select name="addnmpaket" id="addnmpaket" class="form-control" required>
                        <option value="">--Pilih Paket--</option>
                        <option value="PAKET PRESTIGE 10 MB">Paket Prestige 10 MB</option>
                        <option value="PAKET PRESTIGE 20 MB">Paket Prestige 20 MB</option>
                        <option value="PAKET PRESTIGE 50 MB">Paket Prestige 50 MB</option>
                        <option value="PAKET PRESTIGE 100 MB">Paket Prestige 100 MB</option>
                        <option value="PAKET PRESTIGE 200 MB">Paket Prestige 200 MB</option>
                        <option value="PAKET PRESTIGE 300 MB">Paket Prestige 500 MB</option>
                        <option value="PAKET RUMAH CERIA 10 MB">Paket Rumah Ceria 10 MB</option>
                        <option value="PAKET RUMAH CERIA 20 MB">Paket Rumah Ceria 20 MB</option>
                        <option value="PAKET RUMAH CERIA 30 MB">Paket Rumah Ceria 30 MB</option>
                        <option value="PAKET RUMAH CERIA 50 MB">Paket Rumah Ceria 50 MB</option>
                        <option value="PAKET STREAMIX 10 MB">Paket Streamix 10 MB</option>
                        <option value="PAKET STREAMIX 20 MB">Paket Streamix 20 MB</option>
                        <option value="PAKET STREAMIX 50 MB">Paket Streamix 50 MB</option>
                        <option value="PAKET STREAMIX 100 MB">Paket Streamix 100 MB</option>
                        <option value="PAKET INTERNET ONLY 20 MB">Paket Internet Only 20 MB</option>
                        <option value="PAKET INTERNET ONLY 50 MB">Paket Internet Only 50 MB</option>
                        <option value="PAKET INTERNET ONLY 100 MB">Paket Internet Only 100 MB</option>
                        <option value="PAKET GAMER 3P 10 MB">Paket Gamer 3P 10 MB</option>
                        <option value="PAKET GAMER 3P 20 MB">Paket Gamer 3P 20 MB</option>
                        <option value="PAKET GAMER 3P 30 MB">Paket Gamer 3P 30 MB</option>
                        <option value="PAKET GAMER 3P 40 MB">Paket Gamer 3P 40 MB</option>
                        <option value="PAKET GAMER 3P 50 MB">Paket Gamer 3P 50 MB</option>
                        <option value="PAKET GAMER 3P 100 MB">Paket Gamer 3P 100 MB</option>
                        <option value="PAKET PHOENIX 10 MB">Paket Phoenix 10 MB</option>
                        <option value="PAKET PHOENIX 20 MB">Paket Phoenix 20 MB</option>
                        <option value="PAKET PHOENIX 50 MB">Paket Phoenix 50 MB</option>
                        <option value="PAKET PHOENIX 100 MB">Paket Phoenix 100 MB</option>
                        <option value="PAKET BUNDLING CLOUD STORAGE 10 MB">Paket Bundling Cloud Storage 10 MB</option>
                        <option value="PAKET BUNDLING CLOUD STORAGE 20 MB">Paket Bundling Cloud Storage 20 MB</option>
                        <option value="PAKET BUNDLING CLOUD STORAGE 30 MB">Paket Bundling Cloud Storage 30 MB</option>
                        <option value="PAKET BUNDLING CLOUD STORAGE 100 MB">Paket Bundling Cloud Storage 100 MB</option>
                    </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addharga">Harga</label>
                <input type="number" name="addharga" id="addharga" class="form-control" required>
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
