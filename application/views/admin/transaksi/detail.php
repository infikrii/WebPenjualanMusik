<p class="pull-right">
	<div class="btn-group pull-right">
		<a href="<?php echo base_url('admin/transaksi') ?>" class="btn btn-warning btn-sm">
			<i class="fa fa-angle-double-left"></i> Kembali</a>
		<a href="<?php echo base_url('admin/transaksi/pdf/'.$header_transaksi->kode_transaksi) ?>" target="_blank" title="Cetak" class="btn btn-default btn-sm">
			<i class="fa fa-print"></i> Cetak</a>
	</div>
</p>
<div class="clearfix"></div><hr>

<table class="table table-bordered">
	<thead>
		<tr class="bg-info">
			<th>No</th>
			<th>Kode</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub Total</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1; foreach($transaksi as $transaksi) { ?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $transaksi->kode_produk ?></td>
			<td><?php echo $transaksi->nama_produk ?></td>
			<td><?php echo number_format($transaksi->jumlah) ?></td>
			<td><?php echo number_format($transaksi->harga) ?></td>
			<td><?php echo number_format($transaksi->total_harga) ?></td>
		</tr>
		<?php $i++; } ?>
	</tbody>
</table><br>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Nama Pelanggan</th>
			<th> : <?php echo $header_transaksi->nama_pelanggan ?></th>
		</tr>
		<tr>
			<th>Kode Transaksi</th>
			<th> : <?php echo $header_transaksi->kode_transaksi ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Tanggal Beli/Check Out</td>
			<td> : <?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi)) ?></td>
		</tr>
		<tr>
			<td>Total Harga</td>
			<td> : Rp <?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
		</tr>
		<tr>
			<td>Tanggal Pembayaran</td>
			<td> : <?php echo $header_transaksi->tanggal_bayar ?></td>
		</tr>
		<tr>
			<td>Status Pembayaran</td>
			<td> : <?php echo $header_transaksi->status_bayar ?></td>
		</tr>
		<tr>
			<td>Pembayaran ke</td>
			<td> : <?php echo $header_transaksi->bank ?> No. Rek <?php echo $header_transaksi->nomor_rekening ?> a.n <?php echo $header_transaksi->pemilik ?></td>
		</tr>
		<tr>
			<td>Bukti Pembayaran</td>
			<td> <?php if($header_transaksi->bukti_bayar =="") { echo 'Belum Ada Bukti Pembayaran'; }else{ ?>
				<img src="<?php echo base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" alt="img img-thumbnail" width="200">
				<?php } ?>
			</td>
		</tr>
	</tbody>
</table>