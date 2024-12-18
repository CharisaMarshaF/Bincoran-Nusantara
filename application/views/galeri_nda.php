
<?php require_once('_css.php')?>

<body>
	<?php require_once('_navbar.php')?>

	<!-- END nav -->

	<section class="hero-wrap hero-wrap-2 degree-right" style="background-image: url('<?= base_url('assets/avo/images/peta.jpg') ?>');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end">
				<div class="col-md-9 ftco-animate pb-5 mb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url()?>">Home <i
									class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
								href="<?= base_url('home/galeri')?>">Galeri <i class="fa fa-chevron-right"></i></a></span>
						<span></p>
					<h1 class="mb-3 bread">Galeri</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-portfolio">
		<div class="row justify-content-center no-gutters">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<h2 class="mb-2">Galeri</h2>
			</div>
		</div>

		<div class="container">
			<div class="row no-gutters pb-5">
				<?php foreach ($galeri as $index => $gg) { ?>
				<div class="col-md-12 portfolio-wrap mt-0">
					<div class="row no-gutters align-items-center">
						<?php if ($index % 2 == 0) { ?>
						<div class="col-md-5 img"
							style="background-image: url('<?= base_url('assets/upload/galeri/'.$gg['foto']) ?>');">
						</div>
						<div class="col-md-7">
							<div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc">
										<div class="top">
											<h2 class="mb-2"><a href="work.html"><?= $gg['judul'] ?></a></h2>
										</div>
										<div class="absolute">
											<p><?= $gg['isifoto'] ?></p>
											<div class="icon d-flex align-items-center mb-4">
												
												<div class="position pl-3">
													<h4 class="mb-0"><?= $gg['tanggal'] ?></h4>
													<span><?= $konfig->judul_website; ?></span>
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
											<h2 class="mb-2"><a href="work.html"><?= $gg['judul'] ?></a></h2>
										</div>
										<div class="absolute">
										<p><?= $gg['isifoto'] ?></p>
										<div class="d-flex w-100">
												<div class="icon d-flex align-items-center ml-md-auto mb-4">
													<div class="position pl-3 text-left">
														<h4 class="mb-0"><?= $gg['tanggal'] ?></h4>
														<span><?= $konfig->judul_website; ?></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5 order-md-last img"
							style="background-image: url('<?= base_url('assets/upload/galeri/'.$gg['foto']) ?>');">
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
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