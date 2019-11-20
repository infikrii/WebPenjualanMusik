<p>
	<a href="<?php echo base_url('admin/transaksi/cetak_laporan') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-print"></i> Cetak Laporan
	</a>
</p>

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
		<th>Status Kirim</th>
		<th class="text-center">Aksi</th>
	</tr>
</thead>
<tbody>
	<?php $i=1; foreach($header_transaksi as $header_transaksi) { ?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $header_transaksi->nama_pelanggan ?>
			<br><small>
				Telepon: <?php echo $header_transaksi->telepon ?>
				<br>Email: <?php echo $header_transaksi->email ?>
				<br>Alamat Pengiriman: <br><?php echo nl2br($header_transaksi->alamat) ?> 
			</small>
		</td>
		<td><?php echo $header_transaksi->kode_transaksi ?></td>
		<td class="text-center"><?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi)) ?></td>
		<td class="text-center"><?php echo $header_transaksi->total_item ?></td>
		<td>Rp <?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
		<td class="text-center"><?php echo $header_transaksi->status_bayar ?></td>
		<td class="text-center"><?php echo $header_transaksi->status_kirim ?></td>
		<td width="13%">
			<div class="label-group">
			<a href="<?php echo base_url('admin/transaksi/detail/'.$header_transaksi->kode_transaksi) ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="Lihat"><i class="fa fa-eye"></i></a>
			<!-- <a href="<?php echo base_url('admin/transaksi/cetak/'.$header_transaksi->kode_transaksi) ?>" target="_blank" class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Cetak"><i class="fa fa-print"></i></a> -->
			<a href="<?php echo base_url('admin/transaksi/pdf/'.$header_transaksi->kode_transaksi) ?>" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Unduh PDF"><i class="fa fa-file-pdf-o"></i></a>
			<a href="<?php echo base_url('admin/transaksi/kirim/'.$header_transaksi->kode_transaksi) ?>" target="_blank" class="btn btn-default btn-sm" data-toggle="tooltip" data-original-title="Pengiriman"><i class="fa fa-truck"></i></a>
			<!-- <a href="<?php echo base_url('admin/transaksi/status/'.$header_transaksi->kode_transaksi) ?>" class="label label-default" data-toggle="tooltip" data-original-title=" Update Status"><i class="fa fa-check-square-o"></i></a> -->
			</div>
		</td>
	</tr>
	<?php $i++; } ?>
</tbody>
</table>
<!-- inicoment -->