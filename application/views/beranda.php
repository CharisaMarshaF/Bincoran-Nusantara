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
							<!-- <div class="absolute">
								<h4 class="number" data-number="21">0</h4>
								<p>Years of Experienced</p>
							</div> -->
							<div class="text">
								<h1 class="mb-4"><?= $aa['judul'] ?></h1>
								<p><?= $aa['deskripsi'] ?></p>
							</div>
						</div>
						<a href="<?= base_url('assets/videos/video.mp4') ?>"
							class="img-video bg-primary popup-vimeo d-flex align-items-center justify-content-center">
							<span class="fa fa-play"></span>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center no-gutters">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<h2 class="mb-2">Tentang Kami</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md d-flex align-items-stretch ftco-animate">
					<div class="media block-6 w-100 services d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<i class="fas fa-meteor"></i>
						</div>
						<div class="media-body py-md-4">
							<h3>Fenomena Langit</h3>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-items-stretch ftco-animate">
					<div class="media block-6 w-100 services d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<i class="fas fa-satellite"></i>
						</div>
						<div class="media-body py-md-4">
							<h3>Eksplorasi Antariksa</h3>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-items-stretch ftco-animate">
					<div class="media block-6 w-100 services d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<i class="fas fa-globe"></i>
						</div>
						<div class="media-body py-md-4">
							<h3>Pengetahuan Kosmos</h3>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-items-stretch ftco-animate">
					<div class="media block-6 w-100 services d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<i class="fas fa-user-astronaut"></i>
						</div>
						<div class="media-body py-md-4">
							<h3>Perjalanan Astronot</h3>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-items-stretch ftco-animate">
					<div class="media block-6 w-100 services d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<i class="fas fa-star"></i>
						</div>
						<div class="media-body py-md-4">
							<h3>Bintang dan Rasi</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row wrap-about my-5">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6 order-md-last ftco-animate d-flex">
							<div class="img w-100"
								style="background-image: url('<?= base_url('assets/avo/images/galla.jpg') ?>');"></div>
						</div>
						<div class="col-md-6 ftco-animate">
							<div class="text text-md-right">
								<h3>Jelajahi Keajaiban Alam Semesta</h3>
								<p>Artikel kami mengajak Anda menyelami dunia astronomi, dari penemuan terbaru, keindahan
									fenomena langit, hingga ilmu pengetahuan kosmik yang menakjubkan.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="text">
						<p>Di balik luasnya langit malam, ada rahasia alam semesta yang menunggu untuk ditemukan. Ikuti
							eksplorasi kami dalam dunia astronomi yang penuh inspirasi dan pengetahuan.</p>
						<p><a href="<?= base_url('home/blog/') ?>" class="btn btn-primary">Selengkapnya</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>





	<section class="ftco-section ftco-portfolio bg-light">
		<div class="row justify-content-center no-gutters">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<h2 class="mb-2">Galeri Kami</h2>
			</div>
		</div>

		<div class="container">
			<div class="row no-gutters pb-5">
				<?php foreach ($recentgaleri as $index => $gg) { ?>
				<div class="col-md-12 portfolio-wrap mt-0">
					<div class="row no-gutters align-items-center">
						<?php if ($index % 2 == 0) { ?>
						<div class="col-md-5 img"
						style="background-image: url('<?= base_url('assets/upload/galeri/'.$gg->foto) ?>'); background-size: 400px 420px; background-position: center;">						</div>
						<div class="col-md-7">
							<div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc">
										<div class="top">
											<h2 class="mb-2"><a href=""><?= $gg->judul; ?></a></h2>
										</div>
										<div class="absolute">
											<p><?= $gg->isifoto; ?></p>
											<div class="icon d-flex align-items-center mb-4">

												<div class="position pl-3 text-left	">
													<h4 class="mb-0"><?= $gg->tanggal; ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php } else { ?>
						<div class="col-md-7">
							<div class="text pt-5 pr-md-5 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc text-md-right">
										<div class="top">
											<h2 class="mb-2"><a href="work.html"><?= $gg->judul; ?></a></h2>
										</div>
										<div class="absolute">
											<p><?= $gg->isifoto; ?></p>
											<div class="d-flex w-100">
												<div class="icon d-flex align-items-center ml-md-auto mb-4">
													<div class="position pl-3 text-left">
														<h4 class="mb-0"><?= $gg->tanggal; ?></h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5 order-md-last img"
						style="background-image: url('<?= base_url('assets/upload/galeri/'.$gg->foto) ?>'); background-size: 400px 420px; background-position: center;">						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
		</div>
		</div>
		<div class="degree-left"></div>
	</section>

	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-3">Ulasan Kami?</h2>
				</div>
			</div>
			<div class="row ftco-animate mb-4">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<?php foreach ($saran as $ss){ ?>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4"><?= $ss['isi_saran'] ?></p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="pl-3">
											<p class="name"><?= $ss['nama'] ?></p>
											<span class="position"><?= $ss['tanggal'] ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2>Recent Post</h2>
				</div>
			</div>
			<div class="row d-flex">
				<?php foreach ($recentpost as $recentpost) { ?>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<div class="text">
							<h3 class="heading mb-3"><a
									href="<?= base_url('home/artikel/'.$recentpost->slug) ?>"><?= $recentpost->judul; ?></a>
							</h3>
							<a href="<?= base_url('home/artikel/'.$recentpost->slug) ?>" class="block-20 img"
								style="background-image: url('<?= base_url('assets/upload/konten/'.$recentpost->foto) ?>'); background-size: 400px 420px; background-position: center;">
							</a>
							<div class="meta mb-3">
								<div><a href="<?= base_url('home/artikel/'.$recentpost->slug) ?>"><?= $recentpost->tanggal; ?></a></div>
								<div><a href="<?= base_url('home/artikel/'.$recentpost->slug) ?>"><?= $recentpost->username; ?></a></div>

							</div>
							<p><?= substr($recentpost->keterangan, 0, 100) ?> ....</p>

						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="degree-left-footer"></div>
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