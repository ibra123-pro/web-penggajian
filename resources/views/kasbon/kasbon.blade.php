<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pengajuan Kasbon</title>
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
        <tr align="center"><td><h2>Laporan Pengajuan Kasbon Karyawan<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
            <tr>
                <th width="10%">Nama Karyawan</th>
                <th width="10%">Tanggal Pengajuan</th>
                <th width="10%">Jam Pengajuan</th>     
                <th width="15%">Foto Pengajuan</th>
                <th width="10%">Biaya Pengajuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kasbon as $item)
            <tr align="center">
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->tgl }}</td>
                <td>{{ $item->jam }}</td>
                <td>{{ $item->file }}</td>
                <td>{{ $item->biaya }}</td>
            </tr>
            @endforeach 
        </tbody>
    </table>
</body>
</html>