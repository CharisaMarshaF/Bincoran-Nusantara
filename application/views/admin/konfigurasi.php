<div class="row">
		<div class="col-12">
			<div class="card my-4">
				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
					<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
						<h6 class="text-white text-capitalize ps-3">Konfigurasi</h6>
					</div>
				</div>
				<div class="card-body px-0 pb-2">
					<div class="table-responsive p-0">
						<table class="table align-items-center mb-0">
                            <form id="formTambahUser" action="<?= base_url('admin/konfigurasi/update') ?>" method="post" enctype='multipart/form-data'>
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahUserModalLabel"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <div class="mb-3 input-group input-group-outline mb-3">
                                            <label for="judul_website" class="form-label">Judul Website</label>
                                            <input type="text" class="form-control" id="judul_website" name="judul_website" value="<?= $konfig->judul_website; ?>">
                                        </div>
                                        <div class="mb-3 input-group input-group-outline mb-3">
                                            <label for="profil_website" class="form-label">Profile Website</label>
                                            <textarea class="form-control" id="profil_website" name="profil_website"><?= $konfig->profil_website; ?></textarea>
                                        </div>
                                        <div class="mb-3 input-group input-group-outline mb-3">
                                            <label for="instagram" class="form-label">instagram</label>
                                            <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $konfig->instagram; ?>">
                                        </div>
                                        <div class="mb-3 input-group input-group-outline mb-3">
                                            <label for="facebook" class="form-label">Facebook</label>
                                            <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $konfig->facebook; ?>">
                                        </div>
                                        <div class="mb-3 input-group input-group-outline mb-3">
                                            <label for="tiktok" class="form-label">Tiktok</label>
                                            <input type="text" class="form-control" id="tiktok" name="tiktok" value="<?= $konfig->tiktok; ?>">
                                        </div>
                                        <div class="mb-3 input-group input-group-outline mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $konfig->alamat; ?>">
                                        </div>
                                        <div class="mb-3 input-group input-group-outline mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $konfig->email; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer p-4">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

                        