<?php
// Notifikasi Error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form Open
echo form_open(base_url('admin/rekening/tambah'),' class="form-horizontal"');
?>

<div class="form-group">
  <label class="col-md-2 control-label">Nama Bank</label>
  <div class="col-md-5">
    <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank" value="<?php echo set_value('nama_bank') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Nomor Rekening</label>
  <div class="col-md-5">
    <input type="number" name="nomor_rekening" class="form-control" placeholder="Nomor Rekening" value="<?php echo set_value('nomor_rekening') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Atas Nama</label>
  <div class="col-md-5">
    <input type="text" name="pemilik" class="form-control" placeholder="Atas Nama" value="<?php echo set_value('pemilik') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label"></label>
  <div class="col-md-5">
    <button class="btn btn-success btn-lg" name="submit" type="submit">
    	<i class="fa fa-save"></i> Simpan
    </button>
    <button class="btn btn-info btn-lg" name="reset" type="reset">
    	<i class="fa fa-times"></i> Reset
    </button>
     <button class="btn btn-warning btn-lg" onclick="goBack()">
      <i class="fa fa-arrow-left"></i> Kembali
    </button>
<script>
    function goBack() {
        window.history.back();
    }
</script>
  </div>
</div>

<?php echo form_close(); ?>