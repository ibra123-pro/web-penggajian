<!DOCTYPE html>
<html>
<head>
    <title>Laporan Costumer</title>
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
        <tr align="center"><td><h2>Laporan Costumer<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr>
        <th width="10%">No. Costumer</th>
        <th width="10%">Nama Sales</th>
        <th width="10%">Tanggal Transaksi</th>
        <th width="10%">Nama Costumer</th>
        <th width="10%">Nomor Telepon</th>
        <th width="10%">Jenis Paket</th>
        <th width="10%">Work Order</th>
        <th width="10%">Foto KTP & Foto KTP + Foto Diri Costumer</th>
        <th width="10%">Alamat</th>
        </tr>
    </thead>
    <tbody>
    @foreach($costumer as $cs)
    <tr>
        <td>{{$cs->no_costumer}}</td>
        <td>{{$cs->user->name}}</td>
        <td>{{$cs->tgl}}</td>
        <td>{{$cs->nm_costumer}}</td>        
        <td>{{$cs->telepon}}</td>
        <td>{{$cs->id_paket}}</td>
        <td>{{$cs->work}}</td>
        <td>{{$cs->ktp}}</td>
        <td>{{$cs->alamat}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>