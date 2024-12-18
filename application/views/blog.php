<?php require_once('_css.php')?>


<body>

	<?php require_once('_navbar.php')?>

	<!-- END nav -->
	<section class="hero-wrap degree-right js-fullheight">
		<div class="home-slider js-fullheight owl-carousel">
			<?php foreach ($caraousel as $aa) { ?>
			<div class="slider-item js-fullheight"
				style="background-image:url('<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>');">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center">
						<div class="col-md-12 ftco-animate">
							<div class="absolute">
								<!--<h4 class="number" data-number="21">0</h4>
								<p>Years of Experienced</p>-->
							</div>
							<div class="text">
								<h1 class="mb-4"><?= $aa['judul'] ?></h1>
								<p><?= $aa['deskripsi'] ?></p>
							</div>
						</div>
						<!--<a href="https://vimeo.com/45830194"
							class="img-video popup-vimeo d-flex align-items-center justify-content-center">
							<span class="fa fa-play"></span>
						</a> -->
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row d-flex flex-wrap">
				<div class="col-md-8">
					<!-- Kolom untuk Konten Utama -->
					<div class="row">
						<?php foreach ($konten as $uu) { ?>
						<div class="col-md-4 d-flex ftco-animate mb-4">
							<div class="blog-entry justify-content-end">
								<div class="text">
									<h3 class="heading mb-3"><a href="<?= base_url('home/artikel/'.$uu['slug']) ?>"><?= $uu['judul'] ?></a></h3>
									<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="block-20 img"
										style="background-image: url('<?= base_url('assets/upload/konten/'.$uu['foto']) ?>'); background-size: 400px 420px; background-position: center;">
									</a>
									<div class="meta mb-3">
										<div><a href="#"><?= $uu['tanggal'] ?></a></div>
										<div><a href="#"><?= $uu['username'] ?></a></div>
										<div><a href="#" class="meta-chat"><span class="fa fa-meteor"></span><a
													class="btn btn-"><?= $uu['nama_kategori'] ?></a></div>
									</div>
									<p><?= substr($uu['keterangan'], 0, 100) ?> ....</p>
								</div>
							</div>
						</div>


						<?php } ?>
					</div>
					<?php if (isset($pagination_links)) { ?>
						<nav>
							<ul class="pagination justify-content-center">
								<?php echo $pagination_links; ?>
							</ul>
						</nav>
					<?php } ?>

				</div>

				<div class="col-md-4 sidebar ftco-animate">
					<!-- Kolom untuk Sidebar -->
					<div class="sidebar-box">
						<form action="<?= base_url('home/blog') ?>" class="search-form" method="GET">
							<div class="form-group">
								<span class="icon fa fa-search"></span>
								<input type="text" class="form-control" placeholder="Search..." name="search">
								<button type="submit" style="display : none;">Search</button>
							</div>
						</form>
					</div>
					<div class="sidebar-box ftco-animate">
						<div class="categories">
							<h3>Categories</h3>
							<?php foreach ($kategori as $kate) { ?>
							<li><a
									href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?><span>#</span></a>
							</li>
							<?php } ?>
						</div>
					</div>

					<div class="sidebar-box ftco-animate">
						<h3>Recent Post</h3>
						<?php foreach ($recentpost as $recentpost) { ?>
						<div class="block-21 mb-4 d-flex">
							<a href="<?= base_url('home/artikel/'.$recentpost->slug) ?>" class="blog-img mr-3"
								style="background-image: url('<?= base_url('assets/upload/konten/'.$recentpost->foto) ?>');"></a>
							<div class="text">
								<h3 class="heading"><a
										href="<?= base_url('home/artikel/'.$recentpost->slug) ?>"><?= $recentpost->judul; ?></a>
								</h3>
								<div class="meta">
									<div><a href="#"><span class="icon-calendar"></span><?= $recentpost->tanggal; ?></a>
									</div>
									<div><a href="#"><span class="icon-person"></span><?= $recentpost->username; ?></a>
									</div>
									<div><a href="#"><span
												class="icon-chat"></span><?= $recentpost->nama_kategori; ?></a></div>

								</div>
							</div>
						</div>
						<?php } ?>

					</div>
					<!-- <div class="sidebar-box ftco-animate">
						<h3>Tag Cloud</h3>
						<div class="tagcloud">
							<a href="#" class="tag-cloud-link">web</a>
							<a href="#" class="tag-cloud-link">design</a>
							<a href="#" class="tag-cloud-link">graphic</a>
							<a href="#" class="tag-cloud-link">ui</a>
							<a href="#" class="tag-cloud-link">ux</a>
							<a href="#" class="tag-cloud-link">apps</a>
							<a href="#" class="tag-cloud-link">programming</a>
							<a href="#" class="tag-cloud-link">development</a>
						</div>
					</div>

					<div class="sidebar-box ftco-animate">
						<h3>Paragraph</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
							necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
							consectetur similique, inventore eos fugit cupiditate numquam!</p>
					</div> -->
				</div>
			</div>
		<div class="pt-5 mt-5">	
			<!-- END comment-list -->

			<div class="comment-form-wrap pt-5">
				<h3 class="mb-5">Berikan Ulasan</h3>

				<form action="<?= base_url('home/saran') ?>" method="POST" class="p-5">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="nama" id="nama">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email">
					</div>
					<div class="form-group">
						<label for="isi_saran">Ulasan</label>
						<textarea name="isi_saran" id="isi_saran" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="Post Ulasan" class="btn py-3 px-4 btn-primary">
					</div>
				</form>
			</div>
		</div>

	</section>



	<?php require_once('_footer.php')?>




	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>


	<script src="<?= base_url('assets/avo') ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/popper.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.stellar.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/scrollax.min.js"></script>
	<script
		src="<?= base_url('assets/avo') ?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
	</script>
	<script src="<?= base_url('assets/avo') ?>/js/google-map.js"></script>
	<script src="<?= base_url('assets/avo') ?>/js/main.js"></script>
	<script>
		$(document).ready(function () {
			$('.home-slider').owlCarousel({
				items: 1,
				loop: true,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true, // Pause on hover
				animateOut: 'fadeOut', // Optional: add fade out effect
				animateIn: 'fadeIn' // Optional: add fade in effect
			});
		});
	</script>

</body>

</html>