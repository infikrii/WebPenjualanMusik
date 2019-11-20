
<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
	<div class="leftbar p-r-20 p-r-0-sm">
		<!--  -->
		<?php include('menu.php') ?>
	</div>
</div>

		<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

			<!-- Product -->
			
				<h1><?php echo $title ?></h1>
				<hr>
				<?php 
				// Kalau ada transaksi, tampilkan tabel
				if($header_transaksi) { 
				?>

				<table class="table table-bordered">
					<thead>
						<tr class="bg-info">
							<th>No</th>
							<th>Kode Transaksi</th>
							<th>Tanggal Transaksi</th>
							<th>Total Item</th>
							<th>Total Harga</th>
							<th>Status Pembayaran</th>
							<th>Status Pengiriman</th>
							<th class="text-center">Detail dan Pembayaran</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach($header_transaksi as $header_transaksi) { ?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $header_transaksi->kode_transaksi ?></td>
							<td><?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi)) ?></td>
							<td><?php echo $header_transaksi->total_item ?></td>
							<td><?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
							<td><?php echo $header_transaksi->status_bayar ?></td>
							<td><?php echo $header_transaksi->status_kirim ?></td>
							<td>
								<div class="btn-group">
								<a href="<?php echo base_url('dashboard/detail/'.$header_transaksi->kode_transaksi) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Lihat</a>
								<a href="<?php echo base_url('dashboard/konfirmasi/'.$header_transaksi->kode_transaksi) ?>" class="btn btn-info btn-sm"><i class="fa fa-money"></i> Konfirmasi Pembayaran</a>
								</div>
							</td>
						</tr>
						<?php $i++; } ?>
					</tbody>
				</table>

				<?php 
				// Kalau tidak ada transaksi, tampilkan alert
				}else{ ?>

					<p class="alert alert-success">
						<i class="fa fa-warning"></i> Belum ada riwayat transaksi.
					</p>

				<?php } ?>

			
		</div>
	</div>
</div>
</section>