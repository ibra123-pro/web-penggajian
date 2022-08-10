<!DOCTYPE html>
<html>
<head>
    <title>Laporan Gaji Bersih</title>
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
        <tr align="center"><td><h2>Laporan Gaji Bersih<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr align="center">
        <th width="5%">No. Gaji Bersih</th>
        <th width="5%">Tanggal Gaji Bersih</th>
        <th width="5%">Gaji Kotor</th>
        <th width="5%">BPJS Kes. Perusahaan</th>
        <th width="5%">BPJS Kes. Karyawan</th>
        <th width="5%">BPJS TK Perusahaan</th>
        <th width="5%">BPJS TK Karyawan</th>
        <th width="5%">Gaji Bersih</th>
        <th width="5%">NIK</th>
        </tr>
        </thead>
    <tbody>
    @foreach ($gajibersih as $item)
        <tr>
            <td>{{ $item->no_gaber }}</td>
            <td>{{ $item->tgl_gaber }}</td>
            <td>{{ $item->subgakot }}</td>
            <td>{{ $item->subbpjskeper }}</td>
            <td>{{ $item->subbpjskekar }}</td>
            <td>{{ $item->subbpjstkper }}</td>
            <td>{{ $item->subbpjstkkar }}</td>
            <td>{{ $item->subgaber }}</td>
            <td>{{ $item->nik }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</body>
</html>