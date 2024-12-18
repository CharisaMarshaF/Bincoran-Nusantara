<div class="container-fluid py-4">
	<div id="ilang">
		<?= $this->session->flashdata('alert') ?>
	</div>
	<!-- Tambah User Modal -->
	<div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<form id="formTambahUser" action="<?= base_url('admin/user/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="tambahUserModalLabel">Tambah User</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3 input-group input-group-outline mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" required>
						</div>
						<div class="input-group input-group-outline mb-3">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" id="username" name="username" required>
						</div>
						
						<div class="input-group input-group-outline mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" id="password" name="password" required>
						</div>
						<div class="mb-3">
							<label for="level" class="form-label">Level</label>
							<select class="form-select" id="level" name="level" required>
								<option value="Admin">Admin</option>
								<option value="Kontributor">Kontributor</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- Button to trigger modal -->
	<div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2 mb-3">
		<button type="button" class="btn bg-gradient-primary w-100 mb-0 toast-btn" data-bs-toggle="modal"
			data-bs-target="#tambahUserModal" style="margin-bottom: 20px;">Tambah User</button>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card my-4">
				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
					<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
						<h6 class="text-white text-capitalize ps-3">Data User</h6>
					</div>
				</div>
				<div class="card-body px-0 pb-2">
					<div class="table-responsive p-0">
						<table class="table align-items-center mb-0">
							<thead>
								<tr>
									<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Username</th>
									<th
										class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
										Nama</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Level</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Aksi</th>
									<th class="text-secondary opacity-7"></th>
								</tr>
							</thead>
							<tbody class="table-border-bottom-0">
								<?php foreach($user as $aa) { ?>
								<tr>
									<td><?= $aa['username'] ?></td>
									<td><?= $aa['nama'] ?></td>
									<td class="text-center"><?= $aa['level'] ?></td>
									<td class="text-center">
										<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
											data-bs-target="#deleteModal<?= $aa['id_user'] ?>" data-bs-toggle="tooltip"
											data-bs-placement="bottom" title="Hapus">
											<i class="fas fa-trash"></i> Delete
										</button>

										<div class="modal fade" id="deleteModal<?= $aa['id_user'] ?>" tabindex="-1"
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
														Apakah Anda yakin ingin menghapus User
														<br><strong><?= $aa['nama'] ?></strong>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn bg-gradient-secondary"
															data-bs-dismiss="modal">Tidak</button>
														<a href="<?= site_url('admin/user/delete_data/'.$aa['id_user']); ?>"
															class="btn bg-gradient-primary">
															Ya, Hapus
														</a>
													</div>
												</div>
											</div>
										</div>

										<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
											data-bs-target="#editUserModal<?= $aa['id_user'] ?>">
											<i class="fas fa-edit"></i> Edit
										</button>

										<div class="modal fade" id="editUserModal<?= $aa['id_user'] ?>" tabindex="-1"
											aria-labelledby="editUserModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<form id="formeditUser" action="<?= base_url('admin/user/update') ?>"
													method="post">
													<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="editUserModalLabel">Edit
																User</h5>
															<button type="button" class="btn-close"
																data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<div class="input-group input-group-outline mb-3">
																<input type="text" class="form-control" id="nama"
																	name="nama" value="<?= $aa['nama'] ?>" required>
															</div>
															<div class="input-group input-group-outline mb-3">
																<input type="text" class="form-control" id="username"
																	name="username" value="<?= $aa['username'] ?>"
																	readonly>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary"
																data-bs-dismiss="modal">Close</button>
															<button type="submit"
																class="btn btn-primary">Simpan</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
