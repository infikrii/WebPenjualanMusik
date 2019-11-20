<p>
	<a href="<?php echo base_url('admin/rekening/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p>

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
			<th>Nama Bank</th>
			<th>Nomor Rekening</th>
			<th>Pemilik</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($rekening as $rekening) { ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $rekening->nama_bank ?></td>
			<td><?php echo $rekening->nomor_rekening ?></td>
			<td><?php echo $rekening->pemilik ?></td>
			<td>
				<a href="<?php echo base_url('admin/rekening/edit/'.$rekening->id_rekening) ?>" class="label label-warning"><i class="fa fa-edit"></i> Ubah</a>

				<?php include('delete.php') ?>
			</td>
		</tr>
	<?php $no++; } ?>
	</tbody>
</table>