<!DOCTYPE html>
<html>
<head>
    <title>Laporan Gaji Kotor</title>
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
        <tr align="center"><td><h2>Laporan Gaji Kotor<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr align="center">
        <th width="5%">No. Gaji Kotor</th>
        <th width="5%">Tanggal Gaji Kotor</th>
        <th width="5%">Gaji Pokok</th>
        <th width="5%">Pencapaian</th>
        <th width="5%">Reward</th>
        <th width="5%">Pemasangan</th>
        <th width="5%">Tunjangan</th>
        <th width="5%">Kehadiran</th>
        <th width="5%">Gaji Kotor</th>
        <th width="5%">NIK</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($gajikotor as $item)
        <tr>
            <td>{{ $item->no_gakot }}</td>
            <td>{{ $item->tgl_gakot }}</td>
            <td>{{ $item->subgapok }}</td>
            <td>{{ $item->subpen }}</td>
            <td>{{ $item->subrew }}</td>
            <td>{{ $item->subtotal }}</td>
            <td>{{ $item->subtunjangan }}</td>
            <td>{{ $item->submas }}</td>
            <td>{{ $item->subgakot }}</td>
            <td>{{ $item->nik }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</body>
</html>