<!DOCTYPE html>
<html>
<head>
    <title>Laporan Jurnal Umum</title>
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
        <tr align="center"><td><h2>Laporan Jurnal Umum<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr>
            <th width="10%">No Transaksi</th>
            <th width="10%">Tanggal Jurnal</th>
            <th width="10%">No THP</th>
            <th width="10%">Memo</th>
            <th width="10%">Jumlah Debet</th>
            <th width="10%">Jumlah Kredit</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jurnal as $kk)
        <tr>
            <td>{{$kk->no_jurnal}}</td>
            <td>{{$kk->tgl_jurnal}}</td>
            <td>{{$kk->no_thp}}</td>
            <td>{{$kk->keterangan}}</td> 
            <td>{{$kk->debet}}</td> 
            <td>{{$kk->kredit}}</td> 
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>