@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Input Rekap Pemasangan </h1>
</div>
<hr>
<form action="{{ action('App\Http\Controllers\DetailRekapPemasanganController@store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">No Rekap Pemasangan</label> 
        <input type="text" name="no_rekmas" value="{{ $formatnya }}" class="form-control" id="exampleFormControlInput1" readonly>              
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Tanggal Rekap Pemasangan</label>
        <input type="date" min="1" name="tgl_rekmas" id="tgl_rekmas" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Teknisi</label>
            <select name="nik" id="nik"  class="form-control" required width="100%">
                <option value="">Pilih</option>
                @foreach ($karyawan as $krw)
                <option value="{{ $krw->nik }}">{{ $krw->nik }} - {{ $krw->nm_karyawan }} - {{ $krw->kd_jabatan }} </option>
                @endforeach
           </select>
    </div>                   
    <div class="card-header py-3" align="right">
        <a href="{{route('rekapmasang.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                            <th>Total Pemasangan</th>
                            <th>Gaji Pemasangan</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                    @php($total = 0)
                    @foreach($viewrekappemasangan as $temp)
                        <tr>
                            <td><input name="kd_jabatan[]" class="form-control" type="hidden" value="{{$temp->kd_jabatan}}" readonly >{{$temp->kd_jabatan}}</td>
                            <td><input name="nm_jabatan" class="form-control" type="hidden" value="{{$temp->nm_jabatan}}" readonly >{{$temp->nm_jabatan}}</td>
                            <td><input name="totpem[]" class="form-control" type="hidden" value="{{$temp->totpem}}" readonly>{{$temp->totpem}}</td>
                            <td> <input name="sub_total[]" class="form-control" type="hidden" value="{{$temp->sub_total}}" readonly >{{$temp->sub_total}}</td>
                            <td align="center">
                                <a href="/rekappemasangan/hapus/{{$temp->kd_jabatan}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            </td>
                        </tr>
                    @php($total += $temp->sub_total)
                    @endforeach                
                        <tr>
                            <td colspan="3"></td>
                            <td><input name="total" class="form-control" type="hidden" value="{{$total}}">Total {{ number_format($total) }}</a>
                            <td></td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan Rekap Pemasangan">
        </div>
    </div>
</form>
@endsection


