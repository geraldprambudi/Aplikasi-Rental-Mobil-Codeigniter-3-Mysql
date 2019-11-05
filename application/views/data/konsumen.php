<div class="container">
	<div class="card mb-3">
		<div class="card-header">
			<a href="<?= base_url('konsumen/add') ?>"><i class="fas fa-plus"></i> Add New</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr align="text-center">
							<th scope="col">No</th>
							<th scope="col">KTP</th>
							<th scope="col">Nama</th>
							<th scope="col">Alamat</th>
							<th scope="col">Jenis Kelamin</th>
							<th scope="col">HP</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>

						<?php 
							if (!empty($konsumen)) {
								$i = 1; 
								foreach($konsumen as $k) : 
						?>
								<tr>
									<th scope="row"><?= $i; ?></th>
									<td><?= $k->ktp ?></td>
									<td><?= $k->nama ?></td>
									<td><?= $k->alamat ?></td>
									<td><?= $k->jenkel ?></td>
									<td><?= $k->hp ?></td>
									<td>
										<a href="<?= base_url('konsumen/edit/' . $k->id) ?>" class="btn btn-small"><i class="fas fa-edit"> Edit</i></a>
										<a href="<?= base_url('konsumen/delete/' . $k->id) ?>" class="btn btn-small"><i class="fas fa-trash"> Delete</i></a>
									</td>
								</tr>
							<?php 
								$i++; 
								endforeach;
								} else {
									echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
								} 
							?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>