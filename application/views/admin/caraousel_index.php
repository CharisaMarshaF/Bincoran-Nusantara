<div class="row">
	<div id="ilang">
		<?= $this->session->flashdata('alert') ?>
	</div>
	<div class="col-12">
		<div class="card my-4">
			<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
					<h6 class="text-white text-capitalize ps-3">Caraousel</h6>
				</div>
			</div>
			<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
				<div class="modal-body p-4">
					<div class="mb-3 input-group input-group-outline mb-3">
						<label for="judul" class="form-label">Judul</label>
						<input type="text" class="form-control" id="judul" name="judul" required>
					</div>
					<div class="mb-3 input-group input-group-outline mb-3">
						<label for="deskripsi" class="form-label">Deskripsi</label>
						<input type="deskripsi" class="form-control" id="deskripsi" name="deskripsi" required>
					</div>
					<div class="mb-3 input-group input-group-outline mb-3">
						<label for="foto" class="form-label">Pilih Foto dengan ukuran (1 : 3)</label>
						<input type="file" class="form-control" id="foto" name="foto" required
							accept="image/png, image/gif, image/jpeg">
					</div>
				</div>
				<div class="modal-footer p-4">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<?php foreach ($caraousel as $aa){ ?>

<div class="row mt-5">
	<div class="col-12">
		<div class="card mt-4" data-animation="true">
			<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				<a class="d-block blur-shadow-image">
					<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>"
						class="img-fluid shadow border-radius-lg">
				</a>
				<div class="colored-shadow"
					style="background-image: url(&quot;https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg&quot;);">
				</div>
				<div class="colored-shadow"></div>
			</div>
			<div class="card-body text-center">
				<div class="center mt-n6 mx-auto">
					<!-- Tombol untuk membuka Modal -->
					<a href="#" class="btn btn-link text-primary ms-auto border-0" data-bs-toggle="modal"
						data-bs-target="#deleteModal<?= $aa['id_caraousel']; ?>" data-bs-toggle="tooltip"
						data-bs-placement="bottom" title="Hapus">
						<i class="fas fa-trash-alt"></i>
					</a>

					<!-- Modal Konfirmasi Hapus -->
					<div class="modal fade" id="deleteModal<?= $aa['id_caraousel']; ?>" tabindex="-1" role="dialog"
						aria-labelledby="deleteModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
									<button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									Apakah Anda yakin ingin menghapus Caraousel <br><strong><?= $aa['judul'] ?></strong>?
								</div>
								<div class="modal-footer">
									<!-- Tombol Batal (Tutup Modal) -->
									<button type="button" class="btn bg-gradient-secondary"
										data-bs-dismiss="modal">Tidak</button>
									<!-- Tombol Hapus (Lanjutkan penghapusan) -->
									<a href="<?= site_url('admin/caraousel/delete_data/'.$aa['foto']); ?>"
										class="btn bg-gradient-primary">
										Ya, Hapus
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h5 class="font-weight-normal mt-3">
					<a href="javascript:;"><?= $aa['judul'] ?></a>
				</h5>
				<p><a href="javascript:;"><?= $aa['deskripsi'] ?></a></p>

			</div>
			<hr class="dark horizontal my-0">
		</div>
	</div>
</div>
<?php } ?>