<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<style type="text/css" media="print">
		body {
			font-family: Arial;
			font-size: 12px;
		}
		.cetak_laporan {
			width: 19cm;
			height: 27cm;
			padding: 1cm;
		}
		table {
			border: solid thin #000;
			border-collapse: collapse;
		}
		td, th {
			padding: 3mm 6mm;
			text-align: left;
			vertical-align: top;
		}
		th {
			background-color: #F5F5F5;
			font-weight: bold;
		}
		h1 {
			text-align: center;
			font-size: 18px;
			text-transform: uppercase;
		}
	</style>

	<style type="text/css" media="screen">
		body {
			font-family: Arial;
			font-size: 12px;
		}
		.cetak {
			width: 19cm;
			height: 27cm;
			padding: 1cm;
		}
		table {
			border: solid thin #000;
			border-collapse: collapse;
		}
		td, th {
			padding: 3mm 6mm;
			text-align: left;
			vertical-align: top;
		}
		th {
			background-color: #F5F5F5;
			font-weight: bold;
		}
		h1 {
			text-align: center;
			font-size: 18px;
			text-transform: uppercase;
		}
	</style>
</head>
<body onload="print()">
	<div class="cetak">
		<div style="width: 19cm; height: 27cm; padding-top: 20px;">
	<h1 class="text-center">Laporan Transaksi <?php echo $site->namaweb ?></h1><br>
<table class="table table-bordered" id="example1">
<thead>
	<tr class="bg-info">
		<th>No</th>
		<th>Pelanggan</th>
		<th>Kode Transaksi</th>
		<th>Tanggal Transaksi</th>
		<th>Total Item</th>
		<th>Total Harga</th>
		<th>Status Pembayaran</th>
	</tr>
</thead>
<tbody>
	<?php $i=1; foreach($header_transaksi as $header_transaksi) { ?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $header_transaksi->nama_pelanggan ?>
			<br><small>
				<!-- Telepon: <?php echo $header_transaksi->telepon ?>
				<br> -->Email: <?php echo $header_transaksi->email ?>
				<!-- <br>Alamat Pengiriman: <br><?php echo nl2br($header_transaksi->alamat) ?>  -->
			</small>
		</td>
		<td><?php echo $header_transaksi->kode_transaksi ?></td>
		<td class="text-center"><?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi)) ?></td>
		<td class="text-center"><?php echo $header_transaksi->total_item ?></td>
		<td>Rp <?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
		<td class="text-center"><?php echo $header_transaksi->status_bayar ?></td>
	</tr>
	<?php $i++; } ?>
</tbody>
</table>
</html>