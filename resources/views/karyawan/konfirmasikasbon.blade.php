@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Laporan Kasbon</div>
                <div class="card-body"> 
                <form action="{{route('laporanpengajuankasbon.create')}}" method="PUT" target="_blank"> 
                    @csrf
                    <fieldset>
                    <div class="form-group row"> 
                        <div class="col-md-4">
                            <label >Laporan Kasbon</label>
                        </div>
                    <div class="col-md-10">
                        <input type="submit" class="btn btn-success btn-send" value="Cetak" >
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
