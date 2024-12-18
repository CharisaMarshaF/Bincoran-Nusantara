<div class="row">
	<div id="ilang">
		<?= $this->session->flashdata('alert') ?>
	</div>
	<div class="col-12">
		<div class="card my-4">
			<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
					<h6 class="text-white text-capitalize ps-3">Halaman Saran</h6>
				</div>
			</div>
			<div class="card-body px-0 pb-2">
				<div class="table-responsive p-0">
					<table class="table align-items-center mb-0">
						<thead>
							<tr>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									No</th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
									Nama</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Email</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Saran</th>
								<th
									class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
									Aksi</th>
								<th class="text-secondary opacity-7"></th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							<?php $no=1; foreach($saran as $ss) { ?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $ss['nama'] ?></td>
								<td><?= $ss['email'] ?></td>
								<td><?= $ss['isi_saran'] ?></td>


								<td class="text-center">
									<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
										data-bs-target="#deleteModal<?= $ss['id_saran'] ?>" data-bs-toggle="tooltip"
										data-bs-placement="bottom" title="Hapus">
										<i class="fas fa-trash"></i> Delete
									</button>

									<div class="modal fade" id="deleteModal<?= $ss['id_saran'] ?>" tabindex="-1"
										role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="deleteModalLabel">Konfirmasi
														Penghapusan</h5>
													<button type="button" class="btn-close text-dark"
														data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													Apakah Anda yakin ingin menghapus Saran dari
													<br><strong><?= $ss['nama'] ?></strong>?
												</div>
												<div class="modal-footer">
													<button type="button" class="btn bg-gradient-secondary"
														data-bs-dismiss="modal">Tidak</button>
													<a href="<?= site_url('admin/saran/delete_data/'.$ss['id_saran']); ?>"
														class="btn bg-gradient-primary">
														Ya, Hapus
													</a>
												</div>
											</div>
										</div>
									</div>
							</tr>
							<?php $no++; } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
