@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Input Gaji Bersih </h1>
</div>
<hr>
<form action="{{ action('App\Http\Controllers\DetailGajiBersihController@store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">No Gaji Bersih</label> 
        <input type="text" name="no_gaber" value="{{ $formatnya }}" class="form-control" id="exampleFormControlInput1" readonly>              
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Tanggal Gaji Bersih</label>
        <input type="date" min="1" name="tgl_gaber" id="tgl_gaber" class="form-control" id="exampleFormControlInput1" required>
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
        <a href="{{route('gajibersihs.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                            <th>Gaji Kotor</th>
                            <th>BPJS Kes. Perusahaan</th>
                            <th>BPJS Kes. Karyawan</th>
                            <th>BPJS TK Perusahaan</th>
                            <th>BPJS TK Karyawan</th>
                            <th>Gaji Bersih</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                    @php($subgakot = 0)
                    @php($subbpjskeper = 0)
                    @php($subbpjskekar = 0)
                    @php($subbpjstkper = 0)
                    @php($subbpjstkkar = 0)
                    @php($subgaber = 0)
                    @foreach($viewgajibersih as $temp)
                        <tr>
                            <td><input name="kd_jabatan[]" class="form-control" type="hidden" value="{{$temp->kd_jabatan}}" readonly >{{$temp->kd_jabatan}}</td>
                            <td><input name="nm_jabatan" class="form-control" type="hidden" value="{{$temp->nm_jabatan}}" readonly >{{$temp->nm_jabatan}}</td>
                            <td><input name="gakot[]" class="form-control" type="hidden" value="{{$temp->gakot}}" readonly>{{$temp->gakot}}</td>
                            <td><input name="bpjskeper[]" class="form-control" type="hidden" value="{{$temp->bpjskeper}}" readonly>{{$temp->bpjskeper}}</td>
                            <td><input name="bpjskekar[]" class="form-control" type="hidden" value="{{$temp->bpjskekar}}" readonly >{{$temp->bpjskekar}}</td>
                            <td><input name="bpjstkper[]" class="form-control" type="hidden" value="{{$temp->bpjstkper}}" readonly >{{$temp->bpjstkper}}</td>
                            <td><input name="bpjstkkar[]" class="form-control" type="hidden" value="{{$temp->bpjstkkar}}" readonly >{{$temp->bpjstkkar}}</td>
                            <td readonly></td>
                            <td align="center">
                                <a href="/gajibersih/hapus/{{$temp->kd_jabatan}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            </td>
                        </tr>
                    @php($subgakot += $temp->gakot)
                    @php($subbpjskeper += $temp->bpjskeper)
                    @php($subbpjskekar += $temp->bpjskekar)
                    @php($subbpjstkper += $temp->bpjstkper)
                    @php($subbpjstkkar += $temp->bpjstkkar)
                    @php($subgaber -= $temp->bpjskekar -= $temp->gakot -= $temp->bpjstkkar)
                    @endforeach                
                        <tr>
                            <td colspan="2"></td>
                            <td><input name="subgakot" class="form-control" type="hidden" value="{{$subgakot}}">Total {{ number_format($subgakot) }}</a>
                            <td><input name="subbpjskeper" class="form-control" type="hidden" value="{{$subbpjskeper}}">Total {{ number_format($subbpjskeper) }}</a>
                            <td><input name="subbpjskekar" class="form-control" type="hidden" value="{{$subbpjskekar}}">Total {{ number_format($subbpjskekar) }}</a>
                            <td><input name="subbpjstkper" class="form-control" type="hidden" value="{{$subbpjstkper}}">Total {{ number_format($subbpjstkper) }}</a>
                            <td><input name="subbpjstkkar" class="form-control" type="hidden" value="{{$subbpjstkkar}}">Total {{ number_format($subbpjstkkar) }}</a>
                            <td><input name="subgaber" class="form-control" type="hidden" value="{{$subgaber}}">Total {{ number_format($subgaber) }}</a>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan Gaji Bersih">
        </div>
    </div>
</form>
@endsection
