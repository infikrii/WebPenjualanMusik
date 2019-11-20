<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<style type="text/css" media="print">
		body{
			font-size: 12px;
			font-family: Arial;
		}
		table {
			border: solid thin #000;
			border-collapse: collapse;
			margin-bottom: 1cm;
		}
		td {
			padding: 6px 12px;
			border: solid thin #000;
			text-align: left;
		}
		.bg-info {
			background-color: #00c0ef;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div style="width: 19cm; height: 27cm; padding-top: 20px;">
		<h1 style="text-align: center; font-size: 18px; font-weight: bold;">
			NOTA PENGIRIMAN
		</h1>
		<p><small>Dikirim pada tanggal: <?php echo date('d-m-Y') ?></small></p>
		<table>
				<tr>
					<td>
						<strong>PENERIMA:</strong>
						<p><?php echo $header_transaksi->nama_pelanggan ?>
						<br><?php echo $header_transaksi->alamat ?>
						<br><?php echo $header_transaksi->telepon ?>
					</p>
					</td>
					<td>
						<strong>PENGIRIM:</strong>
						<p><?php echo $site->namaweb ?>
						<br><?php echo $site->alamat ?>
						<br><?php echo $site->telepon ?>
					</p>
					</td>
				</tr>
		</table><br>
		<table class="table table-bordered" width="100%">
	<thead>
		<tr class="bg-info">
			<th>No</th>
			<th>Kode</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga (Rp)</th>
			<th>Sub Total (Rp)</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1; foreach($transaksi as $transaksi) { ?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $transaksi->kode_produk ?></td>
			<td><?php echo $transaksi->nama_produk ?></td>
			<td width="8%" class="text-center"><?php echo number_format($transaksi->jumlah) ?></td>
			<td width="15%" class="text-right"><?php echo number_format($transaksi->harga) ?></td>
			<td width="17%" class="text-right"><?php echo number_format($transaksi->total_harga) ?></td>
		</tr>
		<?php $i++; } ?>
	</tbody>
</table>
	</div>
</body>
</html>