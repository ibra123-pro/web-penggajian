<!DOCTYPE html>
<html>
<head>
    <title>Laporan Jabatan</title>
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
        <tr align="center"><td><h2>Laporan Jabatan<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr>
            <th width="10%">Kode Jabatan</th>
            <th width="10%">Nama Jabatan</th>
            <th width="10%">Gaji Pemasangan</th>
            <th width="10%">Gaji Pencapaian</th>
            <th width="10%">Gaji Masuk Sehari</th>
            <th width="10%">Gaji Masuk Setengah Hari</th>
            <th width="10%">Gaji Pokok</th>
        </tr>
        </thead>
    <tbody>
    @foreach ($jabatan as $jbt)
        <tr>
            <td>{{$jbt->kd_jabatan}}</td>
            <td>{{$jbt->nm_jabatan}}</td>
            <td>{{$jbt->baypem}}</td>
            <td>{{$jbt->baypen}}</td>
            <td>{{$jbt->bayseh}}</td>
            <td>{{$jbt->bayset}}</td>
            <td>{{$jbt->gapok}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>