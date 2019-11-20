<p>
	<a href="<?php echo base_url('admin/kategori/tambah') ?>" class="btn btn-success btn-lg">
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
			<th>Nama</th>
			<th>Slug</th>
			<!-- <th>Urutan</th> -->
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($kategori as $kategori) { ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $kategori->nama_kategori ?></td>
			<td><?php echo $kategori->slug_kategori ?></td>
<!-- 			<td><?php echo $kategori->urutan ?></td> -->
			<td>
				<a href="<?php echo base_url('admin/kategori/edit/'.$kategori->id_kategori) ?>" class="label label-warning"><i class="fa fa-edit"></i> Ubah</a>

				<?php include('delete.php') ?>
			</td>
		</tr>
	<?php $no++; } ?>
	</tbody>
</table>