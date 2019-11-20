<!-- <p>
	<a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p> -->

<?php 
// notifikasi
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>

<table class="table table-bordered" id="example1">
	<thead>
		<tr class="bg bg-info">
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Tanggal Daftar</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($pelanggan as $pelanggan) { ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $pelanggan->nama_pelanggan ?></td>
			<td><?php echo $pelanggan->alamat ?></td>
			<td><?php echo $pelanggan->email ?></td>
			<td><?php echo $pelanggan->telepon ?></td>
			<td><?php echo date('d-m-Y',strtotime($pelanggan->tanggal_daftar)) ?></td>
			<td><?php echo $pelanggan->status_pelanggan ?></td>
			<td>
				<!-- <a href="<?php echo base_url('admin/user/edit/'.$user->id_user) ?>" class="label label-warning"><i class="fa fa-edit"></i> Ubah</a> -->

				<?php include('delete.php') ?>
			</td>
		</tr>
	<?php $no++; } ?>
	</tbody>
</table>