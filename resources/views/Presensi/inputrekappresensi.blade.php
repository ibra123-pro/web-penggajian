@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Input Rekap Presensi </h1>
</div>
<hr>
<form action="{{ action('App\Http\Controllers\DetailRekapPresensiController@store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">No Rekap Presensi</label> 
        <input type="text" name="no_rekpres" value="{{ $formatnya }}" class="form-control" id="exampleFormControlInput1" readonly>              
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Tanggal Rekap Presensi</label>
        <input type="date" min="1" name="tgl_rekpres" id="tgl_rekpres" class="form-control" id="exampleFormControlInput1" required >
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
        <a href="{{route('rekapabsen.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                            <th>Total Masuk Sehari</th>
                            <th>Total Masuk Setengah Hari</th>
                            <th>Gaji Masuk Sehari</th>
                            <th>Gaji Masuk Setengah Hari</th>
                            <th>Gaji Kehadiran</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                    @php($totalseh = 0)
                    @php($totalset = 0)
                    @php($totalmas = 0)
                    @foreach($viewrekappresensi as $temp)
                        <tr>
                            <td><input name="kd_jabatan[]" class="form-control" type="hidden" value="{{$temp->kd_jabatan}}" readonly >{{$temp->kd_jabatan}}</td>
                            <td><input name="nm_jabatan" class="form-control" type="hidden" value="{{$temp->nm_jabatan}}" readonly >{{$temp->nm_jabatan}}</td>
                            <td><input name="totseh[]" class="form-control" type="hidden" value="{{$temp->totseh}}" >{{$temp->totseh}}</td>
                            <td><input name="totset[]" class="form-control" type="hidden" value="{{$temp->totset}}" >{{$temp->totset}}</td>
                            <td><input name="sub_seh[]" class="form-control" type="hidden" value="{{$temp->sub_seh}}" readonly>{{$temp->sub_seh}}</td>
                            <td><input name="sub_set[]" class="form-control" type="hidden" value="{{$temp->sub_set}}" readonly>{{$temp->sub_set}}</td>
                            <td readonly></td>
                            <td align="center">
                                <a href="/rekappresensi/hapus/{{$temp->kd_jabatan}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            </td>
                        </tr>
                    @php($totalseh += $temp->sub_seh)
                    @php($totalset += $temp->sub_set)
                    @php($totalmas += $temp->sub_seh += $temp->sub_set)
                    @endforeach                
                        <tr>
                            <td colspan="4"></td>
                            <td><input name="totalseh" class="form-control" type="hidden" value="{{$totalseh}}">Total {{ number_format($totalseh) }}</a>
                            <td><input name="totalset" class="form-control" type="hidden" value="{{$totalset}}">Total {{ number_format($totalset) }}</a>
                            <td><input name="totalmas" class="form-control" type="hidden" value="{{$totalmas}}">Total {{ number_format($totalmas) }}</a>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan Rekap Presensi">
        </div>
    </div>
</form>
@endsection


