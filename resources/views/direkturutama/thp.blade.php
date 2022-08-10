<!DOCTYPE html>
<html>
<head>
    <title>Laporan THP</title>
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
        <tr align="center"><td><h2>Laporan THP<br>PT. Karl Wig Abadi</h2><hr></td></tr>
    </table>
    <table class="table table-bordered" width="100%" align="center">
        <thead>
        <tr align="center">
        <th width="5%">No. THP</th>
        <th width="5%">Tanggal THP</th>
        <th width="5%">Gaji Bersih</th>
        <th width="5%">Kasbon</th>
        <th width="5%">Bayar Kasbon</th>
        <th width="5%">Sisa Kasbon</th>
        <th width="5%">THP</th>
        <th width="5%">NIK</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($thp as $item)
        <tr>
            <td>{{ $item->no_thp }}</td>
            <td>{{ $item->tgl_thp }}</td>
            <td>{{ $item->subgaber }}</td>
            <td>{{ $item->subkasbon }}</td>
            <td>{{ $item->subbaykas }}</td>
            <td>{{ $item->subsiskas }}</td>
            <td>{{ $item->subthp }}</td>
            <td>{{ $item->nik }}</td>
        </tr>      
    @endforeach
    </tbody>
    </table>
</body>
</html>