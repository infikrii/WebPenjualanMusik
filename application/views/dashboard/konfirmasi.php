
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
	<br>
	<?php 
	// Kalau ada transaksi, tampilkan tabel
	if($header_transaksi) { 
	?>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Kode Transaksi</th>
				<th> <?php echo $header_transaksi->kode_transaksi ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanggal</td>
				<td> <?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi)) ?></td>
			</tr>

			<tr>
				<td>Total Harga</td>
				<td> <?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
			</tr>

			<tr>
				<td>Status Pembayaran</td>
				<td> <?php echo $header_transaksi->status_bayar ?></td>
			</tr>

			<td>Bukti Bayar</td>
				<td><?php if($header_transaksi->bukti_bayar !="") { ?>
					<img src="<?php echo base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="200">
				<?php }else{ echo 'Belum ada bukti bayar'; } ?>
				</td>
			</tr>

		</tbody>
	</table>

	<?php 
	//Eror Upload
	if(isset($error)) {
		echo '<p class="alert alert-warning">'.$error.'</p>';
	} 

	// Notifikasi Error
	echo validation_errors('<p class="alert alert-warning">','</p>');

	// Form Open
	echo form_open_multipart(base_url('dashboard/konfirmasi/'.$header_transaksi->kode_transaksi));

	?>
	<table class="table">
		<thead>
			<tr>
				<th width="30%">Pembayaran ke Rekening</th>
				<td>
					<select name="id_rekening" class="form-control">
						<?php foreach($rekening as $rekening) { ?>
						<option value="<?php echo $rekening->id_rekening ?>"<?php if($header_transaksi->id_rekening==$rekening->id_rekening) { echo "selected"; } ?>>
							<?php echo $rekening->nama_bank ?> (No. Rek: <?php echo $rekening->nomor_rekening ?> a.n <?php echo $rekening->pemilik ?>)
						</option>
						<?php } ?>
					</select>
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanggal Bayar</td>
				<td><input type="text" name="tanggal_bayar" class="form-control" placeholder="dd-mm-yyyy"value="<?php if(isset($_POST['tanggal_bayar'])) { echo set_value('tanggal_bayar'); }elseif($header_transaksi->tanggal_bayar!="") { echo $header_transaksi->tanggal_bayar; }else{ echo date('d-m-Y'); } ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td><input type="number" name="jumlah_bayar" class="form-control" placeholder="Misal 1000000" value="<?php if(isset($_POST['jumlah_bayar'])) { echo set_value('jumlah_bayar'); }elseif($header_transaksi->jumlah_bayar!="") { echo $header_transaksi->jumlah_bayar; }else{ echo $header_transaksi->jumlah_transaksi; } ?>"></td>
			</tr>
			<tr>
				<td>Dari Bank</td>
				<td><input type="text" name="nama_bank" class="form-control" value="<?php echo $header_transaksi->nama_bank ?>" placeholder="Misal Bank BCA"></td>
			</tr>
			<tr>
				<td>Dari Rekening</td>
				<td><input type="text" name="rekening_pembayaran" class="form-control" value="<?php echo $header_transaksi->rekening_pembayaran ?>" placeholder="Masukkan No. Rekening"></td>
			</tr>
			<tr>
				<td>Atas Nama</td>
				<td><input type="text" name="rekening_pelanggan" class="form-control" value="<?php echo $header_transaksi->rekening_pelanggan ?>" placeholder="Misal Juminten"></td>
			</tr>
			<tr>
				<td>Upload Bukti Bayar</td>
				<td><input type="file" name="bukti_bayar" class="form-control" placeholder="Upload Bukti Pembayaran"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<div class="btn-group">
						<button class="btn btn-info btn-sm" type="submit" name="submit"><i class="fa fa-upload"></i> Submit</button>
						<button class="btn btn-warning btn-sm" type="reset" name="reset"><i class="fa fa-times"></i> Reset</button>
						
					</div>
					<button class="btn btn-warning btn-sm" onclick="goBack()">
				      	<i class="fa fa-arrow-left"></i> Kembali
				    	</button>
							<script>
				    		function goBack() {
				        	window.history.back();
				   		 }
							</script>
				</td>
			</tr>
		</tbody>
	</table>

	<?php 
	// Form Close
	echo form_close();

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