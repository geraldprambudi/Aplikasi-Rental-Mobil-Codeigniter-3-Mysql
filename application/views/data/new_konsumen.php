<div class="container-fluid">
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

	<div class="card-mb-3">
		<div class="card-header">
			<a href="<?= base_url('konsumen') ?>"><i class="fas fa-arrow-left"></i> Back</a>
		</div>
		<div class="card-body">
			<form action="<?php base_url('konsumen/add') ?>" method="post" enctype="multipart/form-data">
				
				<div class="form-group">	
					<label for="ktp">KTP</label>
					<input class="form-control <?= form_error('ktp') ? 'is-invalid' : '' ?>" type="text" name="ktp" placeholder="Nama ktp" value="<?= set_value('ktp'); ?>"  />
                    <div class="invalid-feedback">
                        <?= form_error('ktp') ?>
                    </div>
				</div>
				<div class="form-group">	
					<label for="nama">Nama</label>
					<input class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" type="text"  name="nama" placeholder="Nama" value="<?= set_value('nama'); ?>" />
					<div class="invalid-feedback">
					    <?= form_error('nama') ?>
					</div>
				</div>
				<div class="form-group">	
					<label for="alamat">Alamat</label>
					<input class="form-control <?= form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="alamat" value="<?= set_value('alamat'); ?>" />
					<div class="invalid-feedback">
						<?= form_error('alamat') ?>
					</div>
				</div>
				<div class="form-group">	
					<label for="jenkel">Jenis Kelamin</label>
					<input class="form-control <?= form_error('jenkel') ? 'is-invalid' : '' ?>" type="text" name="jenkel" placeholder=" jenkel" value="<?= set_value('jenkel'); ?>" />
					<div class="invalid-feedback">
						<?= form_error('jenkel') ?>
					</div>
				</div>
				<div class="form-group">	
					<label for="HP">No HP</label>
					<input class="form-control <?= form_error('hp') ? 'is-invalid' : '' ?>" type="text" name="hp" placeholder="no hp" value="<?= set_value('hp'); ?>" />
					<div class="invalid-feedback">
						<?= form_error('hp') ?>
					</div>
				</div>
				<button type="submit" class="btn btn-success" value="Save">Save</button>
			</form>
		</div>
	</div>

</div>