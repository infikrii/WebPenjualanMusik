<a href="#delete-<?php echo $pelanggan->id_pelanggan ?>" data-toggle="modal" data-target="#delete-<?php echo $pelanggan->id_pelanggan ?>" class="label label-danger">
	<i class="fa fa-trash-o"></i> Hapus
</a>

<div class="modal fade" id="delete-<?php echo $pelanggan->id_pelanggan ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Hapus Data Pelanggan</h4>
      </div>
      <div class="modal-body">
	        <div class="callout callout-warning">
		        <h4>Peringatan!</h4>
		        Yakin ingin menghapus data ini? Data yang sudah dihapus tidak dapat dikembalikan
	        </div>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url('admin/pelanggan/delete/'.$pelanggan->id_pelanggan) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Ya, Hapus Data Ini</a>
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Tidak</button>
        
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->