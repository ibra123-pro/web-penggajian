@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Input THP </h1>
</div>
<hr>
<form action="{{ action('App\Http\Controllers\DetailThpController@store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">No THP</label> 
        <input type="text" name="no_thp" value="{{ $formatnya }}" class="form-control" id="exampleFormControlInput1" readonly>              
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Tanggal THP</label>
        <input type="date" min="1" name="tgl_thp" id="tgl_thp" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Karyawan</label>
            <select name="nik" id="nik"  class="form-control" required width="100%">
                <option value="">Pilih</option>
                @foreach ($karyawan as $krw)
                <option value="{{ $krw->nik }}">{{ $krw->nik }} - {{ $krw->nm_karyawan }} - {{ $krw->kd_jabatan }} </option>
                @endforeach
           </select>
    </div>                   
    <div class="card-header py-3" align="right">
        <a href="{{route('thps.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Isi
        </a>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Kode Jabatan</th>
                            <th>Nama Jabatan</th>
                            <th>Gaji Bersih</th>
                            <th>Kasbon</th>
                            <th>Bayar Kasbon</th>
                            <th>Sisa Kasbon</th>
                            <th>THP</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                    @php($subgaber = 0)
                    @php($subkasbon = 0)
                    @php($subkasbo = 0)
                    @php($subbaykas = 0)
                    @php($subsiskas = 0)
                    @php($subthp = 0)
                    @foreach($viewthp as $temp)
                        <tr>
                            <td><input name="kd_jabatan[]" class="form-control" type="hidden" value="{{$temp->kd_jabatan}}" readonly >{{$temp->kd_jabatan}}</td>
                            <td><input name="nm_jabatan" class="form-control" type="hidden" value="{{$temp->nm_jabatan}}" readonly >{{$temp->nm_jabatan}}</td>
                            <td><input name="gaber[]" class="form-control" type="hidden" value="{{$temp->gaber}}" readonly>{{$temp->gaber}}</td>
                            <td><input name="kasbon[]" class="form-control" type="hidden" value="{{$temp->kasbon}}" readonly>{{$temp->kasbon}}</td>
                            <td readonly></td>
                            <td readonly></td>
                            <td readonly></td>
                            <td align="center">
                                <a href="/thp/hapus/{{$temp->kd_jabatan}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            </td>
                        </tr>
                    @php($subgaber += $temp->gaber)
                    @php($subkasbon += $temp->kasbon)
                    @php($subkasbo += $temp->kasbon)
                    @php($subbaykas += $temp->kasbon *= 0.2)
                    @php($subsiskas += $subkasbo -= $subbaykas)
                    @php($subthp += $temp->gaber -= $subbaykas)
                    @endforeach                
                        <tr>
                            <td colspan="2"></td>
                            <td><input name="subgaber" class="form-control" type="hidden" value="{{$subgaber}}">Total {{ number_format($subgaber) }}</a>
                            <td><input name="subkasbon" class="form-control" type="hidden" value="{{$subkasbon}}">Total {{ number_format($subkasbon) }}</a>
                            <td><input name="subbaykas" class="form-control" type="hidden" value="{{$subbaykas}}">Total {{ number_format($subbaykas) }}</a>
                            <td><input name="subsiskas" class="form-control" type="hidden" value="{{$subsiskas}}">Total {{ number_format($subsiskas) }}</a>
                            <td><input name="subthp" class="form-control" type="hidden" value="{{$subthp}}">Total {{ number_format($subthp) }}</a>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan THP">
        </div>
    </div>
</form>
@endsection
