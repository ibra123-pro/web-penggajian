<!DOCTYPE html>
<html>
<head>
    <title>Laporan Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style type="text/css">
            table tr td,
            table tr th{
                font-size: 10pt;
                } 
        </style>
</head>
<body>
    <table class="table table-bordered" width="100%" align="center">
        <tr align="center"><td><h2>Laporan Karyawan<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr>
        <th width="7%">NIK</th>
        <th width="10%">Nama Karyawan</th>
        <th width="10%">Kode Jabatan</th>
        <th width="10%">Jenis Kelamin</th>
        <th width="10%">Tanggal Lahir</th>
        <th width="10%">Agama</th>
        <th width="15%">Alamat</th>
        <th width="10%">Nomor Telepon</th>
        </tr>
    </thead>
    <tbody>
    @foreach($karyawan as $krw)
    <tr>
        <td>{{$krw->nik}}</td>
        <td>{{$krw->nm_karyawan}}</td>
        <td>{{$krw->kd_jabatan}}</td>
        <td>{{$krw->jk}}</td>        
        <td>{{$krw->tgl_lahir}}</td>
        <td>{{$krw->agama}}</td>
        <td>{{$krw->alamat}}</td>
        <td>{{$krw->telepon}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>