@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Input Gaji Kotor </h1>
</div>
<hr>
<form action="{{ action('App\Http\Controllers\DetailGajiKotorController@store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">No Gaji Kotor</label> 
        <input type="text" name="no_gakot" value="{{ $formatnya }}" class="form-control" id="exampleFormControlInput1" readonly>              
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Tanggal Gaji Kotor</label>
        <input type="date" min="1" name="tgl_gakot" id="tgl_gakot" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Karyawan</label>
            <select name="nik" id="nik"  class="form-control" required width="100%">
                <option value="">Pilih</option>
                @foreach ($karyawan as $krw)
                <option value="{{ $krw->nik }}">{{ $krw->nik }} - {{ $krw->nm_karyawan }} - {{ $krw->kd_jabatan }} - {{ $krw->tunjangan }}</option>
                @endforeach
           </select>
    </div>                   
    <div class="card-header py-3" align="right">
        <a href="{{route('gajikotors.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                            <th>Gaji Pokok</th>
                            <th>Pencapaian</th>
                            <th>Reward</th>
                            <th>Pemasangan</th>
                            <th>Tunjangan</th>
                            <th>Kehadiran</th>
                            <th>Gaji Kotor</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                    @php($subgapok = 0)
                    @php($subpen = 0)
                    @php($subrew = 0)
                    @php($subtotal = 0)
                    @php($subtunjangan = 0)
                    @php($submas = 0)
                    @php($subgakot = 0)
                    @foreach($viewgajikotor as $temp)
                        <tr>
                            <td><input name="kd_jabatan[]" class="form-control" type="hidden" value="{{$temp->kd_jabatan}}" readonly >{{$temp->kd_jabatan}}</td>
                            <td><input name="nm_jabatan" class="form-control" type="hidden" value="{{$temp->nm_jabatan}}" readonly >{{$temp->nm_jabatan}}</td>
                            <td><input name="gapok[]" class="form-control" type="hidden" value="{{$temp->gapok}}" readonly>{{$temp->gapok}}</td>
                            <td><input name="totalpen[]" class="form-control" type="hidden" value="{{$temp->totalpen}}" readonly>{{$temp->totalpen}}</td>
                            <td><input name="totalrew[]" class="form-control" type="hidden" value="{{$temp->totalrew}}" readonly >{{$temp->totalrew}}</td>
                            <td><input name="total[]" class="form-control" type="hidden" value="{{$temp->total}}" readonly >{{$temp->total}}</td>
                            <td><input name="tunjangan[]" class="form-control" type="hidden" value="{{$temp->tunjangan}}" readonly >{{$temp->tunjangan}}</td>
                            <td><input name="totalmas[]" class="form-control" type="hidden" value="{{$temp->totalmas}}" readonly >{{$temp->totalmas}}</td>
                            <td readonly></td>
                            <td align="center">
                                <a href="/gajikotor/hapus/{{$temp->kd_jabatan}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            </td>
                        </tr>
                    @php($subgapok += $temp->gapok)
                    @php($subpen += $temp->totalpen)
                    @php($subrew += $temp->totalrew)
                    @php($subtotal += $temp->total)
                    @php($subtunjangan += $temp->tunjangan)
                    @php($submas += $temp->totalmas)
                    @php($subgakot += $temp->gapok += $temp->totalpen += $temp->totalrew += $temp->total += $temp->tunjangan += $temp->totalmas)
                    @endforeach                
                        <tr>
                            <td colspan="2"></td>
                            <td><input name="subgapok" class="form-control" type="hidden" value="{{$subgapok}}">Total {{ number_format($subgapok) }}</a>
                            <td><input name="subpen" class="form-control" type="hidden" value="{{$subpen}}">Total {{ number_format($subpen) }}</a>
                            <td><input name="subrew" class="form-control" type="hidden" value="{{$subrew}}">Total {{ number_format($subrew) }}</a>
                            <td><input name="subtotal" class="form-control" type="hidden" value="{{$subtotal}}">Total {{ number_format($subtotal) }}</a>
                            <td><input name="subtunjangan" class="form-control" type="hidden" value="{{$subtunjangan}}">Total {{ number_format($subtunjangan) }}</a>
                            <td><input name="submas" class="form-control" type="hidden" value="{{$submas}}">Total {{ number_format($submas) }}</a>
                            <td><input name="subgakot" class="form-control" type="hidden" value="{{$subgakot}}">Total {{ number_format($subgakot) }}</a>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan Gaji Kotor">
        </div>
    </div>
</form>
@endsection
