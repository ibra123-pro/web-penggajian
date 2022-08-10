@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Input Rekap Costumer </h1>
</div>
<hr>
<form action="{{ action('App\Http\Controllers\DetailRekapCostumerController@store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">No Rekap Costumer</label> 
        <input type="text" name="no_rekcos" value="{{ $formatnya }}" class="form-control" id="exampleFormControlInput1" readonly>              
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Tanggal Rekap Costumer</label>
        <input type="date" min="1" name="tgl_rekcos" id="tgl_rekcos" class="form-control" id="exampleFormControlInput1" required>
    </div>
    <div class="form-group col-sm-4">
        <label for="exampleFormControlInput1">Sales</label>
            <select name="nik" id="nik"  class="form-control" required width="100%">
                <option value="">Pilih</option>
                @foreach ($karyawan as $krw)
                <option value="{{ $krw->nik }}">{{ $krw->nik }} - {{ $krw->nm_karyawan }} - {{ $krw->kd_jabatan }} </option>
                @endforeach
           </select>
    </div>                   
    <div class="card-header py-3" align="right">
        <a href="{{route('rekapcos.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                            <th>Total Pencapaian</th>
                            <th>Total Reward</th>
                            <th>Gaji Pencapaian</th>                            
                            <th>Gaji Reward</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                    @php($totrew = 0)
                    @php($totalpen = 0)
                    @php($totalrew = 0)
                    @foreach($viewrekapcostumer as $temp)
                        <tr>
                            <td><input name="kd_jabatan[]" class="form-control" type="hidden" value="{{$temp->kd_jabatan}}" readonly >{{$temp->kd_jabatan}}</td>
                            <td><input name="nm_jabatan" class="form-control" type="hidden" value="{{$temp->nm_jabatan}}" readonly >{{$temp->nm_jabatan}}</td>
                            <td><input name="totpen[]" class="form-control" type="hidden" value="{{$temp->totpen}}" readonly>{{$temp->totpen}}</td>
                            <td><input name="totrew[]" class="form-control" type="hidden" value="{{$temp->totrew}}" readonly>{{$temp->totrew}}</td>
                            <td><input name="sub_pen[]" class="form-control" type="hidden" value="{{$temp->sub_pen}}" readonly>{{$temp->sub_pen}}</td>
                            <td><input name="sub_rew[]" class="form-control" type="hidden" value="{{$temp->sub_rew}}" readonly>{{$temp->sub_rew}}</td>
                            <td align="center">
                                <a href="/rekapcostumer/hapus/{{$temp->kd_jabatan}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus</a>
                            </td>
                        </tr>
                    @php($totrew += $temp->totrew)
                    @php($totalpen += $temp->sub_pen)
                    @php($totalrew += $temp->sub_rew)
                    @endforeach                
                        <tr>
                            <td colspan="3"></td>
                            <td><input name="totrew" class="form-control" type="hidden" value="{{$totrew}}">Total {{ number_format($totrew) }}</a>
                            <td><input name="totalpen" class="form-control" type="hidden" value="{{$totalpen}}">Total {{ number_format($totalpen) }}</a>
                            <td><input name="totalrew" class="form-control" type="hidden" value="{{$totalrew}}">Total {{ number_format($totalrew) }}</a>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <input type="submit" class="btn btn-primary btn-send" value="Simpan Rekap Costumer">
        </div>
    </div>
</form>
@endsection


