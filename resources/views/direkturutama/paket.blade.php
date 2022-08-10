<!DOCTYPE html>
<html>
<head>
    <title>Laporan Paket</title>
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
        <tr align="center"><td><h2>Laporan Paket<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr>
            <th width="10%">ID Paket</th>
            <th width="30%">Nama Paket</th>
            <th width="25%">Harga</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($paket as $pkt)
        <tr>
            <td>{{$pkt->id_paket}}</td>
            <td>{{$pkt->nm_paket}}</td>
            <td>{{$pkt->harga}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>