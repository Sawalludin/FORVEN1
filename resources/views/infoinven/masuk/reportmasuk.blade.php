<!DOCTYPE html>
<html>
<head>
<title>REPORT DATA ARANG MASUK</title>
<meta charset='utf-8'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
body{font-size:10px; margin:0; padding:0; font-family:'Times New Roman '}
.titpdf{font-size:16px; text-align:center; margin-bottom:30px}
table{width:100%; border-collapse:collapse}
tr{background:#fff}
th{background:#cc9966; color:#000; font-weight:400;}
td,th{padding:10px 6px; border:1px solid #222; text-align:center}
td{color:#000}
.status{background:#0073B7; color:#fff; padding:5px 0; width:100px; text-align:center; margin:auto}
</style>
</head>
<body>
    <h1 style="text-align:center;">INFORMASI INVENTORY </h1>
    <h2 style="text-align:left;">Report masuk</h2>
    <h5 style="text-align:center;font-weight:1000px;"></h5>
    <hr /><br>
<table>
@if(count($pdf)===0)
@else
    <tr>
    <b>
    <th>No.</th>
    <th>Nama Produk</th>
    <th>Kode Produk</th>
    <th>Nama Produk</th>
    <th>Info Produk</th>
    <th>Stok</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>
    <th>Username Pemasuk</th>
    </b>
    </tr>
    @foreach($pdf as $pdf)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $pdf->kode }}</td>
    <td>{{$pdf->info_produk}}</td>
    <td>{{ $pdf->nama_produk}}</td>
    <td>{{ $pdf->info_produk}}</td>
    <td>{{ $pdf->stok}}PCS</td>
    <td>{{ "Rp.".number_format($pdf->harga_beli,0,',','.').",-" }}</td>
    <td>{{ "Rp.".number_format($pdf->harga_jual,0,',','.').",-" }}</td>
    <td>{{"$pdf->username_pemasuk"}}</td>
    </tr>
        @endforeach
@endif

    <tr>
    <td colspan="9">Report Masuk</td>
    </tr>
</table>
</body>
</html>