<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transfer Kasbon</title>
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
        <tr align="center"><td><h2>Laporan Transfer Kasbon<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <tr align="center">
        <th width="10%">No. Pengajuan Kasbon</th>
        <th width="10%">NIK</th>
        <th width="10%">Tanggal Pengajuan Kasbon</th>
        <th width="10%">Total Biaya Kasbon</th>
        </tr>
    <tbody>
    @foreach ($rekapkasbon as $item)
        <tr>
            <td>{{ $item->no_rekkas }}</td>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->tgl_rekkas }}</td>
            <td>{{ $item->baykas }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
    <div align="right">
        <h6>Tanda Tangan</h6><br><br><br><h6>{{ Auth::user()->name }}</h6>
    </div>
</body>
</html>