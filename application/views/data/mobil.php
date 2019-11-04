<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang </h1>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <!-- jika berhasil add menu -->
    <?php echo $this->session->flashdata('message'); ?>
    <a href="#" class="btn btn-danger mb-3" data-toggle="modal" data-target="#newMenuMobil">Add New Mobil</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Plat Mobil</th>
                <th scope="col">Merk</th>
                <th scope="col">Warna</th>
                <th scope="col">Tahun</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($mbl)) { ?>
                <?php $i = 1; ?>
                <?php foreach ($mbl as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $m['plat']; ?></td>
                        <td><?= $m['merk']; ?></td>
                        <td><?= $m['warna']; ?></td>
                        <td><?= $m['tahun']; ?></td>
                        <td><?= $m['status']; ?></td>
                        <td>
                            <a href="<?= base_url('mobil/edit/') . $m['id']; ?>" class="btn btn-primary">edit</a>
                            <a href="<?= base_url('mobil/hapus/') . $m['id']; ?>" class="btn btn-primary">delete</a>

                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php } else {
                echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
            } ?>
        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- popup mobil -->

<div class="modal fade" id="newMenuMobil" tabindex="-1" role="dialog" aria-labelledby="newMenuMobilLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuMobilLabel">Add New Mobil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('mobil'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="plat" name="plat" placeholder="Plat">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="warna" name="warna" placeholder="Warna">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="status" name="status" placeholder="Status">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- end popup mobil -->