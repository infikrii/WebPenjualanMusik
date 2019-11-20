
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
			
				<h1><?php echo $title ?></h1>
				<br>
			<?php
			// Notifikasi
				if($this->session->flashdata('sukses')) {
					echo '<div class="alert alert-warning">';
					echo $this->session->flashdata('sukses');
					echo '</div>';
			}
			
			// Display error
			echo validation_errors('<div class="alert alert-warning">','</div>');

			// Form Open
			echo form_open(base_url('dashboard/profile'),'class="leave-comment"'); ?>

			<table class="table">
				<thead>
					<tr>
						<th width="25%">Nama</th>
						<th><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pelanggan->nama_pelanggan ?>" required></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo $pelanggan->email ?>" readonly></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" class="form-control" placeholder="*Masukkan minimal 6 karakter untuk mengganti password" value="<?php echo set_value('password') ?>">	
						</td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td><input type="text" name="telepon" class="form-control" placeholder="Telepon/No. Handphone" value="<?php echo $pelanggan->telepon ?>" required></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><textarea name="alamat" class="form-control" placeholder="Masukkan Alamat Anda"><?php echo $pelanggan->alamat ?></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><button class="btn btn-success btn-sm" type="submit">
							<i class="fa fa-save"></i> Update Profile
						</button>
						<button class="btn btn-warning btn-sm" type="reset">
							<i class="fa fa-times"></i> Reset
						</button>
					</td>
					</tr>
				</tbody>
			</table>
			
			<?php echo form_close(); ?>			
		</div>
	</div>
</div>
</section>