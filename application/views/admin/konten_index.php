<div class="container-fluid py-4">
	<div id="ilang">
		<?= $this->session->flashdata('alert') ?>
	</div>
	<!-- Tambah User Modal -->
	<div class="modal fade" id="tambahUserModal" tabindex="-1" aria-labelledby="tambahUserModalLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<form id="formTambahUser" action="<?= base_url('admin/konten/simpan') ?>" method="post"
				enctype='multipart/form-data'>
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="tambahUserModalLabel">Tambah Konten</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3 input-group input-group-outline mb-3">
							<label for="judul" class="form-label">Judul</label>
							<input type="text" class="form-control" id="judul" name="judul" required>
						</div>
						<div class="input-group input-group-static mb-4">
							<label for="kategori" class="ms-0">Kategori</label>
							<select class="form-control" id="id_kategori" name="id_kategori" required>
								<?php foreach($kategori as $aa) { ?>
								<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="mb-3 input-group input-group-outline mb-3">
							<label for="keterangan" class="form-label">Keterangan</label>
							<textarea type="text" class="form-control" id="keterangan" name="keterangan"
								required></textarea>
						</div>
						<div class="mb-3 input-group input-group-outline mb-3">
							<label for="foto" class="form-label">Foto</label>
							<input type="file" class="form-control" id="foto" name="foto" required
								accept="image/png, image/gif, image/jpeg">
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
			data-bs-target="#tambahUserModal" style="margin-bottom: 20px;">Tambah Konten</button>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card my-4">
				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
					<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
						<h6 class="text-white text-capitalize ps-3">Kategori Konten</h6>
					</div>
				</div>
				<div class="card-body px-0 pb-2">
					<div class="table-responsive p-0">
						<table class="table align-items-center mb-0">
							<thead>
								<tr>
									<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										No</th>
									<th
										class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
										Judul</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Kategori Konten</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Tanggal</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Kreator</th>
									<th
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Aksi</th>
									<th class="text-secondary opacity-7"></th>
								</tr>
							</thead>
							<tbody class="table-border-bottom-0">
								<?php $no=1; foreach($konten as $aa) { ?>
								<tr>
									<td><?= $no; ?></td>
									<td><?= $aa['judul'] ?></td>
									<td><?= $aa['nama_kategori'] ?></td>
									<td><?= $aa['tanggal'] ?></td>
									<td><?= $aa['nama'] ?></td>
									<td>
										<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
											<span class="tf-icons fas fa-search">Lihat Foto</span>
										</a>
									</td>

									<td class="text-center">
										<button type="button" class="btn btn-danger btn-sm"
											data-bs-toggle="modal"
											data-bs-target="#deleteModal<?= $aa['id_konten']; ?>"
											data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus">
											<i class="fas fa-trash"></i> Delete
										</button>

										<div class="modal fade" id="deleteModal<?= $aa['id_konten']; ?>"
											tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
											aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="deleteModalLabel">Konfirmasi
															Penghapusan</h5>
														<button type="button" class="btn-close text-dark"
															data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														Apakah Anda yakin ingin menghapus Konten
														<br><strong><?= $aa['judul'] ?></strong>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn bg-gradient-secondary"
															data-bs-dismiss="modal">Tidak</button>
														<a href="<?= site_url('admin/konten/delete_data/'.$aa['foto']); ?>"
															class="btn bg-gradient-primary">
															Ya, Hapus
														</a>
													</div>
												</div>
											</div>
										</div>


										<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
											data-bs-target="#editUserModal<?= $aa['id_konten'] ?>">
											<i class="fas fa-edit"></i> Edit
										</button>

										<div class="modal fade" id="editUserModal<?= $aa['id_konten'] ?>" tabindex="-1"
											aria-labelledby="editUserModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<form id="formeditUser" action="<?= base_url('admin/konten/update/'.$aa['foto']); ?>"
													enctype="multipart/form-data" method="post">
													<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="editUserModalLabel">
																<?= $aa['judul'] ?></h5>
															<button type="button" class="btn-close"
																data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<div class="mb-3 input-group input-group-outline mb-3">
																<label for="judul" class="form-label">Judul</label>
																<input type="text" class="form-control" id="judul"
																	name="judul" value="<?= $aa['judul'] ?>">
															</div>
															<div class="input-group input-group-static mb-4">
																<label for="kategori" class="ms-0">Kategori</label>
																<select class="form-control" id="id_kategori"
																	name="id_kategori" required>
																	<?php foreach($kategori as $uu) { ?>
																	<option
																		<?php if($uu['id_kategori']==$aa['id_kategori']){echo"selected"; } ?>
																		value="<?= $uu['id_kategori'] ?>">
																		<?= $uu['nama_kategori'] ?></option>
																	<?php } ?>
																</select>
															</div>
															<div class="mb-3 input-group input-group-outline mb-3">
																<label for="keterangan"
																	class="form-label">Keterangan</label>
																<textarea type="text" class="form-control"
																	id="keterangan"
																	name="keterangan"><?= $aa['keterangan'] ?></textarea>
															</div>
															<div class="mb-3 input-group input-group-outline mb-3">
																<label for="foto" class="form-label">Foto</label>
																<input type="file" class="form-control" id="foto"
																	name="foto"
																	accept="image/png, image/gif, image/jpeg">
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
