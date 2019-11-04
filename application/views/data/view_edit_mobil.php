<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
<?php endif; ?>
<!-- jika berhasil add menu -->
<?php echo $this->session->flashdata('message'); ?>

<div class="container">    
    <a href="<?= base_url('mobil') ?>"><i class="fas fa-arrow-left"></i> Back</a>
</div>

<form action="<?php base_url('mobil/edit'); ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="form-group">
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $mobil->id ?>" />
        </div>
        <div class="form-group">
            <label for="name">Plat*</label>
            <input class="form-control <?php echo form_error('plat') ? 'is-invalid' : '' ?>" type="text" name="plat" placeholder="nama plat" value="<?php echo $mobil->plat ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('plat') ?>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk" value="<?php echo $mobil->merk ?>" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="warna" name="warna" placeholder="Warna" value="<?php echo $mobil->warna ?>" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" value="<?php echo $mobil->tahun ?>" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="status" name="status" placeholder="Status" value="<?php echo $mobil->status ?>" />
        </div>
    </div>
    <div class="modal-footer">
        <input class="btn btn-success" type="submit" name="btn" value="Save" />
    </div>
</form>