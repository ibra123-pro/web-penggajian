<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transfer Gaji</title>
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
        <tr align="center"><td><h2>Laporan Transfer Gaji<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <tr align="center">
        <th width="5%">No. Gaji</th>
        <th width="5%">NIK</th>
        <th width="5%">Tanggal Gaji Karyawan</th>
        <th width="5%">Gaji Karyawan</th>
        </tr>
    <tbody>
    @foreach ($thp as $item)
        <tr>
            <td>{{ $item->no_thp }}</td>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->tgl_thp }}</td>
            <td>{{ $item->subthp }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
    <div align="right">
        <h6>Tanda Tangan</h6><br><br><br><h6>{{ Auth::user()->name }}</h6>
    </div>
</body>
</html>