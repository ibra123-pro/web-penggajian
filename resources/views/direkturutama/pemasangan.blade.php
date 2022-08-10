<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pemasangan</title>
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
        <tr align="center"><td><h2>Laporan Pemasangan<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr>
        <th width="10%">No. Pemasangan</th>
        <th width="10%">Nama Teknisi</th>
        <th width="10%">Tanggal Transaksi</th>
        <th width="10%">No. Costumer</th>
        <th width="10%">Berita Acara</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pemasangan as $pms)
    <tr>
        <td>{{$pms->no_pemasangan}}</td>
        <td>{{$pms->user->name}}</td>
        <td>{{$pms->tgl}}</td>
        <td>{{$pms->no_costumer}}</td> 
        <td>{{$pms->berac}}</td> 
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>