<!DOCTYPE html>
<html>
<head>
    <title>Laporan Rekap Presensi</title>
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
        <tr align="center"><td><h2>Laporan Rekap Presensi<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr align="center">
        <th width="10%">No. Rekap Presensi</th>
        <th width="10%">Tanggal Rekap Presensi</th>
        <th width="10%">Gaji Masuk Sehari</th>
        <th width="10%">Gaji Masuk Setengah Hari</th>
        <th width="10%">NIK</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($rekappresensi as $item)
        <tr>
            <td>{{ $item->no_rekpres }}</td>
            <td>{{ $item->tgl_rekpres }}</td>
            <td>{{ $item->totalseh }}</td>
            <td>{{ $item->totalset }}</td>
            <td>{{ $item->nik }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</body>
</html>