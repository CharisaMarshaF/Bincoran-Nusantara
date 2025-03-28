<!-- BEGIN: Modal Toggle -->
<div class="text-left mt-8">
	<a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview"
 		class="btn btn-primary">Tambah Produk</a>
</div>
<!-- END: Modal Toggle -->


<div id="myalert" style="margin-top: 10px;">
	<?php echo $this->session->flashdata('notifikasi', true)?>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y box mt-3">
    <div class="p-5">
        <div class="preview">
            <div class="overflow-x-auto">
                <!-- DataTables Table -->
                <table id="example1" class="table table-report table-report--bordered display datatable w-full">
                    <thead class="bg-gray-100">
                    <tr>
				<th class="border-b-2 whitespace-no-wrap">NO </th>
				<th class="border-b-2 whitespace-no-wrap">Produk </th>
				<th class="border-b-2 whitespace-no-wrap">Deskripsi</th>
				<th class="border-b-2 whitespace-no-wrap">Tanggal</th>
				<th class="border-b-2 whitespace-no-wrap">Kreator</th>
				<th class="border-b-2 whitespace-no-wrap">Foto</th>
				<th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
			</tr>
		</thead>
		<tbody>
			<?php  $no = 1; foreach ($konten as $kk) {?>
			<tr>
				<td class="text-left border-b"><?= $no; ?></td>
				<td class="text-left border-b"><?= $kk['judul']; ?></td>
				<td class="text-left border-b"><?= $kk['keterangan']; ?></td>
				<td class="text-left border-b"><?= $kk['tanggal']; ?></td>
				<td class="text-left border-b"><?= $kk['nama']; ?></td>
				<td class="text-left border-b">
					<img src="../assets/upload/konten/<?= $kk['foto']; ?>" alt="Foto" width="100">
				</td>

				<td class="border-b w-5">
					<div class="flex justify-center items-center">
						<a class="flex items-center mr-3 text-blue-500 edit-btn" href="javascript:;" 
							data-id="<?= $kk['id_konten']; ?>" 
							data-judul="<?= $kk['judul']; ?>" 
							data-keterangan="<?= $kk['keterangan']; ?>" 
							data-foto="<?= base_url('assets/upload/konten/' . $kk['foto']); ?>" 
							data-tw-toggle="modal" 
							data-tw-target="#edit-modal">
							<i data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit
						</a>
						<a class="flex items-center text-danger delete-btn" href="javascript:;" 
							data-foto="<?= $kk['foto']; ?>">
							<i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
						</a>
					</div>
				</td>
			</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
</div>

<!-- END: EDIT Confirmation Modal -->
<!-- BEGIN: Delete Confirmation Modal -->
<!-- BEGIN: Modal Edit Supplier -->
<div id="edit-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">EDIT PRODUK</h2>
            </div>
            <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
					<input type="hidden" name="nama_foto" id="old-foto"> <!-- Simpan foto lama -->
                    <input type="hidden" name="id_konten" id="edit-id"> <!-- Hidden ID -->
                    <div class="col-span-12">
                        <label class="form-label"><P>Produk</P></label>
                        <input name="judul" id="edit-judul" type="text" class="form-control" required>
                    </div>
                    <div class="col-span-12">
                        <label class="form-label">Deskripsi</label>
                        <input name="keterangan" id="edit-keterangan" type="text" class="form-control" required>
                    </div>
                    <div class="col-span-12">
						<label class="form-label">Foto</label>
						<input name="foto" id="edit-foto" type="file" class="form-control" accept="image/*" >
						<img id="preview" src="" alt="Preview Foto" style="display:none; width: 100px; margin-top: 10px;">

					</div>
                </div>
                <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Batal</button>
                    <button type="submit" class="btn btn-primary w-20">Update</button>
                </div>
                <!-- END: Modal Footer -->
            </form>
        </div>
    </div>
</div>
<!-- END: Modal Edit Supplier -->
<!-- BEGIN: Modal Content -->
<div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">TAMBAH PRODUK</h2>
            </div> <!-- END: Modal Header -->
            <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12">
                        <label class="form-label">Nama Produk</label>
                        <input name="judul" id="modal-form-nama" type="text" class="form-control" placeholder="Nama Produk" required>
                    </div>
					<div class="col-span-12">
						<label class="form-label">Deskripsi</label>
						<textarea name="keterangan" id="modal-form-keterangan" class="form-control" rows="4" required></textarea>
					</div>

                    <div class="col-span-12">
						<label class="form-label">Foto</label>
						<input name="foto" id="modal-form-foto" type="file" class="form-control" accept="image/*" required>
						<img id="preview" src="" alt="Preview Foto" style="display:none; width: 100px; margin-top: 10px;">
					</div>

                    
                </div>
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Batal</button>
                    <button type="submit" class="btn btn-primary w-20">Simpan</button>
                </div>
                <!-- END: Modal Footer -->
            </form>
        </div>
    </div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function () {
	$(".edit-btn").click(function () {
    var id = $(this).data("id");
    var judul = $(this).data("judul");
    var keterangan = $(this).data("keterangan");
    var foto = $(this).data("foto");

    $("#edit-id").val(id);
    $("#edit-judul").val(judul);
    $("#edit-keterangan").val(keterangan);

    if (foto) {
        $("#preview").attr("src", foto).show();
    } else {
        $("#preview").hide();
    }
});

$("#edit-foto").change(function (event) {
    var file = event.target.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#preview").attr("src", e.target.result).show();
        };
        reader.readAsDataURL(file);
    }
});



    $(".delete-btn").click(function () {
        var foto = $(this).data("foto"); 
        
        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Data ini akan dihapus secara permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('admin/konten/delete_data/') ?>" + foto;
            }
        });

    });
});
</script>
<script>
    document.getElementById('modal-form-foto').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('preview');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $("#myalert").fadeOut("slow");
    }, 3000); 
});
</script>