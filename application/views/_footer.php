<footer class="ftco-footer ftco-section">
	<div class="degree-footer-top"></div>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2"><?= $konfig->judul_website; ?></h2>
					<p><?= $konfig->profil_website; ?></p>
					<ul class="ftco-footer-social list-unstyled mt-5">
						<li class="ftco-animate"><a href="<?= $konfig->email; ?>"><span
									class="fa fa-envelope"></span></a></li>
						<li class="ftco-animate"><a href="<?= $konfig->facebook; ?>"><span
									class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="<?= $konfig->instagram; ?>"><span
									class="fa fa-instagram"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md">
				<div class="ftco-footer-widget mb-4 ml-md-4">
					<h2 class="ftco-heading-2">Quick Links</h2>
					<ul class="list-unstyled">
						<li><a href="<?= base_url() ?>"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
						<?php foreach ($kategori as $kate){ ?>
						<li><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><span
									class="fa fa-chevron-right mr-2"></span><?= $kate['nama_kategori'] ?></a></li>
						<?php } ?>
						<li><a href="<?= base_url('home/blog') ?>"><span
									class="fa fa-chevron-right mr-2"></span>Blog</a></li>
						<li><a href="<?= base_url('home/galeri/') ?>"><span
									class="fa fa-chevron-right mr-2"></span>Galeri</a></li>
					</ul>
				</div>
			</div>
			
			<div class="col-md">
				<div class="ftco-footer-widget mb-4 ml-md-4">
					<h2 class="ftco-heading-2">Recent Post</h2>
					<?php foreach ($recentfooter as $recentfooter) { ?>
					<ul class="list-unstyled">
						<li><a href="<?= base_url('home/artikel/'.$recentfooter->slug) ?>"><span
									class="fa fa-chevron-right mr-2"></span><?= $recentfooter->judul; ?></a></li>
					</ul>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">

				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved |  <i class="fa fa-heart"
						aria-hidden="true"></i>  <a href="<?= base_url('home') ?>"
						><?= $konfig->judul_website; ?></a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</div>
</footer>