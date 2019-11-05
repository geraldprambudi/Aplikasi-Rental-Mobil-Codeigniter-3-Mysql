<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
<?php endif; ?>
<!-- jika berhasil add menu -->
<?php echo $this->session->flashdata('message'); ?>

<div class="container">    
    <a href="<?= base_url('konsumen') ?>"><i class="fas fa-arrow-left"></i> Back</a>
</div>

<form action="<?php base_url('konsumen/edit'); ?>" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="form-group">
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $konsumen->id ?>" readonly />
        </div>
        <div class="form-group">
            <label for="name">KTP</label>
            <input class="form-control <?php echo form_error('ktp') ? 'is-invalid' : '' ?>" type="text" name="ktp" placeholder="nama ktp" value="<?php echo $konsumen->ktp ?>" />
            <div class="invalid-feedback">
                <?php echo form_error('ktp') ?>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="<?php echo $konsumen->nama ?>" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?php echo $konsumen->alamat ?>" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="jenkel" name="jenkel" placeholder="jenkel" value="<?php echo $konsumen->jenkel ?>" />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="hp" name="hp" placeholder="hp" value="<?php echo $konsumen->hp ?>" />
        </div>
    </div>
    <div class="modal-footer">
        <input class="btn btn-success" type="submit" name="btn" value="Save" />
    </div>
</form>