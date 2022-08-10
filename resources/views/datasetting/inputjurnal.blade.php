@extends('layouts.layout')
@section('content')
@include('sweetalert::alert') 
<form action="{{action('App\Http\Controllers\JurnalController@store')}}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <div class="form-group row">
            <div class="col-md-5"> Nomor Transaksi
                <input id="notran" type="text" name="notrans" class="form-control" maxlength="5" required>
            </div>
            <div class="col-md-5">Tanggal transaksi
                <input id="tgltr" type="date" name="tgltr" value=""class="form-control" required>
            </div>
        </div>
        <div class="form-group row"> 
            <div class="col-md-5"> THP
                <select id="no_thp" name="no_thp" class="form-control" required>
                    <option value="">--Pilih THP--</option>
                    @foreach ($thp as $tp) 
                    <option value="{{$tp->no_thp}}">{{$tp->no_thp}} - {{$tp->nik}} - {{$tp->subbaykas}}</option> 
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">Memo
                <textarea id="memo" type="text" name="memo" class="form-control" required></textarea>
            </div>
        </div>
        <hr>
        <div class="form-group row"> 
            <div class="col-md-3">
            Akun
            @for($i=1;$i<=3;$i++) 
            <select id="idakun{{$i}}" name="idakun{{$i}}" class="form-control">
                <option value="0">--Pilih Akun--</option>
                @foreach ($akun as $akn) 
                <option value="{{$akn->no_akun}}">{{$akn->no_akun}} | {{$akn->nm_akun}}</option> 
                @endforeach
            </select>
            @endfor
            </div>
            <div class="col-md-3"> 
            Jumlah Debet
            @for($i=1;$i<=3;$i++)
                <input id="txt{{$i}}" type="text" name="txt{{$i}}" class="form-control" value="0" onkeyup="sum();">
            @endfor
            </div> 
            <div class="col-md-3"> 
            Jumlah Kredit
            @for($i=1;$i<=3;$i++)
                <input id="txts{{$i}}" type="text" name="txts{{$i}}" class="form-control" value="0" onkeyup="sum();">
            @endfor
            </div>
            </div> 
            <div class="form-group row">
            <div class="col-md-5">Total Debet
                <input id="total" type="text" name="total" class="form-control" value="0" required>
            </div>
            <div class="col-md-5">Total Kredit
                <input id="totals" type="text" name="totals" class="form-control" value="0" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">
                <input type="submit" class="btn btn-success btn-send" value="Simpan" >
                <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
            </div>
        </div><hr>
    </fieldset>
</form>
@endsection